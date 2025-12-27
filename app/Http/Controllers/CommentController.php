<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Panduan;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'panduan_id' => 'required|integer',
            'comment'    => 'required|string|max:500',
            'guest_name' => 'nullable|string|max:50',
        ]);

        Comment::create([
            'panduan_id' => $request->panduan_id,
            'name'       => $request->guest_name,
            'comment'    => $request->comment,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim');
    }


    public function showcomment($id)
    {
        $mainVideo = Panduan::findOrFail($id);

        $recommended = Panduan::where('id', '!=', $id)
                        ->orderBy('created_at', 'desc')
                        ->take(5)
                        ->get();

        $comments = Comment::where('panduan_id', $id)
                        ->orderBy('created_at', 'desc')
                        ->get();

        return view('user.panduan', compact('mainVideo', 'recommended', 'comments'));
    }
}
