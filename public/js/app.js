/*
|--------------------------------------------------------------------------
| Portfolio JavaScript
|--------------------------------------------------------------------------
| Handles interactive features:
| - Dark mode toggle with localStorage persistence
| - Scroll-to-top button visibility
| - Navbar background change on scroll
| - Fade-in animations on scroll (Intersection Observer)
| - Vue.js integration for reactive components
|
| Uses vanilla JavaScript for core functionality and Vue.js
| for any reactive UI components that need it.
|--------------------------------------------------------------------------
*/

document.addEventListener('DOMContentLoaded', function () {

    // ================================================================
    // DARK MODE TOGGLE
    // Switches between light and dark themes. Persists the user's
    // preference in localStorage so it survives page reloads.
    // ================================================================
    const darkModeToggle = document.getElementById('darkModeToggle');
    const darkModeIcon = document.getElementById('darkModeIcon');
    const htmlElement = document.documentElement;

    // Check for saved preference or system preference on page load
    function initDarkMode() {
        const savedTheme = localStorage.getItem('portfolio-theme');

        if (savedTheme) {
            // Use saved preference
            htmlElement.setAttribute('data-bs-theme', savedTheme);
            updateIcon(savedTheme);
        } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            // Use system preference as fallback
            htmlElement.setAttribute('data-bs-theme', 'dark');
            updateIcon('dark');
        }
    }

    // Update the toggle icon based on current theme
    function updateIcon(theme) {
        if (darkModeIcon) {
            darkModeIcon.className = theme === 'dark' ? 'bi bi-sun-fill' : 'bi bi-moon-fill';
        }
    }

    // Toggle dark/light mode on button click
    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', function () {
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

            htmlElement.setAttribute('data-bs-theme', newTheme);
            localStorage.setItem('portfolio-theme', newTheme);
            updateIcon(newTheme);
        });
    }

    // Initialize dark mode on page load
    initDarkMode();

    // ================================================================
    // SCROLL TO TOP BUTTON
    // Shows a floating button when the user scrolls down past
    // a certain threshold. Clicking it scrolls smoothly to top.
    // ================================================================

    // Create the scroll-to-top button dynamically
    const scrollToTopBtn = document.createElement('button');
    scrollToTopBtn.id = 'backToTopBtn';
    scrollToTopBtn.innerHTML = '<i class="bi bi-arrow-up"></i>';
    scrollToTopBtn.setAttribute('aria-label', 'Scroll to top');
    scrollToTopBtn.setAttribute('title', 'Back to top');
    document.body.appendChild(scrollToTopBtn);

    // Show/hide button based on scroll position
    function handleScrollToTop() {
        if (window.scrollY > 400) {
            scrollToTopBtn.classList.add('visible');
        } else {
            scrollToTopBtn.classList.remove('visible');
        }
    }

    // Smooth scroll to top on button click
    scrollToTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // ================================================================
    // NAVBAR SCROLL EFFECT
    // Adds a shadow to the navbar when the user scrolls down,
    // giving a visual cue that the navbar is now sticky.
    // ================================================================
    const navbar = document.getElementById('mainNav');

    function handleNavbarScroll() {
        if (window.scrollY > 50) {
            navbar.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
            navbar.style.padding = '0.5rem 0';
        } else {
            navbar.style.boxShadow = '0 1px 3px rgba(0, 0, 0, 0.08)';
            navbar.style.padding = '0.8rem 0';
        }
    }

    // ================================================================
    // SCROLL EVENT HANDLER
    // Combines all scroll-based functionality into one handler
    // for better performance. Uses a single event listener.
    // ================================================================
    window.addEventListener('scroll', function () {
        handleScrollToTop();
        handleNavbarScroll();
    }, { passive: true });

    // ================================================================
    // FADE-IN ANIMATION ON SCROLL
    // Uses Intersection Observer API to detect when elements
    // enter the viewport and trigger fade-in animations.
    // More performant than scroll event-based animations.
    // ================================================================

    // Add fade-in-up class to cards and sections
    const animatedElements = document.querySelectorAll(
        '.card, .stat-card, .hero-buttons, .profile-image-wrapper'
    );

    animatedElements.forEach(function (el) {
        el.classList.add('fade-in-up');
    });

    // Create an Intersection Observer
    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                // Stop observing once animated to save resources
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,       // Trigger when 10% of element is visible
        rootMargin: '0px 0px -50px 0px'  // Offset trigger point
    });

    // Observe all animated elements
    animatedElements.forEach(function (el) {
        observer.observe(el);
    });

    // ================================================================
    // PROGRESS BAR ANIMATION
    // Animates skill progress bars when they come into view.
    // Bars start at 0% width and animate to their target width.
    // ================================================================
    const progressBars = document.querySelectorAll('.progress-bar');

    const progressObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                const progressBar = entry.target;
                const targetWidth = progressBar.getAttribute('style')
                    .match(/width:\s*(\d+)%/);

                if (targetWidth) {
                    // Reset to 0 then animate to target
                    progressBar.style.width = '0%';
                    setTimeout(function () {
                        progressBar.style.width = targetWidth[1] + '%';
                    }, 200);
                }

                progressObserver.unobserve(progressBar);
            }
        });
    }, {
        threshold: 0.5
    });

    progressBars.forEach(function (bar) {
        progressObserver.observe(bar);
    });

    // ================================================================
    // CLOSE MOBILE NAVBAR ON LINK CLICK
    // When a nav link is clicked on mobile, automatically close
    // the hamburger menu for better user experience.
    // ================================================================
    const navLinks = document.querySelectorAll('#navbarNav .nav-link');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            const navbarCollapse = document.getElementById('navbarNav');
            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);

            if (bsCollapse && window.innerWidth < 992) {
                bsCollapse.hide();
            }
        });
    });

    // ================================================================
    // VUE.JS INITIALIZATION (Basic Usage)
    // Initializes a simple Vue instance for any reactive
    // components on the page. Keeps Vue lightweight.
    // ================================================================
    if (typeof Vue !== 'undefined') {
        // Can be expanded for reactive portfolio features
        // For example: project filtering, dynamic content loading
    }

}); // End DOMContentLoaded
