@extends('layouts.app')

@section('title', 'Contact | Aye Cham Mon Zaw')

@section('content')

    {{-- ============================================================ --}}
    {{-- CONTACT PAGE                                                 --}}
    {{-- Contains a contact form and contact information with     --}}
    {{-- a Google Map placeholder.                                  --}}
    {{-- ============================================================ --}}
    <section class="page-header">
        <div class="container">
            <h1 class="page-title">Contact Me</h1>
            <p class="page-subtitle text-muted">Let's get in touch</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-5">

                {{-- ============================================================ --}}
                {{-- CONTACT FORM                                                 --}}
                {{-- ============================================================ --}}
                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="fw-bold mb-4">Send Me a Message</h3>

                            {{-- Success message display --}}
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            {{-- Validation errors display --}}
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <i class="bi bi-exclamation-triangle me-2"></i>
                                    Please fix the following errors:
                                    <ul class="mb-0 mt-2">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            {{-- Contact form --}}
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf

                                {{-- Name field --}}
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}"
                                        placeholder="Your full name" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Email field --}}
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email') }}"
                                        placeholder="your.email@example.com" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Subject field --}}
                                <div class="mb-3">
                                    <label for="subject" class="form-label fw-semibold">Subject</label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                        id="subject" name="subject" value="{{ old('subject') }}"
                                        placeholder="Project inquiry, job opportunity, etc." required>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Message field --}}
                                <div class="mb-4">
                                    <label for="message" class="form-label fw-semibold">Message</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5"
                                        placeholder="Tell me about your project or question..." required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Submit button --}}
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="bi bi-send me-2"></i>Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- ============================================================ --}}
                {{-- CONTACT INFORMATION                                          --}}
                {{-- ============================================================ --}}
                <div class="col-lg-5">
                    {{-- Contact details cards --}}
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">Contact Information</h4>

                            <div class="contact-info-list">
                                {{-- Email --}}
                                <div class="contact-info-item mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="icon-circle-sm me-3 flex-shrink-0">
                                            <i class="bi bi-envelope"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-semibold mb-1">Email</h6>
                                            <a href="mailto:ayechammonzaw@gmail.com"
                                                class="text-decoration-none text-muted">
                                                ayechammonzaw07@gmail.com
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Phone --}}
                                <div class="contact-info-item mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="icon-circle-sm me-3 flex-shrink-0">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-semibold mb-1">Phone</h6>
                                            <a href="tel:+959XXXXXXXX" class="text-decoration-none text-muted">
                                                +95 9 968 087 970
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- GitHub --}}
                                <div class="contact-info-item mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="icon-circle-sm me-3 flex-shrink-0">
                                            <i class="bi bi-github"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-semibold mb-1">GitHub</h6>
                                            <a href="https://github.com/" target="_blank" rel="noopener noreferrer"
                                                class="text-decoration-none text-muted">
                                                github.com/ayechammonzaw
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- LinkedIn --}}
                                <div class="contact-info-item mb-4">
                                    <div class="d-flex align-items-start">
                                        <div class="icon-circle-sm me-3 flex-shrink-0">
                                            <i class="bi bi-linkedin"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-semibold mb-1">LinkedIn</h6>
                                            <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer"
                                                class="text-decoration-none text-muted">
                                                linkedin.com/in/ayechammonzaw
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Location --}}
                                <div class="contact-info-item">
                                    <div class="d-flex align-items-start">
                                        <div class="icon-circle-sm me-3 flex-shrink-0">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <div>
                                            <h6 class="fw-semibold mb-1">Location</h6>
                                            <p class="text-muted mb-0">No.33,Yadanar Street,92 ward, Dagon Seikkan,Yangon,
                                                Myanmar</p>
                                        </div>
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
