<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilDesa;

class ProfilDesaController extends Controller
{
    public function index()
    {
        $profildesa = ProfilDesa::first();
        return view('admin.profil-desa', compact('profildesa'));
    }

    public function showUserView()
    {
        $profildesa = ProfilDesa::first();
        return view('user.profil-desa', compact('profildesa'));
    }

    /**
     * OPTIONAL: kalau kamu tidak mau create sama sekali, arahkan ke edit saja
     */
    public function create()
    {
        $profildesa = ProfilDesa::first();

        // kalau belum ada record, bikin 1 record kosong agar bisa diedit
        if (!$profildesa) {
            $profildesa = ProfilDesa::create([
                'nama_desa' => '-',
                'visi' => '-',
                'misi' => '-',
                'kepala_desa' => '-',
                'lokasi' => '-',
                'deskripsi' => '-',
                'sejarah_singkat' => '',
            ]);
        }

        return redirect()->route('admin.profil-desa.edit', $profildesa->id);
    }

    /**
     * OPTIONAL: store tidak dipakai lagi (biar aman tetap redirect)
     */
    public function store(Request $request)
    {
        return redirect()->route('admin.profil-desa.index');
    }

    public function edit($id)
    {
        $profilDesa = ProfilDesa::findOrFail($id);
        return view('admin.profil-desa.edit', compact('profilDesa'));
    }

    /**
     * ✅ HANYA UPDATE SEJARAH
     */
    public function update(Request $request, $id)
    {
        $profilDesa = ProfilDesa::findOrFail($id);

        $data = $request->validate([
            'sejarah_singkat' => 'required|string',
        ]);

        $profilDesa->update($data);

        return redirect()->route('admin.profil-desa.index')
            ->with('success', 'Sejarah singkat berhasil diperbarui!');
    }
}
