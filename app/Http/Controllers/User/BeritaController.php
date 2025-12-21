<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Berita;

class BeritaController extends Controller
{
    // Halaman daftar berita (hanya status publish)
    public function index()
    {
        $berita = Berita::where('status', 'publish')
            ->latest()
            ->paginate(6);

        return view('berita.index', compact('berita'));
    }

    // Halaman detail berita
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)
            ->where('status', 'publish')
            ->firstOrFail();

        return view('berita.show', compact('berita'));
    }
}
