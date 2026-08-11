@extends('layouts.app')

@section('title', 'Experience | Aye Cham Mon Zaw')

@section('content')

    {{-- ============================================================ --}}
    {{-- EXPERIENCE PAGE                                              --}}
    {{-- Displays work experience and mentorship sections with   --}}
    {{-- detailed responsibilities listed for each role.           --}}
    {{-- ============================================================ --}}
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">Work Experience</h1>
            <p class="page-subtitle text-muted">My professional journey and contributions</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">

            {{-- ============================================================ --}}
            {{-- WORK EXPERIENCE SECTION                                     --}}
            {{-- ============================================================ --}}
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4 p-md-5">
                            {{-- Company header --}}
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-circle-lg me-3 flex-shrink-0">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bold mb-1">Junior PHP Developer</h3>
                                    <h5 class="text-primary mb-1">Softguide Software House</h5>
                                    <p class="text-muted mb-0">
                                        <i class="bi bi-geo-alt me-1"></i>Japanese-based Software Development Company
                                    </p>
                                </div>

                                <!-- Right -->
                                <div class="text-end">
                                    <span class="badge bg-success px-3 py-2">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        January 2026 – July 2026
                                    </span>
                                </div>
                            </div>

                            <hr class="my-4">

                            {{-- Responsibilities --}}
                            <h5 class="fw-bold mb-3">Key Responsibilities</h5>
                            <div class="row g-3">
                                @php
                                    $responsibilities = [
                                        ['icon' => 'bi-code-square', 'text' => 'Developed Laravel web applications'],
                                        [
                                            'icon' => 'bi-gear',
                                            'text' => 'Maintained backend features and functionality',
                                        ],
                                        ['icon' => 'bi-bug', 'text' => 'Fixed bugs and debugged applications'],
                                        [
                                            'icon' => 'bi-search',
                                            'text' => 'Reviewed backend code for quality assurance',
                                        ],
                                        ['icon' => 'bi-people', 'text' => 'Collaborated with development team members'],
                                        [
                                            'icon' => 'bi-check2-square',
                                            'text' => 'Participated in software testing processes',
                                        ],
                                        ['icon' => 'bi-speedometer2', 'text' => 'Improved application performance'],
                                        ['icon' => 'bi-git', 'text' => 'Worked with Git version control system'],
                                        ['icon' => 'bi-database', 'text' => 'Managed MySQL database operations'],
                                        [
                                            'icon' => 'bi-journal-text',
                                            'text' => 'Participated in software documentation',
                                        ],
                                    ];
                                @endphp

                                @foreach ($responsibilities as $item)
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start p-3 bg-light rounded-3 h-100">
                                            <i class="bi {{ $item['icon'] }} text-primary me-3 mt-1 fs-5"></i>
                                            <span>{{ $item['text'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- ============================================================ --}}
            {{-- MENTORSHIP EXPERIENCE SECTION                               --}}
            {{-- ============================================================ --}}
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            {{-- Section header --}}
                            <div class="d-flex align-items-start mb-4">
                                <div class="icon-circle-lg me-3 flex-shrink-0">
                                    <i class="bi bi-mortarboard"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bold mb-1">Mentorship & Technical Guidance</h3>
                                    <p class="text-muted mb-0">Guiding the next generation of developers</p>
                                </div>
                            </div>

                            <p class="mb-4">
                                Successfully mentored <strong>51 internship students</strong> through their academic and
                                professional development journey. Provided comprehensive guidance on PHP application
                                architecture, Laravel development best practices, and real-world software engineering
                                principles.
                            </p>

                            <hr class="my-4">

                            {{-- Mentorship responsibilities --}}
                            <h5 class="fw-bold mb-3">Mentorship Responsibilities</h5>
                            <div class="row g-3 mb-4">
                                @php
                                    $mentorship = [
                                        ['icon' => 'bi-diagram-3', 'text' => 'Explained PHP application architecture'],
                                        ['icon' => 'bi-folder2-open', 'text' => 'Guided Laravel project structure'],
                                        [
                                            'icon' => 'bi-box-arrow-in-right',
                                            'text' => 'Helped students understand MVC pattern',
                                        ],
                                        ['icon' => 'bi-arrow-repeat', 'text' => 'Reviewed project flow and data flow'],
                                        [
                                            'icon' => 'bi-database',
                                            'text' => 'Reviewed database design and relationships',
                                        ],
                                        ['icon' => 'bi-bug', 'text' => 'Helped debug PHP and Laravel code'],
                                        [
                                            'icon' => 'bi-lightbulb',
                                            'text' => 'Assisted with business logic implementation',
                                        ],
                                        [
                                            'icon' => 'bi-clipboard-check',
                                            'text' => 'Provided feedback on coding standards',
                                        ],
                                        [
                                            'icon' => 'bi-flag-checkered',
                                            'text' => 'Supported students until project completion',
                                        ],
                                    ];
                                @endphp

                                @foreach ($mentorship as $item)
                                    <div class="col-md-6">
                                        <div class="d-flex align-items-start p-3 bg-light rounded-3 h-100">
                                            <i class="bi {{ $item['icon'] }} text-primary me-3 mt-1 fs-5"></i>
                                            <span>{{ $item['text'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- Mentorship stats --}}
                            <hr class="my-4">
                            <div class="row g-4 text-center">
                                <div class="col-6 col-md-3">
                                    <div class="stat-card p-3">
                                        <h2 class="fw-bold text-primary mb-1">51</h2>
                                        <p class="text-muted small mb-0">Students Mentored</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="stat-card p-3">
                                        <h2 class="fw-bold text-primary mb-1">50+</h2>
                                        <p class="text-muted small mb-0">Project Reviews</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="stat-card p-3">
                                        <h2 class="fw-bold text-primary mb-1">100+</h2>
                                        <p class="text-muted small mb-0">Code Debugging Sessions</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="stat-card p-3">
                                        <h2 class="fw-bold text-primary mb-1">50+</h2>
                                        <p class="text-muted small mb-0">System Design Guidance</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
