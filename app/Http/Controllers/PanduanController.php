<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;


class PanduanController extends Controller
{
    // ====================
    // USER VIEW
    // ====================
    public function showUserView()
    {
        $panduans = Panduan::latest()->get();
        $mainVideo = Panduan::latest()->first(); // gunakan video pertama
        $recommended = Panduan::skip(1)->take(4)->get(); // ambil 4 video selain video utama
           $comments = ($mainVideo)
        ? Comment::where('panduan_id', $mainVideo->id)->latest()->get()
        : collect();

        return view('user.panduan', compact('panduans', 'mainVideo', 'recommended','comments'));
    }

    public function show($id)
{
    $mainVideo = Panduan::findOrFail($id);

    // Ambil rekomendasi selain video yang dipilih
    $recommended = Panduan::where('id', '!=', $id)->take(4)->get();
    $comments = Comment::where('panduan_id', $id)->latest()->get();
    return view('user.panduan', compact('mainVideo', 'recommended','comments'));
}

// ➕ Tambahan hitung views
public function addView($id)
{
    $panduan = Panduan::findOrFail($id);
    $panduan->increment('views');

    return response()->json([
        'success' => true,
        'views' => $panduan->views
    ]);
}


    // ====================
    // ADMIN CRUD
    // ====================
    public function index()
    {
        $panduans = Panduan::latest()->get();
        return view('admin.panduan.index', compact('panduans'));
    }

    public function create()
    {
        return view('admin.panduan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'durasi' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'video_url' => 'required|mimetypes:video/mp4,video/mkv,video/avi|max:200000',
            'kategori' => 'nullable|string',
            'dibuat_oleh' => 'nullable|string|max:255'
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        if ($request->hasFile('video_url')) {
            $validated['video_url'] = $request->file('video_url')->store('videos', 'public');
        }

        $validated['dibuat_oleh'] = $validated['dibuat_oleh'] ?? 'Pemerintah Desa Bomo';

        Panduan::create($validated);

        return redirect()->route('admin.panduan.index')->with('success', 'Panduan berhasil ditambahkan!');
    }

    public function edit(Panduan $panduan)
    {
        return view('admin.panduan.edit', compact('panduan'));
    }

    public function update(Request $request, Panduan $panduan)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'durasi' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'video_url' => 'nullable|mimetypes:video/mp4,video/mkv,video/avi|max:200000',
            'kategori' => 'nullable|string',
            'dibuat_oleh' => 'nullable|string|max:255'
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($panduan->thumbnail) Storage::disk('public')->delete($panduan->thumbnail);
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        if ($request->hasFile('video_url')) {
            if ($panduan->video_url) Storage::disk('public')->delete($panduan->video_url);
            $validated['video_url'] = $request->file('video_url')->store('videos', 'public');
        }

        $panduan->update($validated);

        return redirect()->route('admin.panduan.index')->with('success', 'Panduan berhasil diperbarui!');
    }

    public function destroy(Panduan $panduan)
    {
        if ($panduan->thumbnail) {
            Storage::disk('public')->delete($panduan->thumbnail);
        }

        if ($panduan->video_url) {
            Storage::disk('public')->delete($panduan->video_url);
        }

        $panduan->delete();

        return back()->with('success', 'Panduan berhasil dihapus!');
    }
    

}
