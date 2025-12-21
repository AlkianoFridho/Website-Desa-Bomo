<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BantuanMessage;
use Illuminate\Support\Str;

class BantuanChatController extends Controller
{
    public function start(Request $request)
    {
        $request->validate(['kategori' => 'required']);

        $sessionId = (string) Str::uuid();

        session([
            'bantuan_session_id' => $sessionId,
            'bantuan_kategori'   => $request->kategori,
        ]);

        BantuanMessage::create([
            'session_id' => $sessionId,
            'sender'     => 'user',
            'message'    => 'Memulai percakapan',
            'kategori'   => $request->kategori,
        ]);

        return redirect()->route('bantuan.chat.view');
    }

    public function chatView()
    {
        if (!session('bantuan_session_id')) {
            return redirect()->route('user.bantuan');
        }

        return view('user.bantuan-chat', [
            'session_id' => session('bantuan_session_id'),
            'kategori'   => session('bantuan_kategori'),
        ]);
    }

    public function send(Request $request)
    {
        $request->validate(['message' => 'required']);

        BantuanMessage::create([
            'session_id' => session('bantuan_session_id'),
            'sender'     => 'user',
            'message'    => $request->message,
            'kategori'   => session('bantuan_kategori'),
        ]);

        return response()->json(['status' => 'sent']);
    }

    // 🔥 AMBIL CHAT (USER & ADMIN)
    public function fetch()
    {
        $sessionId = session('bantuan_session_id');

        if (! $sessionId) {
            return response()->json([]);
        }

        $messages = BantuanMessage::where('session_id', $sessionId)
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }


    public function end()
    {
        session()->forget(['bantuan_session_id', 'bantuan_kategori']);
        return response()->json(['status' => 'ended']);
    }
}
