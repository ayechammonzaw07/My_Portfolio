#!/usr/bin/env bash
#
# Deploy script for the Portfolio (Laravel) app.
#
# Usage:
#   ./deploy/deploy.sh                  # default production deployment
#   APP_ENV=staging ./deploy/deploy.sh  # override environment
#
# Run as a user with sudo privileges (e.g. root or a deploy user).

set -euo pipefail

# ---- Configuration (adjust these) ----
DEPLOY_DIR="${DEPLOY_DIR:-/var/www/portfolio}"
BRANCH="${BRANCH:-main}"
APP_ENV="${APP_ENV:-production}"
APP_USER="${APP_USER:-www-data}"
PHP_FPM_SERVICE="${PHP_FPM_SERVICE:-php8.3-fpm}"
NGINX_SERVICE="${NGINX_SERVICE:-nginx}"
# --------------------------------------

if [[ "${EUID}" -ne 0 ]]; then
    echo "Error: please run as root or with sudo." >&2
    exit 1
fi

cd "${DEPLOY_DIR}"

echo "==> Pulling latest code (branch: ${BRANCH})"
git fetch origin "${BRANCH}"
git checkout "${BRANCH}"
git pull origin "${BRANCH}"

echo "==> Installing PHP dependencies"
composer install --no-dev --prefer-dist --optimize-autoloader --no-interaction

echo "==> Installing JS dependencies"
npm install --no-audit --no-fund

echo "==> Building frontend assets"
npm run build

echo "==> Setting up environment"
if [[ ! -f .env ]]; then
    cp .env.example .env
    echo "WARNING: .env was created from .env.example. You must edit it."
fi

echo "==> Running migrations"
php artisan migrate --force

echo "==> Clearing and caching config"
php artisan storage:link
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "==> Fixing permissions"
chown -R "${APP_USER}":"${APP_USER}" "${DEPLOY_DIR}"
chmod -R 775 "${DEPLOY_DIR}/storage" "${DEPLOY_DIR}/bootstrap/cache"

echo "==> Restarting services"
systemctl reload "${NGINX_SERVICE}"
systemctl reload "${PHP_FPM_SERVICE}" || systemctl restart "${PHP_FPM_SERVICE}"

echo "==> Deployment complete"
