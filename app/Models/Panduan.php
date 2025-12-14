<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'durasi',
        'thumbnail',
        'video_url',
        'kategori',
        'dibuat_oleh',
        'views'
    ];
    public function comments()
{
    return $this->hasMany(Comment::class, 'panduan_id');
}

}
