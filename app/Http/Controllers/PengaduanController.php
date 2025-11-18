<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('admin.pengaduan', compact('pengaduan'));
    }
    public function showUserView()
    {
        $pengaduan = Pengaduan::all();
        return view('user.pengaduan', compact('pengaduan'));
    }

    public function edit(Pengaduan $pengaduan)
    {
        return view('admin.pengaduan.edit', compact('pengaduan'));
    }

    public function update(Request $request, Pengaduan $pengaduan)
    {
        $pengaduan->update($request->validate([
            'status' => 'required|in:pending,diproses,selesai',
        ]));

        return redirect()->route('pengaduan.index')->with('success', 'Status pengaduan diperbarui!');
    }
}
