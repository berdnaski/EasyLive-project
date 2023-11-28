<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Live;
use Auth;

class LiveController extends Controller
{
    public function index() {
        $user = auth()->user();

        $live_streams = Live::where('user_id', $user->id)->get();

        return view('live.index', ['live_streams' => $live_streams]);
    }

    public function create() {
        return view('live.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'youtube_url' => 'required|url',
        ]);

        $user = auth()->user();

        $live = Live::create([
            'user_id' => $user->id,
            'title' => $request->title,
            'description' => $request->description,
            'youtube_url' => $request->youtube_url,
        ]);

        $unique_link = 'live/' . $live->id . '-' . Str::random(10);

        $live->update(['unique_link' => $unique_link]);

        return redirect()->route('live-show', ['id' => $live->id]);

    }

    public function show($id) {
        $live_stream = Live::find($id);

        return view('live.show', ['live_stream' => $live_stream]);
    }

    public function destroy($id) {
        $live_stream = Live::find($id);

        if(!$live_stream) {
            return redirect()->route('live-index')->with('error', 'Transmissão ao vivo não encontrada.');
        }

        $live_stream->delete();

        return redirect()->route('live-index')->with('success', 'Transmissão ao vivo excluída com sucesso.');
    }
}
