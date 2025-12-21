<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Tampilkan daftar semua berita
     */
    public function index()
    {
        $berita = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Form tambah berita
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Simpan berita baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:draft,publish',
        ]);

        // Slug unik
        $slug = Str::slug($validated['judul']);
        $validated['slug'] = $slug;

        // Penulis otomatis
        $validated['penulis'] = auth()->user()->name ?? 'Admin';

        // Upload gambar dengan nama berdasarkan judul
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = $slug . '-' . time() . '.' . $file->getClientOriginalExtension();
            $validated['gambar'] = $file->storeAs('berita', $filename, 'public');
        }

        Berita::create($validated);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', '✅ Berita berhasil ditambahkan.');
    }

    /**
     * Form edit berita
     */
    public function edit(Berita $beritum)
    {
        return view('admin.berita.edit', ['berita' => $beritum]);
    }

    /**
     * Update berita
     */
    public function update(Request $request, Berita $beritum)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:draft,publish',
        ]);

        $slug = Str::slug($validated['judul']);
        $validated['slug'] = $slug;

        // Ganti gambar hanya jika ada upload baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($beritum->gambar && Storage::disk('public')->exists($beritum->gambar)) {
                Storage::disk('public')->delete($beritum->gambar);
            }

            $file = $request->file('gambar');
            $filename = $slug . '-' . time() . '.' . $file->getClientOriginalExtension();
            $validated['gambar'] = $file->storeAs('berita', $filename, 'public');
        } else {
            $validated['gambar'] = $beritum->gambar; // tetap pakai gambar lama
        }

        $beritum->update($validated);

        return redirect()
            ->route('admin.berita.index')
            ->with('success', '✅ Berita berhasil diperbarui.');
    }

    /**
     * Hapus berita
     */
    public function destroy(Berita $beritum)
    {
        if ($beritum->gambar && Storage::disk('public')->exists($beritum->gambar)) {
            Storage::disk('public')->delete($beritum->gambar);
        }

        $beritum->delete();

        return redirect()
            ->route('admin.berita.index')
            ->with('success', '🗑️ Berita berhasil dihapus.');
    }
}
