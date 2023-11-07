<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Live;

class LiveController extends Controller
{
    public function index() {
        $live_streams = Live::all();

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

        $data = Live::create([
            'title' => $request->title,
            'description' => $request->description,
            'youtube_url' => $request->youtube_url,
        ]);

        return redirect()->route('live-index');
    }

    public function show($id) {
        $live = Live::find($id);

        return view('live.show', ['live' => $live]);
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
