<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BantuanRatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'komentar' => 'nullable|string'
        ]);

        // Simpan rating ke database nanti
        return response()->json(['status' => 'saved']);
    }
}
