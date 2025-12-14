<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

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
        return view('user.home', compact('pengaduan'));
    }

    // Halaman beranda tanpa login (guest)
   
}
