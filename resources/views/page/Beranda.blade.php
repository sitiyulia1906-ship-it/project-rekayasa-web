<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Toko Wahyu Sarana Pancing</title>
    
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    <style>
        body {
            background: linear-gradient(rgba(0, 15, 35, 0.65), rgba(0, 30, 60, 0.75)), url("{{ asset('image/laut.jpeg') }}");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            color: white;
        }
        .hero-section {
            padding: 50px 20px 20px 20px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.7);
        }
        .transparent-card {
            background-color: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: #333;
        }
    </style>
</head>
<body>

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-opacity-75 shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" width="45" height="45" class="rounded-circle me-2 bg-white p-1 object-fit-contain" onerror="this.style.display='none'">
                <span>Wahyu Sarana Pancing</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active fw-semibold" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}">Profil Toko</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/katalog-produk') }}">Katalog Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header / Banner -->
    <header class="hero-section text-center mb-4">
        <div class="container">
            <img src="{{ asset('image/logo.png') }}" alt="Logo Toko" width="120" height="120" class="rounded-circle bg-white p-2 shadow-lg mb-3 object-fit-contain" onerror="this.style.display='none'">
            <h1 class="fw-bold display-5 mb-2">{{ $toko['nama_toko'] }}</h1>
            <p class="lead text-light mb-1">Pusat Alat, Umpan, & Perlengkapan Pancing Terlengkap</p>
            <p class="text-white-50"><small>📍 {{ $toko['alamat'] }}</small></p>
        </div>
    </header>

    <!-- Konten Utama: Jam Operasional -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card transparent-card shadow-lg rounded-4 overflow-hidden">
                    <div class="card-header bg-dark text-white text-center py-3">
                        <h5 class="mb-0 fw-bold">🕒 Jam Operasional Toko</h5>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-group list-group-flush bg-transparent">
                            @foreach ($toko['jam_buka'] as $hari => $jam)
                                <li class="list-group-item d-flex justify-content-between align-items-center py-3 bg-transparent border-bottom">
                                    <span class="fw-bold text-dark fs-6">{{ $hari }}</span>
                                    <span class="badge bg-primary px-3 py-2 rounded-pill shadow-sm">{{ $jam }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark bg-opacity-75 text-white text-center py-4 mt-5 shadow-lg">
        <div class="container">
            <p class="mb-0 text-white-50 small">&copy; 2026 Toko Wahyu Sarana Pancing.</p>
        </div>
    </footer>

    <!-- Menggunakan Asset Lokal JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>