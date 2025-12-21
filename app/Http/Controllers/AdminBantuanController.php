<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BantuanMessage;
use Illuminate\Support\Facades\DB;

class AdminBantuanController extends Controller
{
    // LIST SEMUA SESSION CHAT (session_id NOT NULL)
    public function index()
    {
        $chats = DB::table('bantuan_messages')
            ->select(
                'session_id',
                DB::raw('MAX(created_at) as last_time'),
                DB::raw('MAX(message) as last_message'),
                DB::raw('MAX(kategori) as kategori'),
                
            )
            ->whereNotNull('session_id')           // penting: buang row tanpa session_id
            ->groupBy('session_id')
            ->orderByDesc('last_time')
            ->get();

        return view('admin.bantuan.index', compact('chats'));
    }

    // TAMPILKAN CHAT PER SESSION
    public function showChat($session_id)
    {
        $messages = BantuanMessage::where('session_id', $session_id)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('admin.bantuan.chat', compact('messages', 'session_id'));
    }

    // ADMIN KIRIM BALASAN
    public function reply(Request $request)
    {
        $request->validate([
            'session_id' => 'required',
            'message' => 'required'
        ]);

        // Ambil kategori dari pesan user pertama
        $kategori = BantuanMessage::where('session_id', $request->session_id)
            ->value('kategori');

        BantuanMessage::create([
            'session_id' => $request->session_id,
            'sender' => 'admin',
            'message' => $request->message,
            'kategori' => $kategori
        ]);

        return back()->with('success', 'Pesan terkirim!');
    }

}
