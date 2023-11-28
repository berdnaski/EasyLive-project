<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\TicketGate;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Auth;

class TicketGateController extends Controller
{
    public function index() {
        $user = Auth::user();

        $tracking_info = Tracking::where('user_id', $user->id)->first();

        return view('users.ticket_gate', ['tracking_info' => $tracking_info]);
    }

    public function store(Request $request) {
        $options = [
            'email' => $request->email,
            'phone' => $request->phone,
            'name' => $request->name,
        ];

        $live = [];

        foreach ($options as $to_save => $value) {
            if (session($to_save) === 'sim') {
                $live[$to_save] = $value;
            }
        }

        $user = auth()->user();

        $has_answered_form = TicketGate::where('user_id', $user->id)->exists();

        if(!$has_answered_form) {

            $live_stream = TicketGate::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);

            if(!$live_stream) {
                return redirect()->route('live-index')->with('error', 'Erro ao criar o registro');
            }

            session()->forget(['email', 'phone', 'name']);

            return redirect()->route('live-show', ['id' => $live_stream->id]);
        }

        return redirect()->route('live-create');
    }
}
