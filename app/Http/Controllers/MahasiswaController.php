<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Project; 

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nim' => '251011701263',
            'nama' => 'siti yulia',
            'prodi' => 'Sistem Informasi',
            'kampus' => 'Universitas Pamulang',
            'email' => 'sitiyulia@gmail.com',
            'status' => 'aktif',
        ];

        
        $projects = Project::paginate(5);

       

        return view('page.profile', compact('mahasiswa', 'projects'));
    }
}