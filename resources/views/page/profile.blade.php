@extends('layouts.app')

@section('title', 'Profile Mahasiswa')

@section('content')
    <div class="container flex-grow-1 py-3">
        <!-- Tombol Kembali ke Home -->
        <div class="mb-4">
            <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm shadow-sm">
                &larr; Kembali ke Home
            </a>
        </div>

        <!-- Kartu Identitas Profil Mahasiswa -->
        <div class="card border-0 shadow-sm p-4 mb-5 bg-white rounded-3">
            <div class="row align-items-center">
                <div class="col-md-3 text-center mb-3 mb-md-0">
                    <!-- Foto diambil langsung dari folder public/image/lia.jpeg -->
                    <img src="{{ asset('image/lia.jpeg') }}" class="rounded-circle img-thumbnail shadow-sm"
                        style="width: 150px; height: 150px; object-fit: cover;" alt="{{ $mahasiswa['nama'] }}">
                </div>
                <div class="col-md-9">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <h3 class="fw-bold mb-0 text-capitalize">{{ $mahasiswa['nama'] }}</h3>
                        <span class="badge bg-success text-capitalize">{{ $mahasiswa['status'] }}</span>
                    </div>
                    <p class="text-primary fw-semibold mb-2">
                        {{ $mahasiswa['prodi'] }} &bull; {{ $mahasiswa['kampus'] }}
                    </p>
                    <div class="row text-muted small mt-3">
                        <div class="col-sm-6 mb-1">
                            <strong>NIM:</strong> {{ $mahasiswa['nim'] }}
                        </div>
                        <div class="col-sm-6 mb-1">
                            <strong>Email:</strong> {{ $mahasiswa['email'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection