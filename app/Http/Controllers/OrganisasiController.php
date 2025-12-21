<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisasi;
use Illuminate\Support\Facades\Storage; 

class OrganisasiController extends Controller
{
    /**
     * Daftar Jabatan Baku untuk Dropdown
     */
    private function listJabatan()
    {
        return [
            'Kepala Desa', 'Sekretaris Desa', 'Bendahara Desa',
            'Kaur Tata Usaha dan Umum', 'Kaur Keuangan', 'Kaur Perencanaan',
            'Kasi Pemerintahan', 'Kasi Kesejahteraan', 'Kasi Pelayanan',
            'Kepala Dusun', 'Staf Desa'
        ];
    }

    /**
     * Menampilkan halaman organisasi di sisi USER (Halaman Depan)
     * Tambahkan method ini agar tidak error "Call to undefined method"
     */
    public function showUserView()
    {
        $organisasi = Organisasi::all();
        return view('user.organisasi', compact('organisasi'));
    }

    /**
     * Dashboard Admin
     */
    public function index() {
        $data = Organisasi::all();
        return view('admin.organisasi', compact('data'));
    }

    public function create() {
        $jabatans = $this->listJabatan();
        return view('admin.organisasi.create', compact('jabatans'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('organisasi', 'public');
        }

        Organisasi::create($validated);
        return redirect()->route('admin.organisasi.index')->with('success', 'Data berhasil disimpan!');
    }

    public function edit(Organisasi $organisasi) {
        $jabatans = $this->listJabatan();
        return view('admin.organisasi.edit', compact('organisasi', 'jabatans'));
    }

    public function update(Request $request, Organisasi $organisasi) {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($organisasi->foto) Storage::disk('public')->delete($organisasi->foto);
            $validated['foto'] = $request->file('foto')->store('organisasi', 'public');
        }

        $organisasi->update($validated);
        return redirect()->route('admin.organisasi.index')->with('success', 'Data diperbarui!');
    }

    public function destroy(Organisasi $organisasi) {
        if ($organisasi->foto) Storage::disk('public')->delete($organisasi->foto);
        $organisasi->delete();
        return redirect()->route('admin.organisasi.index')->with('success', 'Data dihapus!');
    }
}