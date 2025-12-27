<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BantuanRating extends Model
{
    protected $table = 'bantuan_ratings';

    protected $fillable = [
        'session_id',
        'rating',
        'komentar',
    ];
}
