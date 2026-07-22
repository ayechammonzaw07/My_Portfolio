@extends('layouts.app')

@section('title', 'Skills | Aye Cham Mon Zaw')

@section('content')

{{-- ============================================================ --}}
{{-- SKILLS PAGE                                                  --}}
{{-- Displays technical skills organized by category using     --}}
{{-- Bootstrap cards and progress bars for visual representation --}}
{{-- ============================================================ --}}
<section class="page-header">
    <div class="container">
        <h1 class="page-title">Technical Skills</h1>
        <p class="page-subtitle text-muted">My technical proficiency and expertise</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">

        {{-- ============================================================ --}}
        {{-- FRONTEND SKILLS                                             --}}
        {{-- ============================================================ --}}
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold mb-4">
                            <i class="bi bi-layout-wtf text-primary me-2"></i>Frontend Development
                        </h3>

                        {{-- Skill: HTML5 --}}
                        <div class="skill-item mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold">HTML5</span>
                                <span class="text-muted">90%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"></div>
                            </div>
                        </div>

                        {{-- Skill: CSS3 --}}
                        <div class="skill-item mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold">CSS3</span>
                                <span class="text-muted">85%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                            </div>
                        </div>

                        {{-- Skill: Bootstrap --}}
                        <div class="skill-item mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold">Bootstrap 5</span>
                                <span class="text-muted">85%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
                            </div>
                        </div>

                        {{-- Skill: JavaScript --}}
                        <div class="skill-item mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold">JavaScript</span>
                                <span class="text-muted">70%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"></div>
                            </div>
                        </div>

                        {{-- Skill: Vue.js --}}
                        <div class="skill-item mb-2">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold">Vue.js (Basic)</span>
                                <span class="text-muted">45%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 45%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ============================================================ --}}
        {{-- BACKEND SKILLS                                              --}}
        {{-- ============================================================ --}}
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold mb-4">
                            <i class="bi bi-server text-primary me-2"></i>Backend Development
                        </h3>

                        {{-- Skill: PHP --}}
                        <div class="skill-item mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold">PHP</span>
                                <span class="text-muted">80%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"></div>
                            </div>
                        </div>

                        {{-- Skill: Laravel --}}
                        <div class="skill-item mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold">Laravel</span>
                                <span class="text-muted">75%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%"></div>
                            </div>
                        </div>

                        {{-- Skill: REST API --}}
                        <div class="skill-item mb-2">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold">REST API</span>
                                <span class="text-muted">70%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 70%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ============================================================ --}}
        {{-- DATABASE & TOOLS                                            --}}
        {{-- ============================================================ --}}
        <div class="row g-4">
            {{-- Database --}}
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold mb-4">
                            <i class="bi bi-database text-primary me-2"></i>Database
                        </h3>

                        {{-- Skill: MySQL --}}
                        <div class="skill-item mb-4">
                            <div class="d-flex justify-content-between mb-1">
                                <span class="fw-semibold">MySQL</span>
                                <span class="text-muted">80%</span>
                            </div>
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"></div>
                            </div>
                        </div>

                        {{-- Skill tags --}}
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            <span class="badge bg-light text-dark border skill-badge">Database Design</span>
                            <span class="badge bg-light text-dark border skill-badge">Query Optimization</span>
                            <span class="badge bg-light text-dark border skill-badge">Migrations</span>
                            <span class="badge bg-light text-dark border skill-badge">Eloquent ORM</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Tools --}}
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h3 class="card-title fw-bold mb-4">
                            <i class="bi bi-tools text-primary me-2"></i>Development Tools
                        </h3>

                        {{-- Tool cards in a compact grid --}}
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="d-flex align-items-center p-2 bg-light rounded-3">
                                    <i class="bi bi-git text-primary me-2 fs-5"></i>
                                    <span class="fw-semibold small">Git</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center p-2 bg-light rounded-3">
                                    <i class="bi bi-github text-dark me-2 fs-5"></i>
                                    <span class="fw-semibold small">GitHub</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center p-2 bg-light rounded-3">
                                    <i class="bi bi-box-arrow-in-down text-primary me-2 fs-5"></i>
                                    <span class="fw-semibold small">Docker</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center p-2 bg-light rounded-3">
                                    <i class="bi bi-code-slash text-primary me-2 fs-5"></i>
                                    <span class="fw-semibold small">VS Code</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center p-2 bg-light rounded-3">
                                    <i class="bi bi-terminal text-primary me-2 fs-5"></i>
                                    <span class="fw-semibold small">Composer</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center p-2 bg-light rounded-3">
                                    <i class="bi bi-file-earmark-code text-primary me-2 fs-5"></i>
                                    <span class="fw-semibold small">Postman</span>
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
