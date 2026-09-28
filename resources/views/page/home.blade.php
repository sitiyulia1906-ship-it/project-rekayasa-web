@extends('layouts.app')

@section('title', 'Home - Web Home')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
            <div class="card-body p-5 text-center bg-white">
                <h1 class="fw-bold text-dark mb-3">Selamat Datang</h1>
                <p class="lead text-secondary mb-4">
Ini adalah halaman utama Project Laravel Web Profile
                <hr class="my-4">
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ url('/profile') }}" class="btn btn-primary btn-lg px-4 rounded-pill">Lihat Profile</a>
                    <a href="{{ url('/about') }}" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">Tentang Aplikasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection