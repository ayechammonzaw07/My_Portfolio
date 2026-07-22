@extends('layouts.app')

@section('title', 'Aye Cham Mon Zaw | Junior PHP Laravel Developer')

@section('content')

    {{-- ============================================================ --}}
    {{-- HERO SECTION                                                 --}}
    {{-- Full-screen landing section with name, title, short intro, --}}
    {{-- and action buttons. Uses a clean white background with     --}}
    {{-- blue accent color for visual hierarchy.                    --}}
    {{-- ============================================================ --}}
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-8 mx-auto text-center">
                    {{-- Greeting and name --}}
                    <p class="hero-greeting text-muted mb-3">Hello, I'm</p>
                    <h1 class="hero-name fw-bold mb-3">Aye Cham Mon Zaw</h1>
                    <h2 class="hero-title mb-4">Junior PHP Laravel Developer</h2>

                    {{-- Short professional introduction --}}
                    <p class="hero-intro lead mb-5">
                        I develop responsive web applications using PHP, Laravel, MySQL, JavaScript, and Bootstrap. I enjoy
                        building clean backend systems, solving problems, and continuously improving my development skills.
                    </p>

                    {{-- Action buttons --}}
                    <div class="hero-buttons d-flex flex-wrap justify-content-center gap-3">
                        <a href="{{ asset('AyeChamMonZaw RESUME.pdf') }}" class="btn btn-primary btn-lg px-4" download>
                            <i class="bi bi-download me-2"></i>Download Resume
                        </a>
                        <a href="{{ route('projects') }}" class="btn btn-outline-primary btn-lg px-4">
                            <i class="bi bi-folder2-open me-2"></i>View Projects
                        </a>
                        <a href="https://github.com/" target="_blank" rel="noopener noreferrer"
                            class="btn btn-outline-secondary btn-lg px-4">
                            <i class="bi bi-github me-2"></i>GitHub
                        </a>
                        <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer"
                            class="btn btn-outline-secondary btn-lg px-4">
                            <i class="bi bi-linkedin me-2"></i>LinkedIn
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- WHY HIRE ME PREVIEW                                          --}}
    {{-- Quick overview cards shown on the home page to give        --}}
    {{-- visitors an immediate sense of value.                       --}}
    {{-- ============================================================ --}}
    <section class="section-padding bg-light" id="why-hire">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Why Hire Me</h2>
                <p class="section-subtitle text-muted">What I bring to the table</p>
            </div>

            <div class="row g-4">
                {{-- Clean Code --}}
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center card-hover">
                        <div class="card-body p-4">
                            <div class="icon-circle mb-3 mx-auto">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <h5 class="card-title">Clean Code</h5>
                            <p class="card-text text-muted">Writing maintainable, well-structured code following best
                                practices.</p>
                        </div>
                    </div>
                </div>

                {{-- Problem Solving --}}
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center card-hover">
                        <div class="card-body p-4">
                            <div class="icon-circle mb-3 mx-auto">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                            <h5 class="card-title">Problem Solving</h5>
                            <p class="card-text text-muted">Analytical approach to debugging and finding efficient
                                solutions.</p>
                        </div>
                    </div>
                </div>

                {{-- Fast Learner --}}
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center card-hover">
                        <div class="card-body p-4">
                            <div class="icon-circle mb-3 mx-auto">
                                <i class="bi bi-lightning"></i>
                            </div>
                            <h5 class="card-title">Fast Learner</h5>
                            <p class="card-text text-muted">Quickly adapting to new technologies and development workflows.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Reliable Communication --}}
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm text-center card-hover">
                        <div class="card-body p-4">
                            <div class="icon-circle mb-3 mx-auto">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h5 class="card-title">Reliable Communication</h5>
                            <p class="card-text text-muted">Clear, timely updates and collaborative approach to teamwork.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- SERVICES PREVIEW                                             --}}
    {{-- Quick preview of services on the home page.                 --}}
    {{-- ============================================================ --}}
    <section class="section-padding" id="services-preview">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Services I Offer</h2>
                <p class="section-subtitle text-muted">Professional development services</p>
            </div>

            <div class="row g-4 justify-content-center">
                @php
                    $servicesPreview = [
                        [
                            'icon' => 'bi-hdd-stack',
                            'title' => 'Laravel Development',
                            'desc' => 'Custom web applications built with Laravel framework.',
                        ],
                        [
                            'icon' => 'bi-globe',
                            'title' => 'PHP Website Development',
                            'desc' => 'Full-featured websites using PHP and MySQL.',
                        ],
                        [
                            'icon' => 'bi-bug',
                            'title' => 'Bug Fixing',
                            'desc' => 'Quick identification and resolution of application bugs.',
                        ],
                        [
                            'icon' => 'bi-database',
                            'title' => 'Database Design',
                            'desc' => 'Efficient MySQL database architecture and optimization.',
                        ],
                        [
                            'icon' => 'bi-plug',
                            'title' => 'API Development',
                            'desc' => 'RESTful APIs for web and mobile applications.',
                        ],
                        [
                            'icon' => 'bi-wrench',
                            'title' => 'Website Maintenance',
                            'desc' => 'Ongoing support, updates, and performance improvements.',
                        ],
                    ];
                @endphp

                @foreach ($servicesPreview as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm card-hover">
                            <div class="card-body p-4 text-center">
                                <div class="icon-circle mb-3 mx-auto">
                                    <i class="bi {{ $service['icon'] }}"></i>
                                </div>
                                <h5 class="card-title">{{ $service['title'] }}</h5>
                                <p class="card-text text-muted">{{ $service['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="{{ route('services') }}" class="btn btn-outline-primary">View All Services <i
                        class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </section>

@endsection
