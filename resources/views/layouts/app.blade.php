<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Aye Cham Mon Zaw - Junior PHP Laravel Developer Portfolio. Building responsive web applications with PHP, Laravel, MySQL, JavaScript, and Bootstrap.">
    <meta name="keywords"
        content="PHP Developer, Laravel Developer, Junior Developer, Web Developer, Portfolio, Backend Developer, MySQL">
    <meta name="author" content="Aye Cham Mon Zaw">

    {{-- Page title dynamically set from each view --}}
    <title>@yield('title', 'Aye Cham Mon Zaw | Junior PHP Laravel Developer')</title>

    {{-- Bootstrap 5 CSS via CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons for social and UI icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    {{-- Google Fonts - Inter for professional typography --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    {{-- Custom portfolio styles --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    {{-- ============================================================ --}}
    {{-- NAVIGATION BAR                                               --}}
    {{-- Sticky top navbar with brand logo, nav links, dark mode      --}}
    {{-- toggle, and mobile hamburger menu. Uses Bootstrap 5 navbar.  --}}
    {{-- ============================================================ --}}
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container">
            {{-- Brand name / logo --}}
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">
                <span class="brand-text">Aye Cham Mon Zaw</span>
            </a>

            {{-- Mobile toggle button for small screens --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Collapsible navigation links --}}
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}"
                            href="{{ route('skills') }}">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('experience') ? 'active' : '' }}"
                            href="{{ route('experience') }}">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}"
                            href="{{ route('projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}"
                            href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>

                    {{-- Dark mode toggle button --}}
                    <li class="nav-item ms-2">
                        <button class="btn btn-link nav-link dark-mode-toggle" id="darkModeToggle"
                            title="Toggle dark mode">
                            <i class="bi bi-moon-fill" id="darkModeIcon"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- ============================================================ --}}
    {{-- MAIN CONTENT AREA                                            --}}
    {{-- Each page's content is injected here via @yield('content')  --}}
    {{-- ============================================================ --}}
    <main>
        @yield('content')
    </main>

    {{-- ============================================================ --}}
    {{-- FOOTER                                                       --}}
    {{-- Contains copyright, social links, and back-to-top button.   --}}
    {{-- ============================================================ --}}
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                {{-- Copyright notice --}}
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0">&copy; {{ date('Y') }} Aye Cham Mon Zaw. All rights reserved.</p>
                </div>

                {{-- Social media icons --}}
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <div class="social-links">
                        <a href="https://github.com/" target="_blank" rel="noopener noreferrer" class="social-link"
                            aria-label="GitHub">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer" class="social-link"
                            aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="mailto:ayechammonzaw@gmail.com" class="social-link" aria-label="Email">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                    </div>
                </div>

                {{-- Back to top button --}}
                <div class="col-md-4 text-center text-md-end">
                    <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top">
                        <i class="bi bi-arrow-up-circle-fill"></i> Back to Top
                    </a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Bootstrap 5 JS Bundle (includes Popper) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Vue.js 3 CDN for basic reactivity --}}
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    {{-- Custom portfolio JavaScript --}}
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Page-specific scripts can be injected here --}}
    @stack('scripts')

</body>

</html>
