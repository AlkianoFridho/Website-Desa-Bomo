<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilDesa;

class ProfilDesaController extends Controller
{
    public function index()
    {

        $profildesa = ProfilDesa::all();
        return view('admin.profil-desa', compact('profildesa'));
    }
    public function showUserView()
{
    $profildesa = ProfilDesa::first();
    return view('user.profil-desa', compact('profildesa'));
}

    public function create()
    {
        return view('admin.profil-desa.create');
    }

    public function store(Request $request)
    {
        ProfilDesa::create($request->validate([
            'nama_desa' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'kepala_desa' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
        ]));

        return redirect()->route('profil-desa.index')->with('success', 'Profil desa berhasil ditambahkan!');
    }

    public function edit(ProfilDesa $profilDesa)
    {
        return view('admin.profil-desa.edit', compact('profilDesa'));
    }

    public function update(Request $request, ProfilDesa $profilDesa)
    {
        $profilDesa->update($request->validate([
            'nama_desa' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'kepala_desa' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
        ]));

        return redirect()->route('profil-desa.index')->with('success', 'Profil desa diperbarui!');
    }

    public function destroy(ProfilDesa $profilDesa)
    {
        $profilDesa->delete();
        return redirect()->route('profil-desa.index')->with('success', 'Profil desa dihapus!');
    }
}
