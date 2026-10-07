<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project; // Pastikan model Project di-import

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah, dan nilai akademik.',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'E-Commerce SEO Optimization',
                'description' => 'Optimalisasi struktur heading, meta tags, dan indexing halaman web toko online.',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Redesign Cover & Branding',
                'description' => 'Perancangan elemen grafis personal branding dan desain sampul buku rekayasa perangkat lunak.',
                'teknologi' => 'Adobe Illustrator & Photoshop',
                'image' => 'project3.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Aplikasi Kasir (POS) UMKM',
                'description' => 'Sistem Point of Sale untuk pencatatan transaksi harian, stok barang, dan laporan laba rugi.',
                'teknologi' => 'Vue.js & Laravel REST API',
                'image' => 'project4.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Company Profile PT Maju Mundur',
                'description' => 'Website profil perusahaan modern dengan fitur multi-bahasa dan form kontak interaktif.',
                'teknologi' => 'Tailwind CSS & Alpine.js',
                'image' => 'project5.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Aplikasi Mobile Absensi GPS',
                'description' => 'Aplikasi absensi karyawan berbasis android dengan validasi titik lokasi GPS dan foto selfie.',
                'teknologi' => 'Flutter & Firebase',
                'image' => 'project6.jpg',
                'status' => 'dalam proses',
            ],
            [
                'title' => 'Dashboard Monitoring IoT',
                'description' => 'Sistem pemantauan suhu dan kelembapan ruangan secara real-time menggunakan sensor ESP32.',
                'teknologi' => 'Node.js, MQTT & React',
                'image' => 'project7.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Learning Management System (LMS)',
                'description' => 'Platform e-learning untuk manajemen kursus online, kuis interaktif, dan sertifikat otomatis.',
                'teknologi' => 'Laravel & Livewire',
                'image' => 'project8.jpg',
                'status' => 'dalam proses',
            ],
            [
                'title' => 'Landing Page Produk Skincare',
                'description' => 'Halaman pemasaran produk kecantikan yang dioptimasi untuk konversi penjualan tinggi.',
                'teknologi' => 'HTML5, CSS3 & JavaScript',
                'image' => 'project9.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Aplikasi Manajemen Keuangan Pribadi',
                'description' => 'Pencatatan pemasukan dan pengeluaran finansial bulanan dilengkapi grafik analitik.',
                'teknologi' => 'React Native & SQLite',
                'image' => 'project10.jpg',
                'status' => 'selesai',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}