<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; 

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_produk' => 'Pelet Jitu Umpan Ikan',
                'merek'       => 'Jitu',
                'kategori'    => 'Umpan',
                'harga'       => 5000,
                'stok'        => 50,
                'deskripsi'   => 'Umpan pelet siap pakai serbuk instan aroma amis gurih untuk ikan mas, bawal, dan patin.',
                'gambar'      => 'image/jitu.jpeg',
            ],
            [
                'nama_produk' => 'Deho Ikan Tuna dalam Minyak',
                'merek'       => 'Deho',
                'kategori'    => 'Umpan / Olahan',
                'harga'       => 18000,
                'stok'        => 30,
                'deskripsi'   => 'Berat bersih 180g, tuna chunk in oil berkualitas tinggi untuk campuran umpan.',
                'gambar'      => 'image/deho.jpeg',
            ],
            [
                'nama_produk' => 'Joran Shimano Bassterra EV GS S60M',
                'merek'       => 'Shimano',
                'kategori'    => 'Joran',
                'harga'       => 650000,
                'stok'        => 6,
                'deskripsi'   => 'Joran spinning berkualitas tinggi lengkap dengan sarung kain biru original Shimano.',
                'gambar'      => 'image/joran.jpeg',
            ],
            [
                'nama_produk' => 'Pelampung Pancing Berbagai Ukuran',
                'merek'       => 'Local / Various',
                'kategori'    => 'Aksesoris',
                'harga'       => 4000,
                'stok'        => 100,
                'deskripsi'   => 'Pelampung kayu dan plastik sensitif berbagai bentuk dan warna.',
                'gambar'      => 'image/antiB.jpeg',
            ],
            [
                'nama_produk' => 'Top Guide CGS (Cyclone Guide System)',
                'merek'       => 'Daido',
                'kategori'    => 'Sparepart Joran',
                'harga'       => 25000,
                'stok'        => 25,
                'deskripsi'   => 'Anti keriting, ring guide ekstra tebal dengan frame stainless steel dan ceramic zirconia.',
                'gambar'      => 'image/cgs.jpeg',
            ],
            [
                'nama_produk' => 'Senar Owner Broad Monofilament',
                'merek'       => 'Owner',
                'kategori'    => 'Senar',
                'harga'       => 75000,
                'stok'        => 20,
                'deskripsi'   => 'Fluorine treated tournament line ukuran 0.18 mm, panjang 150m.',
                'gambar'      => 'image/snr.jpeg',
            ],
            [
                'nama_produk' => 'Joran Exori Tegeg 270',
                'merek'       => 'Exori',
                'kategori'    => 'Joran',
                'harga'       => 195000,
                'stok'        => 10,
                'deskripsi'   => 'Joran tegeg / antena panjang 2.70 meter dengan motif ukiran etnik elegan.',
                'gambar'      => 'image/tegeg.jpeg',
            ],
            [
                'nama_produk' => 'Pemberat / Timah Stopper Glory',
                'merek'       => 'Glory',
                'kategori'    => 'Aksesoris',
                'harga'       => 10000,
                'stok'        => 60,
                'deskripsi'   => 'Timah / pemberat pancing siap pakai dalam kemasan sachet per pack.',
                'gambar'      => 'image/stoper.jpeg',
            ],
            [
                'nama_produk' => 'Kotak Aksesoris Pancing',
                'merek'       => 'TaffSPORT',
                'kategori'    => 'Kotak Pancing',
                'harga'       => 35000,
                'stok'        => 15,
                'deskripsi'   => 'Kotak penyimpanan portabel hitam serbaguna untuk kail, swivel, dan aksesoris kecil.',
                'gambar'      => 'image/ktk kail.jpeg',
            ],
            [
                'nama_produk' => 'Reel Shikari Fluvie 3000',
                'merek'       => 'Shikari',
                'kategori'    => 'Reel',
                'harga'       => 210000,
                'stok'        => 8,
                'deskripsi'   => 'Reel spinning profesional fishing gear tersedia varian warna menarik.',
                'gambar'      => 'image/rell.jpeg',
            ],
        ];

        foreach ($data as $item) {
            Product::create($item); 
        }
    }
}