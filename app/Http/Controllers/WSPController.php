<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
class WSPController extends Controller
{
    private function dataToko() {
        return [
            'nama_toko' => 'Toko Wahyu Sarana Pancing',
            'pemilik'   => 'Pak Wahyu',
            'kategori'  => 'Alat & Perlengkapan Pancing',
            'alamat'    => 'Jalan Raya (Pertigaan Arco) Kp Lebak Wangi Pemagarsari, Parung, Bogor 16330',
            'email'     => 'wahyusaranapancing@gmail.com',
            'telepon'   => '0812-3456-7890',
            'jam_buka'  => [
                'Senin'  => '6.30 AM - 5.00 PM',
                'Selasa' => '6.30 AM - 5.00 PM',
                'Rabu'   => '6.30 AM - 5.00 PM',
                'Kamis'  => '6.30 AM - 5.00 PM',
                'Jumat'  => '6.30 AM - 5.00 PM',
                'Sabtu'  => '6.30 AM - 5.00 PM',
                'Minggu' => '6.30 AM - 5.00 PM',
            ]
        ];
    }

    public function beranda() {
        $toko = $this->dataToko();
        return view('page.beranda', compact('toko'));
    }

    public function profilToko() {
        $toko = $this->dataToko();
        return view('page.profil', compact('toko'));
    }

    public function katalog() {
        $toko = $this->dataToko();
        $products = Product::paginate(6); 
        return view('page.katalog', compact('toko', 'products'));
    }

    public function kontak() {
        $toko = $this->dataToko();
        return view('page.kontak', compact('toko'));
    }
}