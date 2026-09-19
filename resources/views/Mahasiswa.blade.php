<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Navbar Hitam -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">
                UNPAM - Profile Mahasiswa
            </a>
        </div>
    </nav>

    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card mt-5 border-secondary shadow-sm">

                    <!-- Header Card Hitam -->
                    <div class="card-header bg-dark text-white text-center py-4">

                        <div class="d-flex justify-content-center mb-3">
                           <img 
                                src="{{ asset('image/lia.jpeg') }}" 
                                class="rounded-circle img-thumbnail border-secondary shadow-sm" 
                                style="width: 120px; height: 120px; object-fit: cover;" 
                                alt="Foto Profil">
                        </div>

                        <h4 class="mb-2 text-white">Data Mahasiswa</h4>

                        <!-- Badge Abu-Abu -->
                        <span class="badge bg-secondary text-uppercase">
                            {{ $mahasiswa['status'] }}
                        </span>

                    </div>

                    <!-- Isi Card Putih -->
                    <div class="card-body bg-white text-dark">

                        <p class="border-bottom pb-2">
                            <strong class="text-secondary">Nama:</strong>
                            <span class="fw-medium ms-1">{{ $mahasiswa['nama'] }}</span>
                        </p>

                        <p class="border-bottom pb-2">
                            <strong class="text-secondary">NIM:</strong>
                            <span class="fw-medium ms-1">{{ $mahasiswa['nim'] }}</span>
                        </p>

                        <p class="border-bottom pb-2">
                            <strong class="text-secondary">Jurusan:</strong>
                            <span class="fw-medium ms-1">{{ $mahasiswa['prodi'] }}</span>
                        </p>

                        <p class="mb-0">
                            <strong class="text-secondary">Kampus:</strong>
                            <span class="fw-medium ms-1">{{ $mahasiswa['kampus'] }}</span>
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Footer Abu-Abu Gelap / Hitam -->
    <footer class="bg-dark text-white-50 text-center py-3 mt-auto border-top border-secondary">
        <p class="mb-0">&copy; {{ date('Y') }} UNPAM. All rights reserved.</p>
    </footer>

</body>

</html>