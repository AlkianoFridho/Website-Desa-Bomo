<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilDesa;

class ProfilDesaController extends Controller
{
    // ADMIN: halaman index profil desa (1 record saja)
    public function index()
    {
        $profildesa = ProfilDesa::first();
        return view('admin.profil-desa', compact('profildesa'));
    }

    // USER: halaman publik profil desa
    public function showUserView()
    {
        $profildesa = ProfilDesa::first();
        return view('user.profil-desa', compact('profildesa'));
    }

    // ADMIN: form tambah
    public function create()
    {
        return view('admin.profil-desa.create');
    }

    // ADMIN: simpan
    public function store(Request $request)
    {
        ProfilDesa::create($request->validate([
            'nama_desa' => 'required|string|max:255',

            'tentang_kami' => 'nullable|string',
            'sejarah_singkat' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',

            'total_penduduk' => 'nullable|string|max:50',
            'luas_wilayah' => 'nullable|string|max:50',
            'potensi_utama' => 'nullable|string|max:50',

            'judul_data' => 'nullable|string|max:255',
            'deskripsi_data' => 'nullable|string',
            'label_tombol_data' => 'nullable|string|max:100',
        ]));

        return redirect()->route('admin.profil-desa.index')
            ->with('success', 'Profil desa berhasil ditambahkan!');
    }

    // ADMIN: form edit
    public function edit($id)
    {
        $profilDesa = ProfilDesa::findOrFail($id);
        return view('admin.profil-desa.edit', compact('profilDesa'));
    }

    // ADMIN: update
    public function update(Request $request, $id)
    {
        $profilDesa = ProfilDesa::findOrFail($id);

        $profilDesa->update($request->validate([
            'nama_desa' => 'required|string|max:255',

            'tentang_kami' => 'nullable|string',
            'sejarah_singkat' => 'nullable|string',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',

            'total_penduduk' => 'nullable|string|max:50',
            'luas_wilayah' => 'nullable|string|max:50',
            'potensi_utama' => 'nullable|string|max:50',

            'judul_data' => 'nullable|string|max:255',
            'deskripsi_data' => 'nullable|string',
        ]));

        return redirect()->route('admin.profil-desa.index')
            ->with('success', 'Profil desa diperbarui!');
    }
}
