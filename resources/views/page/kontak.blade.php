<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Toko Wahyu Sarana Pancing</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            
            background: linear-gradient(rgba(10, 25, 47, 0.75), rgba(10, 25, 47, 0.75)), 
                        url("{{ asset('image/laut.jpeg') }}") no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            border: none;
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2) !important;
        }

        .badge-branch {
            background-color: #0d6efd;
            color: #fff;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .social-link {
            transition: opacity 0.2s;
        }
        .social-link:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Wahyu Sarana Pancing</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    <a class="nav-link" href="{{ url('/profile') }}">Profil Toko</a>
                    <a class="nav-link" href="{{ url('/katalog-produk') }}">Katalog Produk</a>
                    <a class="nav-link active" href="{{ url('/kontak') }}">Kontak</a>
                </div>
            </div>
        </div>
    </nav>

    
    <div class="container my-5 content-wrapper">
        <div class="text-center text-white mb-5">
            <img src="{{ asset('image/logo.png') }}" alt="Logo Toko" width="120" height="120" class="rounded-circle bg-white p-2 shadow-lg mb-3 object-fit-contain" onerror="this.style.display='none'">
            <h2 class="fw-bold display-6">Hubungi & Kunjungi Kami</h2>
            <p class="lead">Temukan lokasi cabang terdekat atau hubungi kami melalui media sosial</p>
        </div>

        
        <h4 class="text-white fw-bold mb-4"><i class="fa-solid fa-store me-2"></i>Lokasi Cabang</h4>
        <div class="row g-4 mb-5">
            <!-- Cabang Pusat -->
            <div class="col-md-4">
                <div class="card contact-card h-100 p-4 shadow">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge-branch">PUSAT</span>
                        <i class="fa-solid fa-map-location-dot fa-2x text-primary"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Wahyu Sarana Pancing (Pusat)</h5>
                    <p class="text-muted flex-grow-1">Jalan Raya (Pertigaan Arco) Kp Lebak Wangi Pemagarsari, Parung, Bogor 16330</p>
                    <a href="https://share.google/MTpxnDxgg0mYcCdBc" target="_blank" class="btn btn-outline-primary w-100 rounded-pill mt-3">
                        <i class="fa-solid fa-arrow-up-right-from-square me-2"></i>Buka Google Maps
                    </a>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card contact-card h-100 p-4 shadow">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge-branch bg-info text-dark">CABANG 2</span>
                        <i class="fa-solid fa-map-location-dot fa-2x text-info"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Wahyu Sarana Pancing (Cabang 2)</h5>
                    <p class="text-muted flex-grow-1">Kunjungi cabang kedua kami untuk mendapatkan alat dan pancingan terlengkap.</p>
                    <a href="https://share.google/nZukHlOY96hmb6oYA" target="_blank" class="btn btn-outline-info w-100 rounded-pill mt-3 text-dark fw-semibold">
                        <i class="fa-solid fa-arrow-up-right-from-square me-2"></i>Buka Google Maps
                    </a>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card contact-card h-100 p-4 shadow">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge-branch bg-success">CABANG 3</span>
                        <i class="fa-solid fa-map-location-dot fa-2x text-success"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Wahyu Sarana Pancing (Cabang 3)</h5>
                    <p class="text-muted flex-grow-1">Kunjungi cabang ketiga kami untuk kemudahan akses area sekitar.</p>
                    <a href="https://maps.app.goo.gl/bmimxzkLukmKE4N48" target="_blank" class="btn btn-outline-success w-100 rounded-pill mt-3">
                        <i class="fa-solid fa-arrow-up-right-from-square me-2"></i>Buka Google Maps
                    </a>
                </div>
            </div>
        </div>

        
        <h4 class="text-white fw-bold mb-4"><i class="fa-solid fa-comments me-2"></i>Layanan & Media Sosial</h4>
        <div class="row g-4">
            <!-- WhatsApp -->
            <div class="col-md-4">
                <div class="card contact-card p-4 shadow h-100 text-center">
                    <div class="mb-3">
                        <i class="fa-brands fa-whatsapp fa-3x text-success"></i>
                    </div>
                    <h5 class="fw-bold text-dark">WhatsApp </h5>
                    <p class="text-muted mb-4">+62 822-4008-8679</p>
                    <a href="https://wa.me/6282240088679" target="_blank" class="btn btn-success w-100 rounded-pill mt-auto">
                        <i class="fa-brands fa-whatsapp me-2"></i>Chat WhatsApp
                    </a>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card contact-card p-4 shadow h-100 text-center">
                    <div class="mb-3">
                        <i class="fa-brands fa-instagram fa-3x text-danger"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Instagram</h5>
                    <p class="text-muted mb-4">@wahyusaranapancing</p>
                    <a href="https://www.instagram.com/wahyusaranapancing?exln=NmNvZDhpcnp1M29x" target="_blank" class="btn btn-danger w-100 rounded-pill mt-auto">
                        <i class="fa-brands fa-instagram me-2"></i>Kunjungi Instagram
                    </a>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="card contact-card p-4 shadow h-100 text-center">
                    <div class="mb-3">
                        <i class="fa-brands fa-tiktok fa-3x text-dark"></i>
                    </div>
                    <h5 class="fw-bold text-dark">TikTok</h5>
                    <p class="text-muted mb-4">@wahyusaranapancing</p>
                    <a href="https://www.tiktok.com/@wahyusaranapancing?_r=1&_t=ZS-9AbnzrNL5Gq" target="_blank" class="btn btn-dark w-100 rounded-pill mt-auto">
                        <i class="fa-brands fa-tiktok me-2"></i>Kunjungi TikTok
                    </a>
                </div>
            </div>
        </div>
    </div>

    
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2026 Toko Wahyu Sarana Pancing.</p>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>