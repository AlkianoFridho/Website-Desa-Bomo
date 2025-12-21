<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Organisasi; // Tambahkan import model Organisasi

class HomeController extends Controller
{
    // Halaman dashboard admin
    public function adminview()
    {
        $pengaduan = Pengaduan::latest()->paginate(10);
        return view('admin.home', compact('pengaduan'));
    }

    // Halaman beranda user
    public function userview()
    {
        $pengaduan = Pengaduan::latest()->paginate(10);
        // Ambil data organisasi untuk ditampilkan di home
        $organisasi = Organisasi::all(); 
        
        return view('user.home', compact('pengaduan', 'organisasi'));
    }
}