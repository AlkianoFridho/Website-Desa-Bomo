<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    use HasFactory;

    protected $table = 'profil_desas'; // opsional kalau nama tabel standar

    protected $fillable = [
        'nama_desa',
        'visi',
        'misi',
        'kepala_desa',
        'lokasi',
        'deskripsi',
        'sejarah_singkat', // ← WAJIB ADA DI SINI
    ];
}
