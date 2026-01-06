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
    'tentang_kami',
    'sejarah_singkat',
    'visi',
    'misi',
    'total_penduduk',
    'luas_wilayah',
    'potensi_utama',
    'judul_data',
    'deskripsi_data',
];

}
