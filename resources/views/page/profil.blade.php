<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Toko - Toko Wahyu Sarana Pancing</title>
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
        
        .card-text-custom {
            color: #111111 !important;
            font-weight: 500;
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
                    <li class="nav-item"><a class="nav-link active fw-semibold" href="{{ url('/profile') }}">Profil Toko</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/katalog-produk') }}">Katalog Produk</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="{{ url('/kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Banner dengan Logo Besar -->
    <header class="hero-section text-center mb-4">
        <div class="container">
            <img src="{{ asset('image/logo.png') }}" alt="Logo Toko" width="120" height="120" class="rounded-circle bg-white p-2 shadow-lg mb-3 object-fit-contain" onerror="this.style.display='none'">
            <h1 class="fw-bold display-5 mb-2">Profil Toko Wahyu Sarana Pancing</h1>
            <p class="lead text-light mb-1">Mengenal Lebih Dekat Toko Perlengkapan Pancing Terpercaya di Parung</p>
            <p class="text-white-50"><small>📍 Jl. Raya Parung Bogor (Pertigaan Arco), Kp. Lebak Wangi, Pemagarsari, Parung, Bogor</small></p>
        </div>
    </header>

   
    <div class="container mb-5">
        <div class="row g-4">
            
            
            <div class="col-12">
                <div class="card transparent-card shadow-lg rounded-4 overflow-hidden">
                    <div class="card-header bg-dark text-white py-3">
                        <h5 class="mb-0 fw-bold">📌 Gambaran Umum Toko</h5>
                    </div>
                    <div class="card-body p-4">
                        <p class="card-text-custom fs-6 leading-relaxed mb-0">
                            <strong>Toko Wahyu Sarana Pancing</strong> (CV. Wahyu Sarana Pancing) adalah salah satu toko perlengkapan memancing retail/eceran terkemuka dan populer di kawasan Parung, Bogor. Toko ini menyediakan berbagai kebutuhan memancing secara lengkap, mulai dari perlengkapan dasar bagi pemula hingga alat-alat kelas profesional.
                        </p>
                    </div>
                </div>
            </div>

           
            <div class="col-md-6">
                <div class="card transparent-card shadow-lg rounded-4 overflow-hidden h-100">
                    <div class="card-header bg-dark text-white py-3">
                        <h5 class="mb-0 fw-bold">🎣 Produk & Layanan</h5>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-group list-group-flush bg-transparent">
                            <li class="list-group-item bg-transparent px-0">
                                <h6 class="fw-bold text-dark mb-1">1. Peranti Utama Memancing</h6>
                                <p class="card-desc-custom small mb-0">Joran (Carbon, Tegek, Ultra-Light, Galatama), Reel (Spinning, Baitcasting), Senar PE & Monofilament.</p>
                            </li>
                            <li class="list-group-item bg-transparent px-0">
                                <h6 class="fw-bold text-dark mb-1">2. Umpan & Pelampung</h6>
                                <p class="card-desc-custom small mb-0">Umpan olahan, essen/perisa, pelet instan, umpan hidup, pelampung kayu/plastik, timah & kail.</p>
                            </li>
                            <li class="list-group-item bg-transparent px-0">
                                <h6 class="fw-bold text-dark mb-1">3. Aksesori & Perlengkapan</h6>
                                <p class="card-desc-custom small mb-0">Tas joran, box tackle, tang pemotong kail, swivel, snap, dan perlengkapan harian.</p>
                            </li>
                            <li class="list-group-item bg-transparent px-0 border-0">
                                <h6 class="fw-bold text-dark mb-1">4. Layanan Tambahan</h6>
                                <p class="card-desc-custom small mb-0">Konsultasi racikan umpan, rekomendasi piranti pemula, serta perbaikan ringan & penggulungan senar (spooling).</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            
            <div class="col-md-6">
                <div class="card transparent-card shadow-lg rounded-4 overflow-hidden h-100">
                    <div class="card-header bg-dark text-white py-3">
                        <h5 class="mb-0 fw-bold">⭐ Keunggulan Toko</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <span class="fs-4 me-3">📦</span>
                            <div>
                                <h6 class="fw-bold text-dark mb-0">Koleksi Sangat Lengkap</h6>
                                <small class="card-desc-custom">Menyediakan merek terjangkau hingga merek premium ternama.</small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <span class="fs-4 me-3">🏷️</span>
                            <div>
                                <h6 class="fw-bold text-dark mb-0">Harga Bersaing & Terjangkau</h6>
                                <small class="card-desc-custom">Memberikan harga eceran ramah kantong dan kompetitif di area Bogor.</small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <span class="fs-4 me-3">📍</span>
                            <div>
                                <h6 class="fw-bold text-dark mb-0">Lokasi Sangat Strategis</h6>
                                <small class="card-desc-custom">Akses mudah di pinggir Jalan Raya Parung-Bogor (Pertigaan Arco).</small>
                            </div>
                        </div>
                        <div class="d-flex">
                            <span class="fs-4 me-3">🤝</span>
                            <div>
                                <h6 class="fw-bold text-dark mb-0">Pelayanan Ramah & Berpengalaman</h6>
                                <small class="card-desc-custom">Staff toko paham dunia pemancingan dan siap memberikan rekomendasi umpan/alat yang tepat.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tips Pembeli -->
            <div class="col-12">
                <div class="card bg-warning bg-opacity-75 border-warning shadow-sm rounded-4 p-3 text-dark">
                    <div class="d-flex align-items-center">
                        <span class="fs-3 me-3">💡</span>
                        <div>
                            <strong class="d-block mb-1 text-dark">Tips untuk Pelanggan:</strong>
                            <small class="text-dark fw-semibold">Jika Anda berencana membeli umpan segar atau mencari perlengkapan spesifik untuk lomba/galatama, disarankan menghubungi kontak WhatsApp toko terlebih dahulu untuk memastikan ketersediaan stok.</small>
                        </div>
                    </div>
                </div>
            </div>

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