@extends('layouts.auth-layout')

@section('title', 'Masuk')
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
            <div class="card auth-card">
                <div class="card-header bg-white">
                    <h4 class="mb-1">Masuk</h4>
                    <p class="text-muted small">Masukkan informasi akun Anda untuk melanjutkan</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" name="email" tabindex="1" autocomplete="email"
                                placeholder="nama@email.com" required autofocus>
                            <div class="invalid-feedback">
                                @if ($errors->has('email'))
                                    {{ $errors->first('email') }}
                                @else
                                    Tolong isi email Anda
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="password" class="control-label">Kata Sandi</label>
                                <a href="{{ route('password.request') }}" class="text-small">
                                    Lupa kata sandi?
                                </a>
                            </div>
                            <div class="input-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    autocomplete="current-password" placeholder="Masukkan kata sandi Anda" required
                                    tabindex="2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="password-toggle">
                                        <i class="far fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="invalid-feedback @error('password') d-block @enderror">
                                @if ($errors->has('password'))
                                    {{ $errors->first('password') }}
                                @else
                                    Tolong isi kata sandi Anda
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mt-3 text-muted text-center">
                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a></p>
                <p class="mt-2">atau <a href="{{ route('login-as-guest') }}">Masuk sebagai Tamu</a></p>
            </div>
        </div>
    </div>
@endsection

@push('cssLibraries')
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-social/bootstrap-social.css') }}">
    <style>
        .auth-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }
        
        .card-header {
            border-bottom: none;
            padding: 25px 25px 0 25px;
        }
        
        .card-body {
            padding: 25px;
        }
        
        .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            border-color: #e9ecef;
            background-color: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: #4361ee;
            box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.15);
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
        
        @media (max-width: 576px) {
            .card-header, .card-body {
                padding: 20px;
            }
        }
    </style>
@endpush

@push('jsCustom')
    <script>
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
        const status = '{{ session('status') }}';
        if (status) {
            notyf.success(status);
        }
    </script>
@endpush