@extends('layouts.app')

@section('title', 'Projects | Aye Cham Mon Zaw')

@section('content')

    {{-- ============================================================ --}}
    {{-- PROJECTS PAGE                                                --}}
    {{-- Displays project cards with descriptions, tech stacks,   --}}
    {{-- features, and action buttons.                              --}}
    {{-- ============================================================ --}}
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">My Projects</h1>
            <p class="page-subtitle text-muted">Showcasing my development work</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">

            <div class="row g-4">

                {{-- ============================================================ --}}
                {{-- PROJECT 1: Salon Booking Management System                   --}}
                {{-- ============================================================ --}}
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm project-card">
                        <div class="card-body p-4 p-md-5">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    {{-- Project header --}}
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-circle-sm me-3">
                                            <i class="bi bi-calendar-check"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-bold mb-0">Salon Booking Management System</h3>
                                        </div>
                                    </div>

                                    {{-- Tech stack badges --}}
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="badge bg-primary bg-opacity-10 text-primary">PHP</span>
                                        <span class="badge bg-primary bg-opacity-10 text-primary">MySQL</span>
                                        <span class="badge bg-primary bg-opacity-10 text-primary">Bootstrap</span>
                                        <span class="badge bg-primary bg-opacity-10 text-primary">JavaScript</span>
                                    </div>

                                    {{-- Description --}}
                                    <p class="mb-4">
                                        Developed a complete appointment booking system for salon businesses. This
                                        application
                                        streamlines the booking process with features for both customers and administrators,
                                        ensuring smooth appointment management and preventing scheduling conflicts.
                                    </p>

                                    {{-- Features list --}}
                                    <h6 class="fw-bold mb-3">Key Features</h6>
                                    <div class="row g-2 mb-4">
                                        @php
                                            $features = [
                                                'Customer booking system',
                                                'Admin dashboard',
                                                'Appointment management',
                                                'Service management',
                                                'Booking conflict prevention',
                                                'Time slot validation',
                                                'REST API integration',
                                                'Responsive UI design',
                                            ];
                                        @endphp

                                        @foreach ($features as $feature)
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                                    <span>{{ $feature }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- Action buttons --}}
                                <div class="col-lg-5 text-lg-end">
                                    <div class="d-flex flex-column flex-lg-row gap-3 justify-content-lg-end">
                                        <a href="https://github.com/" class="btn btn-outline-dark px-4" target="_blank"
                                            rel="noopener noreferrer">
                                            <i class="bi bi-github me-2"></i>GitHub
                                        </a>

                                    </div>

                                    {{-- Project image --}}
                                    <div class="mt-4">
                                        <img src="{{ asset('images/image.png') }}" alt="Salon Booking Screenshot"
                                            class="img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ============================================================ --}}
                {{-- PROJECT 2: Clothing E-commerce Website                       --}}
                {{-- ============================================================ --}}
                <div class="col-lg-12">
                    <div class="card border-0 shadow-sm project-card">
                        <div class="card-body p-4 p-md-5">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    {{-- Project header --}}
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="icon-circle-sm me-3">
                                            <i class="bi bi-bag"></i>
                                        </div>
                                        <div>
                                            <h3 class="fw-bold mb-0">Clothing E-commerce Website</h3>
                                        </div>
                                    </div>

                                    {{-- Tech stack badges --}}
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <span class="badge bg-primary bg-opacity-10 text-primary">Pure PHP</span>
                                        <span class="badge bg-primary bg-opacity-10 text-primary">MySQL</span>
                                        <span class="badge bg-primary bg-opacity-10 text-primary">Bootstrap</span>
                                        <span class="badge bg-primary bg-opacity-10 text-primary">JavaScript</span>
                                    </div>

                                    {{-- Description --}}
                                    <p class="mb-4">
                                        Built a full-featured e-commerce website using pure PHP without any framework.
                                        This project demonstrates strong understanding of core PHP concepts, database
                                        integration, and front-end development with a complete shopping experience.
                                    </p>

                                    {{-- Features list --}}
                                    <h6 class="fw-bold mb-3">Key Features</h6>
                                    <div class="row g-2 mb-4">
                                        @php
                                            $ecomFeatures = [
                                                'User authentication',
                                                'Product catalog',
                                                'Shopping cart',
                                                'Order management',
                                                'Admin dashboard',
                                                'Database integration',
                                                'Responsive design',
                                                'Search & filtering',
                                            ];
                                        @endphp

                                        @foreach ($ecomFeatures as $feature)
                                            <div class="col-sm-6">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                                    <span>{{ $feature }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                {{-- Action buttons --}}
                                <div class="col-lg-5 text-lg-end">
                                    {{-- Project image --}}
                                    <div class="mt-4">
                                        <img src="{{ asset('images/kage.png') }}" alt="E-Commerce Screenshot"
                                            class="img-fluid rounded">
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
