<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BantuanMessage;
use Illuminate\Support\Str;

class BantuanChatController extends Controller
{
    // =========================
    // START CHAT
    // =========================
    public function start(Request $request)
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        $sessionId = (string) Str::uuid();

        session([
            'bantuan_session_id' => $sessionId,
            'bantuan_kategori'   => $request->kategori,
        ]);

        // record awal
        BantuanMessage::create([
            'session_id' => $sessionId,
            'sender'     => 'user',
            'message'    => 'Memulai percakapan',
            'kategori'   => $request->kategori,
        ]);

        return redirect()->route('bantuan.chat.view');
    }

    // =========================
    // VIEW CHAT
    // =========================
    public function chatView()
    {
        if (! session('bantuan_session_id')) {
            return redirect()->route('user.bantuan');
        }

        return view('user.bantuan-chat', [
            'session_id' => session('bantuan_session_id'),
            'kategori'   => session('bantuan_kategori')
        ]);
    }

    // =========================
    // SEND MESSAGE (AJAX)
    // =========================
    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);

        BantuanMessage::create([
            'session_id' => session('bantuan_session_id'),
            'sender'     => 'user',
            'message'    => $request->message,
            'kategori'   => session('bantuan_kategori')
        ]);

        return response()->json(['status' => 'sent']);
    }

    // =========================
    // FETCH CHAT (AJAX)
    // =========================
    public function fetch()
    {
        $sessionId = session('bantuan_session_id');

        if (! $sessionId) {
            return response()->json([]);
        }

        return BantuanMessage::where('session_id', $sessionId)
            ->orderBy('created_at', 'asc')
            ->get();
    }

    // =========================
    // END CHAT
    // =========================
    public function end()
    {
        // Ambil session_id sebelum dihapus
        $sessionId = session('bantuan_session_id');

        // Hapus session chat
        session()->forget([
            'bantuan_session_id',
            'bantuan_kategori'
        ]);

        // Redirect ke halaman rating
        return response()->json([
            'status' => 'ended',
            'redirect' => route('bantuan.rating.create', $sessionId)
        ]);
    }

}
