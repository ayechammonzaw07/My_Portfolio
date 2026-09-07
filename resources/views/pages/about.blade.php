@extends('layouts.app')

@section('title', 'About | Aye Cham Mon Zaw')

@section('content')


    <section class="page-header">
        <div class="container">
            <h1 class="page-title">About Me</h1>
            <p class="page-subtitle text-muted">Get to know me better</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center g-5">
                {{-- Profile Image Placeholder --}}
                <div class="col-lg-4 text-center">
                    <div class="profile-image-wrapper mb-4">
                        <img src="{{ asset('images/ID photo .png') }}" alt="Aye Cham Mon Zaw"
                            class="profile-image-placeholder">
                    </div>
                    <h3 class="fw-bold">Aye Cham Mon Zaw</h3>
                    <p class="text-primary fw-semibold">Junior Software Developer</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a href="https://github.com/" target="_blank" rel="noopener noreferrer"
                            class="btn btn-outline-dark btn-sm">
                            <i class="bi bi-github me-1"></i> GitHub
                        </a>
                        <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer"
                            class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-linkedin me-1"></i> LinkedIn
                        </a>
                    </div>
                </div>

                {{-- About Content --}}
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-4">Professional Introduction</h2>

                    <p class="lead mb-4">
                        I am a Junior Software Developer with hands-on experience in building and maintaining
                        web applications using PHP, Laravel, MySQL, and Bootstrap. I enjoy working on backend
                        systems, creating efficient solutions, and continuously expanding my technical skill set.
                    </p>

                    <p class="mb-4">
                        At Softguide Software House, a Japanese-based software development company, I have been
                        responsible for developing Laravel web applications, maintaining backend features, fixing bugs,
                        and collaborating with development teams. This experience has given me a solid understanding
                        of MVC architecture, RESTful API development, and database design principles.
                    </p>

                    <p class="mb-4">
                        I am also passionate about mentoring and have guided 51 internship students through PHP
                        application architecture, Laravel project structure, and code debugging. I believe that
                        teaching others strengthens my own understanding of development best practices.
                    </p>

                    <p class="mb-4">
                        Currently, I am expanding my skills by learning Vue.js to become a more versatile full-stack
                        developer. I am always eager to learn new technologies and take on challenging projects
                        that push me to grow professionally.
                    </p>

                    {{-- Key highlights --}}
                    <div class="row g-3 mt-3">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <div>
                                    <strong>Experience</strong>
                                    <p class="mb-0 small text-muted">Laravel backend development</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <div>
                                    <strong>API Development</strong>
                                    <p class="mb-0 small text-muted">RESTful API design & implementation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <div>
                                    <strong>Database Design</strong>
                                    <p class="mb-0 small text-muted">MySQL schema design & optimization</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <div>
                                    <strong>Version Control</strong>
                                    <p class="mb-0 small text-muted">Git & GitHub collaboration</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <div>
                                    <strong>Code Debugging</strong>
                                    <p class="mb-0 small text-muted">Bug fixing & testing</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3">
                                <i class="bi bi-check-circle-fill text-primary me-3 fs-4"></i>
                                <div>
                                    <strong>Learning Vue.js</strong>
                                    <p class="mb-0 small text-muted">Expanding frontend capabilities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
