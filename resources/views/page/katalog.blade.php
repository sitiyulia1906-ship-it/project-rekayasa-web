<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - Toko Wahyu Sarana Pancing</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            background: linear-gradient(rgba(0, 15, 35, 0.70), rgba(0, 30, 60, 0.80)), url("{{ asset('image/laut.jpeg') }}");
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
            background-color: rgba(255, 255, 255, 0.93);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: #111;
        }
        .card-desc-custom {
            color: #222222 !important;
            font-weight: 450;
        }
    </style>
</head>
<body>

    
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
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/profile') }}">Profil Toko</a></li>
                    <li class="nav-item"><a class="nav-link active fw-semibold" href="{{ url('/katalog-produk') }}">Katalog Produk</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

   
    <header class="hero-section text-center mb-4">
        <div class="container">
            <img src="{{ asset('image/logo.png') }}" alt="Logo Toko" width="120" height="120" class="rounded-circle bg-white p-2 shadow-lg mb-3 object-fit-contain" onerror="this.style.display='none'">
            <h1 class="fw-bold display-5 mb-2">Katalog Produk & Peralatan Pancing</h1>
            <p class="lead text-light mb-1">Daftar Lengkap Produk Berkualitas Beserta Informasi Stok, Merek, dan Harga</p>
        </div>
    </header>

    
    <div class="container mb-5">
        <div class="row g-4">
            @foreach ($products as $item)
                <div class="col-md-4">
                    <div class="card transparent-card h-100 shadow-lg rounded-4 overflow-hidden border-0">
                        <!-- Gambar Produk -->
                        <img src="{{ asset($item->gambar) }}" class="card-img-top" alt="{{ $item->nama_produk }}" style="height: 220px; object-fit: cover;">
                        
                        <div class="card-body d-flex flex-column p-4">
                            <span class="badge bg-success mb-2 align-self-start px-3 py-2 rounded-pill shadow-sm">{{ $item->kategori }}</span>
                            <h5 class="card-title fw-bold text-dark mb-2">{{ $item->nama_produk }}</h5>
                            
                            <p class="mb-2 text-dark"><small><strong>Merek:</strong> {{ $item->merek }} | <strong>Stok:</strong> {{ $item->stok }}</small></p>
                            
                            <p class="card-text card-desc-custom flex-grow-1 mb-3"><small>{{ $item->deskripsi }}</small></p>
                            
                            <div class="pt-2 border-top border-secondary border-opacity-25 d-flex justify-content-between align-items-center">
                                <span class="text-muted small">Harga:</span>
                                <h5 class="text-primary fw-bold mb-0">Rp {{ number_format($item->harga, 0, ',', '.') }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        
        <div class="d-flex justify-content-center mt-5">
            {{ $products->links() }}
        </div>
    </div>

    
    <footer class="bg-dark bg-opacity-75 text-white text-center py-4 mt-5 shadow-lg">
        <div class="container">
            <p class="mb-0 text-white-50 small">&copy; 2026 Toko Wahyu Sarana Pancing.</p>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>