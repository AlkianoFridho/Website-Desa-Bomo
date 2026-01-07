<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Organisasi;
use App\Models\Berita;

class HomeController extends Controller
{
    // Dashboard admin
    public function adminview()
    {
        $pengaduan = Pengaduan::latest()->paginate(10);
        return view('admin.home', compact('pengaduan'));
    }

    // Beranda user
    public function userview()
    {
        return view('user.home', [
            'pengaduan'          => Pengaduan::latest()->paginate(10),
            'organisasiPreview' => Organisasi::latest()->take(3)->get(),
            'beritas'           => Berita::latest()->take(3)->get(),
        ]);
    }
}
