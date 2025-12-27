<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | USER SIDE
    |--------------------------------------------------------------------------
    */

    // Daftar berita untuk user
    public function userIndex()
    {
        $berita = Berita::where('status', 'publish')
            ->latest()
            ->paginate(6);

        return view('berita.index', compact('berita'));
    }

    // Detail berita untuk user
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)
            ->where('status', 'publish')
            ->firstOrFail();

        return view('berita.show', compact('berita'));
    }

    /*
    |--------------------------------------------------------------------------
    | ADMIN SIDE
    |--------------------------------------------------------------------------
    */

    // List berita (admin)
    public function adminIndex()
    {
        $berita = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('berita'));
    }

    // Form tambah berita
    public function create()
    {
        return view('admin.berita.create');
    }

    // Simpan berita
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'status' => 'required|in:draft,publish',
        ]);

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi' => $request->isi,
            'status' => $request->status,
            'penulis' => auth()->user()->name ?? 'Admin',
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil ditambahkan');
    }

    // Form edit berita
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    // Update berita
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'status' => 'required|in:draft,publish',
        ]);

        $berita->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'isi' => $request->isi,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil diperbarui');
    }

    // Hapus berita
    public function destroy(Berita $berita)
    {
        $berita->delete();

        return redirect()
            ->route('admin.berita.index')
            ->with('success', 'Berita berhasil dihapus');
    }
}
