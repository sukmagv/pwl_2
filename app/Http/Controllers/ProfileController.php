<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('profile')
            ->with('nama', 'Sukma Gladys Vellanie')
            ->with('nim', '2141720179')
            ->with('kelas', 'TI-2B')
            ->with('absen', '25')
            ->with('prodi', 'D4 Teknik Infomatika')
            ->with('jurusan', 'Teknologi Informasi');
    }
}
