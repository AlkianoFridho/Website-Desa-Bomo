<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_desa', 'visi', 'misi', 'kepala_desa', 'lokasi', 'deskripsi'
    ];
}
