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

        $live_stream = TicketGate::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->route('live-show', ['id' => $live_stream->id]);
    }
}
