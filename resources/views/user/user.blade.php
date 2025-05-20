@extends('layouts.user.app')
@section('content')
    <div id="beranda" class="section pt-5">
        <div class="container">
            <div class="row min-vh-100 min-vh-u-lg-85 align-content-center">
                <div class="col-12 col-lg-6 py-4" data-aos="fade-right" data-aos-duration="1000" id="container-image-hero">
                    <div class="position-relative rounded-4 overflow-hidden shadow-lg">
                        <img class="img-fluid w-100 h-auto" id="gambar-cabai"
                            src="{{ asset('assets/img/gambar-cabai.webp') }}" width="1280" height="853"
                            alt="Gambar Cabai">
                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-overlay"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 align-self-center px-4 py-5" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-delay="200" id="col2">
                    <span class="badge bg-primary mb-3 py-2 px-3 rounded-pill">Expert System</span>
                    <h1 class="display-5 fw-bold mb-4 text-start">
                        Sistem Pakar Diagnosis Penyakit Tanaman Cabai
                    </h1>
                    <p class="lead text-muted mb-4">Temukan penyakit yang menyerang tanaman cabai anda serta ketahui
                        penyebab dan solusi
                        pengendaliannya. Daftar sekarang lalu mulai diagnosis untuk hasil panen yang lebih baik!</p>
                    <div class="d-flex gap-3">
                        <a href="#diagnosis" class="btn btn-primary btn-lg px-4 py-3 rounded-pill">
                            <i class="fas fa-leaf me-2"></i>Mulai Diagnosis
                        </a>
                        <a href="#penyakit" class="btn btn-outline-primary btn-lg px-4 py-3 rounded-pill">
                            <i class="fas fa-info-circle me-2"></i>Info Penyakit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="diagnosis" class="section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="badge bg-primary mb-3 py-2 px-3 rounded-pill" data-aos="fade-up">Forward Chaining</span>
                    <h2 class="font-semibold display-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        Diagnosis Penyakit Tanaman Cabai
                    </h2>
                    <p class="lead text-muted mb-4" data-aos="fade-up" data-aos-delay="200">
                        Gunakan sistem pakar kami untuk mendiagnosa penyakit pada tanaman cabai anda dengan cepat dan akurat
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10" data-aos="fade-up" data-aos-delay="300">
                    <div class="card shadow border-0 rounded-4">
                        <div class="card-body p-4 p-lg-5">
                            <div class="row align-items-center">
                                <div class="col-lg-4 mb-4 mb-lg-0">
                                    <div class="text-center">
                                        <div class="bg-light p-4 rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                                            style="width: 100px; height: 100px;">
                                            <i class="fas fa-microscope fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-3">Metode Forward Chaining</h4>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card-text mb-4">
                                        <p>Sistem ini menggunakan metode forward chaining untuk mendiagnosis penyakit.
                                            Proses dimulai
                                            dengan mengevaluasi gejala yang diberikan oleh pengguna, kemudian sistem
                                            mencocokkannya
                                            dengan aturan yang ada. Jika terdapat aturan yang terpenuhi, sistem akan
                                            memberikan detail
                                            hasil diagnosis penyakit. Detail hasil diagnosis penyakit akan disimpan dalam
                                            sistem.
                                            Pengguna dapat melihat kembali detail hasil diagnosis yang telah dilakukan pada
                                            histori
                                            diagnosis di menu profil.</p>
                                    </div>
                                    <div class="d-grid">
                                        <button id="btn-diagnosis" class="btn btn-primary py-3 px-5 rounded-pill">
                                            <i class="fas fa-stethoscope me-2"></i>Mulai Diagnosis Penyakit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="penyakit" class="section py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="badge bg-primary mb-3 py-2 px-3 rounded-pill" data-aos="fade-up">Info Penyakit</span>
                    <h2 class="font-semibold display-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                        Daftar Penyakit Tanaman Cabai
                    </h2>
                    <p class="lead text-muted mb-4" data-aos="fade-up" data-aos-delay="200">
                        Kenali berbagai jenis penyakit yang umum menyerang tanaman cabai beserta penyebab dan solusinya
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-body border-0 shadow-lg p-4 rounded-4 mt-3" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="nav-pill-container mb-4">
                            <ul class="nav nav-pills d-flex flex-nowrap overflow-auto pb-2 mb-3" id="pills-tab"
                                role="tablist">
                                @foreach ($penyakit as $index => $p)
                                    <li class="nav-item" role="presentation">
                                        <button
                                            class="nav-link {{ $index === 0 ? 'active' : '' }} d-flex align-items-center px-4 py-2 me-2 rounded-pill"
                                            id="pills-{{ $p->id }}-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-{{ $p->id }}" type="button" role="tab"
                                            aria-controls="pills-{{ $p->id }}"
                                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                            <i class="fas fa-bug me-2"></i>{{ $p->name }}
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            @foreach ($penyakit as $index => $p)
                                <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}"
                                    id="pills-{{ $p->id }}" role="tabpanel"
                                    aria-labelledby="pills-{{ $p->id }}-tab" tabindex="0">
                                    <div class="card border-0 bg-light rounded-4">
                                        <div class="card-body p-4 p-lg-5">
                                            <div class="row g-4">
                                                @php
                                                    $image = $p->image;
                                                    [$width, $height] = getimagesize(
                                                        storage_path('app/public/penyakit/' . $image),
                                                    );
                                                @endphp
                                                <div class="col-12 col-lg-4 order-lg-2">
                                                    <div class="container-image-penyakit h-100">
                                                        <div class="container-chocolat h-100">
                                                            <a href="#" class="open-image-chocolat d-block h-100">
                                                                <img width="{{ $width }}"
                                                                    height="{{ $height }}"
                                                                    class="img-fluid rounded-4 w-100 h-100 object-fit-cover chocolat-image"
                                                                    title="{{ $p->name }}"
                                                                    src="{{ asset('/storage/penyakit/' . $p->image) }}"
                                                                    alt="{{ $p->name }}" loading="lazy"
                                                                    data-bs-toggle="tooltip"
                                                                    data-bs-title="Gambar {{ $p->name }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-lg-8 order-lg-1">
                                                    <div class="mb-4">
                                                        <h3 class="h4 fw-bold text-primary d-flex align-items-center">
                                                            <i class="fas fa-virus me-2"></i>Nama Penyakit
                                                        </h3>
                                                        <p
                                                            class="card-text fs-5 border-start border-3 border-primary ps-3 py-2">
                                                            {{ $p->name }}
                                                        </p>
                                                    </div>
                                                    <div class="mb-4">
                                                        <h3 class="h4 fw-bold text-danger d-flex align-items-center">
                                                            <i class="fas fa-exclamation-triangle me-2"></i>Penyebab
                                                            Penyakit
                                                        </h3>
                                                        <p class="card-text border-start border-3 border-danger ps-3 py-2">
                                                            {{ $p->reason }}
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <h3 class="h4 fw-bold text-success d-flex align-items-center">
                                                            <i class="fas fa-medkit me-2"></i>Solusi Penyakit
                                                        </h3>
                                                        <div class="border-start border-3 border-success ps-3 py-2">
                                                            @php
                                                                $solusi = $p->solution;
                                                                preg_match_all(
                                                                    '/(\d+\.)\s*(.*?)(?=(\d+\.|$))/s',
                                                                    $solusi,
                                                                    $matches,
                                                                );
                                                                echo '<ol class="ps-3 mb-0">';
                                                                for ($i = 0; $i < count($matches[0]); $i++) {
                                                                    echo '<li class="mb-2">' .
                                                                        $matches[2][$i] .
                                                                        '</li>';
                                                                }
                                                                echo '</ol>';
                                                            @endphp
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (Auth::check() && Auth::user()->email_verified_at != null && Gate::check('asUser'))
        @section('title', auth()->user()->name . html_entity_decode(' &mdash;'))
        @include('user.profile-modal')
        @include('user.detail-diagnosis-modal')
        @push('styleLibraries')
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
            <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
        @endpush
        @push('scriptPerPage')
            <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script src="{{ asset('assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
            <script src="{{ asset('assets/js/user/profile-modal.js') }}"></script>
            <script src="{{ asset('assets/js/user/detail-diagnosis-modal.js') }}"></script>
        @endpush
    @endif
@endsection

@push('stylePerPage')
    <style>
        .bg-gradient-overlay {
            background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3));
        }

        .object-fit-cover {
            object-fit: cover;
        }

        .nav-pills .nav-link {
            transition: all 0.3s ease;
            white-space: nowrap;
            border: 1px solid #dee2e6;
        }

        .nav-pills .nav-link.active {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(233, 72, 34, 0.2);
        }

        .tab-content>.tab-pane {
            transition: all 0.3s ease;
        }

        .nav-pill-container {
            scrollbar-width: thin;
        }

        .nav-pill-container::-webkit-scrollbar {
            height: 5px;
        }

        .nav-pill-container::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        .nav-pill-container::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 10px;
        }

        .nav-pill-container::-webkit-scrollbar-thumb:hover {
            background: #999;
        }

        #beranda {
            background: linear-gradient(135deg, #e0f7fa 0%, #bbdefb 100%) !important;
        }

        .badge {
            font-weight: 500;
            letter-spacing: 0.5px;
        }
    </style>
@endpush

@push('scriptPerPage')
    <script type="text/javascript">
        const isUser = @json(Auth::check() && Auth::user()->email_verified_at != null && Gate::check('asUser'));
        const hasUserProfile = @json(Auth::user()->profile->id ?? false);
        let login = @json(session('success') ?? false);
        const csrfToken = '{{ csrf_token() }}';
        const penyakitImage = @json($penyakit);
        const assetStoragePenyakit = '{{ asset('/storage/penyakit/') }}';
        const assetStorageGejala = '{{ asset('/storage/gejala/') }}';

        document.addEventListener('DOMContentLoaded', function() {
            const firstTab = document.querySelector('#pills-tab .nav-link');
            if (firstTab) {
                firstTab.classList.add('active');
                const firstTabId = firstTab.getAttribute('data-bs-target');
                const firstTabContent = document.querySelector(firstTabId);
                if (firstTabContent) {
                    firstTabContent.classList.add('show', 'active');
                }
            }

            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
@endpush
