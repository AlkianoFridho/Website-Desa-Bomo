<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'panduan_id',
        'name',
        'comment',
    ];

    public function panduan()
    {
        return $this->belongsTo(Panduan::class);
    }
}
