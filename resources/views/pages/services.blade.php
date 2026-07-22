@extends('layouts.app')

@section('title', 'Services | Aye Cham Mon Zaw')

@section('content')

{{-- ============================================================ --}}
{{-- SERVICES PAGE                                                --}}
{{-- Displays available development services as cards.          --}}
{{-- ============================================================ --}}
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Services</h1>
        <p class="page-subtitle text-muted">Professional development services I offer</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4">

            @php
                $services = [
                    [
                        'icon' => 'bi-hdd-stack',
                        'title' => 'Laravel Development',
                        'desc' => 'Building robust, scalable web applications using the Laravel framework. From custom CRUD applications to complex business systems with proper authentication, authorization, and database architecture.',
                    ],
                    [
                        'icon' => 'bi-globe',
                        'title' => 'PHP Website Development',
                        'desc' => 'Creating dynamic, database-driven websites using PHP and MySQL. Full-stack development including front-end templates, back-end logic, and database integration.',
                    ],
                    [
                        'icon' => 'bi-bug',
                        'title' => 'Bug Fixing',
                        'desc' => 'Quick identification and resolution of application bugs. Systematic debugging approach to find root causes and implement lasting fixes for PHP and Laravel applications.',
                    ],
                    [
                        'icon' => 'bi-database',
                        'title' => 'Database Design',
                        'desc' => 'Designing efficient MySQL database schemas with proper relationships, indexes, and migrations. Optimizing queries for better application performance.',
                    ],
                    [
                        'icon' => 'bi-plug',
                        'title' => 'API Development',
                        'desc' => 'Building RESTful APIs for web and mobile applications. Proper authentication, documentation, and error handling following industry best practices.',
                    ],
                    [
                        'icon' => 'bi-wrench',
                        'title' => 'Website Maintenance',
                        'desc' => 'Ongoing support including content updates, security patches, performance optimization, and feature enhancements for existing PHP and Laravel websites.',
                    ],
                ];
            @endphp

            @foreach($services as $index => $service)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <div class="card-body p-4">
                        <div class="icon-circle mb-3">
                            <i class="bi {{ $service['icon'] }}"></i>
                        </div>
                        <h4 class="card-title fw-bold">{{ $service['title'] }}</h4>
                        <p class="card-text text-muted">{{ $service['desc'] }}</p>

                        {{-- Contact CTA --}}
                        <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-sm mt-2">
                            Get In Touch <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        {{-- Call to action --}}
        <div class="text-center mt-5">
            <div class="cta-box p-5 rounded-4">
                <h3 class="fw-bold mb-3">Need a Custom Solution?</h3>
                <p class="text-muted mb-4">Let's discuss your project requirements and find the best approach.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-5">
                    <i class="bi bi-envelope me-2"></i>Contact Me
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
