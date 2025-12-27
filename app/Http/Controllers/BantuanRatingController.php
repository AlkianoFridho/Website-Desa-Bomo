<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BantuanRating;

class BantuanRatingController extends Controller
{
    // =========================
    // TAMPIL HALAMAN RATING
    // =========================
    public function create($session_id)
    {
        return view('user.bantuan-rating', [
            'session_id' => $session_id
        ]);
    }

    // =========================
    // SIMPAN RATING
    // =========================
    public function store(Request $request)
    {
        $request->validate([
            'session_id' => 'required',
            'rating'     => 'required|integer|min:1|max:5',
            'komentar'   => 'nullable|string'
        ]);

        BantuanRating::create([
            'session_id' => $request->session_id,
            'rating'     => $request->rating,
            'komentar'   => $request->komentar,
        ]);

        return response()->json([
            'status'   => 'success',
            'message'  => 'Terima kasih atas penilaian Anda 🙏',
            'redirect' => route('user.bantuan')
        ]);


    }
}
