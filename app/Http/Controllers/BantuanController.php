<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BantuanController extends Controller
{
    public function index()
    {
        return view('user.bantuan');
    }

    public function start(Request $request)
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        session(['bantuan_kategori' => $request->kategori]);

        return redirect()->route('bantuan.chat.view');
    }
}
