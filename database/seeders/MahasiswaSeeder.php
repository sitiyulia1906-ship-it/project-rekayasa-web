<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $mahasiswa = [
            [
                'nim' => '251011701263',
                'nama' => 'Siti Yulia',
                'prodi' => 'Sistem Informasi',
                'kampus' => 'universitas pamulang',
                'email' => 'sitiyulia@example.com',
                'status' => 'Aktif'
            ]
        ];

        foreach ($mahasiswa as $m) {
            \App\Models\Mahasiswa::create($m);
        }
    }
}
