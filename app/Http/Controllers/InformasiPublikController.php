<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiPublik;

class InformasiPublikController extends Controller
{
    public function index()
    {
        $informasi = InformasiPublik::latest()->get();
        return view('admin.informasi-publik', compact('informasi'));
    }

    public function showUserView()
    {
        $informasi = InformasiPublik::latest()->get();
        return view('user.informasi-publik', compact('informasi'));
    }

    public function create()
    {
        return view('admin.informasi-publik.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tanggal' => 'required|date',
        ]);

        InformasiPublik::create($validated);

        return redirect()->route('informasi-publik.index')
            ->with('success', 'Informasi publik berhasil ditambahkan!');
    }

    public function edit(InformasiPublik $informasiPublik)
    {
        return view('admin.informasi-publik.edit', compact('informasiPublik'));
    }

    public function update(Request $request, InformasiPublik $informasiPublik)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tanggal' => 'required|date',
        ]);

        $informasiPublik->update($validated);

        return redirect()->route('informasi-publik.index')
            ->with('success', 'Informasi publik diperbarui!');
    }

    public function destroy(InformasiPublik $informasiPublik)
    {
        $informasiPublik->delete();
        return redirect()->route('informasi-publik.index')
            ->with('success', 'Informasi publik dihapus!');
    }
}
