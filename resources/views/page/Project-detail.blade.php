@extends('layouts.app')

@section('title', 'Project Detail - ' . $project->title)

@section('content')
    <div class="container py-3 flex-grow-1">
        <!-- Tombol Kembali yang Serasi dengan Halaman Profil -->
        <div class="mb-4">
            <a href="{{ route('project.index') }}" class="btn btn-outline-secondary btn-sm shadow-sm">
                &larr; Kembali ke Daftar Project
            </a>
        </div>

        <!-- Detail Kartu Project -->
        <div class="row g-4 align-items-center">
            <div class="col-md-7">
                <img src="{{ asset('image/' . $project->image) }}" class="img-fluid rounded shadow-sm w-100"
                    style="min-height: 300px; object-fit: cover;" alt="{{ $project->title }}">
            </div>
            <div class="col-md-5">
                <div class="card border-0 shadow-sm p-4">
                    <div class="mb-2">
                        <span class="badge {{ strtolower($project->status) == 'selesai' ? 'bg-success' : 'bg-warning' }} mb-2">
                            {{ $project->status }}
                        </span>
                    </div>

                    <h4 class="card-title fw-bold mb-3">{{ $project->title }}</h4>
                    <p class="text-muted card-text">{{ $project->description }}</p>

                    <div class="mb-3">
                        <small class="text-muted fw-semibold">Tech: {{ $project->teknologi }}</small>
                    </div>

                    <hr>
                    <div class="text-muted small">
                        <span>Dibuat pada: {{ $project->created_at->format('d M Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection