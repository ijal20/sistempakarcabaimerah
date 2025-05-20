@extends('layouts.auth-layout')
@section('title', 'Daftar')
@section('content')
    <div class="row">
        <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="card auth-card">
                <div class="card-header bg-white">
                    <h4 class="mb-1">Daftar</h4>
                    <p class="text-muted small">Buat akun baru untuk menggunakan aplikasi</p>
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" class="needs-validation" novalidate="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" name="name" required autofocus autocomplete="name"
                                placeholder="Masukkan nama Anda">
                            <div class="invalid-feedback">
                                @if ($errors->has('name'))
                                    {{ $errors->first('name') }}
                                @else
                                    Tolong isi nama Anda
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="nama@email.com"
                                name="email">
                            <div class="invalid-feedback">
                                @if ($errors->has('email'))
                                    {{ $errors->first('email') }}
                                @else
                                    Tolong isi email Anda
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="password" class="d-block">Kata Sandi</label>
                                <div class="input-group">
                                    <input id="password" type="password"
                                        class="form-control pwstrength @error('password') is-invalid @enderror"
                                        data-indicator="pwindicator" autocomplete="new-password" placeholder="Min. 8 karakter"
                                        required name="password">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="password-toggle">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div id="pwindicator" class="pwindicator mt-2">
                                    <div class="bar"></div>
                                    <div class="label text-muted small mt-1"></div>
                                </div>
                                <div class="invalid-feedback @error('password') d-block @enderror">
                                    @error('password')
                                        {{ $message }}
                                    @else
                                        Tolong isi kata sandi Anda
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="password_confirmation" class="d-block">Konfirmasi Kata Sandi</label>
                                <div class="input-group">
                                    <input id="password_confirmation" required type="password" placeholder="Min. 8 karakter"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password_confirmation">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="confirm-password-toggle">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Daftar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-3 text-muted text-center">
                <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
            </div>
        </div>
    </div>
@endsection

@push('jsPage')
    <script src="{{ asset('assets/vendor/stisla/js/page/auth-register.js') }}"></script>
@endpush

@push('jsLibraries')
    <script src="{{ asset('assets/vendor/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>
@endpush

@push('cssLibraries')
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-social/bootstrap-social.css') }}">
    <style>
        .auth-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            border: none;
        }
        
        .auth-card .card-header {
            border-bottom: none;
            padding: 25px 25px 0 25px;
        }
        
        .auth-card .card-header h4 {
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 6px;
        }
        
        .auth-card .card-body {
            padding: 25px;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border-color: #e9ecef;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: #4361ee;
            box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.15);
        }
        
        .input-group .form-control {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        .input-group-append .btn {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            padding: 0 15px;
        }
        
        .pwindicator {
            margin-top: 10px;
            margin-bottom: 5px;
        }
        
        .pwindicator .bar {
            height: 5px;
            border-radius: 3px;
        }
        
        .btn-primary {
            background-color: #4361ee;
            border-color: #4361ee;
            border-radius: 8px;
            padding: 12px 0;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #3a56d4;
            border-color: #3a56d4;
        }
        
        .btn-social {
            border-radius: 8px;
            padding: 12px 0;
            margin-bottom: 10px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-google {
            color: #212529;
            background-color: #fff;
            border-color: #e9ecef;
        }
        
        .btn-google:hover {
            background-color: #f8f9fa;
        }
        
        .btn-google .fab {
            color: #DB4437;
        }
        
        .text-divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 20px 0;
        }
        
        .text-divider::before,
        .text-divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e9ecef;
        }
        
        .text-divider span {
            padding: 0 15px;
            color: #6c757d;
            font-size: 13px;
        }
        
        a {
            color: #4361ee;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 767px) {
            .row .col-md-6 {
                margin-bottom: 15px;
            }
            
            .card-header, .card-body {
                padding: 20px;
            }
        }
    </style>
@endpush

@push('jsCustom')
    <script>
        // Password visibility toggle
        document.getElementById('password-toggle').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
        
        // Confirm password visibility toggle
        document.getElementById('confirm-password-toggle').addEventListener('click', function() {
            const passwordInput = document.getElementById('password_confirmation');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
@endpush