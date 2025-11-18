<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisasi;
use Illuminate\Support\Facades\Storage; 

class OrganisasiController extends Controller
{
    public function index()
    {
        $data = Organisasi::all();
        return view('admin.organisasi', compact('data'));
    }

    public function showUserView()
    {
        $organisasi = Organisasi::all();
        return view('user.organisasi', compact('organisasi'));
    }

    public function create()
    {
        return view('admin.organisasi.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('organisasi', 'public');
        }

        Organisasi::create($data);
        return redirect()->route('organisasi.index')->with('success', 'Anggota organisasi berhasil ditambahkan!');
    }

    public function edit(Organisasi $organisasi)
    {
        return view('admin.organisasi.edit', compact('organisasi'));
    }

    public function update(Request $request, Organisasi $organisasi)
    {
        $data = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('organisasi', 'public');
        }

        $organisasi->update($data);
        return redirect()->route('organisasi.index')->with('success', 'Anggota organisasi diperbarui!');
    }

    public function destroy(Organisasi $organisasi)
{
    if ($organisasi->foto && Storage::disk('public')->exists($organisasi->foto)) {
        Storage::disk('public')->delete($organisasi->foto);
    }

    $organisasi->delete();
    return redirect()->route('organisasi.index')->with('success', 'Anggota organisasi dihapus!');
}
}
