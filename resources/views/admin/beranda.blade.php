@extends('layouts.admin.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Beranda</h1>
        </div>
        @if (session()->exists('success-login-admin'))
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="hero bg-primary text-white">
                        <div class="hero-inner">
                            @auth
                                <h2>Selamat datang kembali, {{ auth()->user()->name }}!</h2>
                            @else
                                <h2>Selamat datang!</h2>
                            @endauth
                            <p class="lead">Disini adalah tempat untuk mengelola penyakit, gejala, rule, dan diagnosis</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Pengguna</h4>
                        </div>
                        <div class="card-body">
                            {{ $jumlahPengguna }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="fas fa-medkit"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Penyakit</h4>
                        </div>
                        <div class="card-body">
                            {{ $jumlahPenyakit }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-flag"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Jumlah Gejala</h4>
                        </div>
                        <div class="card-body">
                            {{ $jumlahGejala }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Diagnosis</h4>
                        </div>
                        <div class="card-body">
                            {{ $jumlahDiagnosis }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Penyakit Hasil Diagnosis</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($diagnosisPenyakit as $key => $value)
                            <div class="mb-4">
                                <div class="text-small float-right font-weight-bold text-muted">{{ $value['count'] }}
                                </div>
                                <div class="font-weight-bold mb-1">
                                    @if ($value['penyakit_id'] == null)
                                        <span class="text-danger">Penyakit tidak ditemukan</span>
                                    @else
                                        {{ $value['penyakit'] }}
                                    @endif
                                </div>
                                <div class="progress" data-height="10">
                                    <div class="progress-bar" role="progressbar" data-width="{{ $value['count'] }}%"
                                        aria-valuenow="{{ $value['count'] }}" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
