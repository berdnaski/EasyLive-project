<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\TicketGate;
use Illuminate\Http\Request;

class TicketGateController extends Controller
{
    public function index() {
        return view('users.ticket_gate');
    }

    public function store(Request $request) {

        $options = [
            'email' => $request->email,
            'phone' => $request->phone,
            'name' => $request->name,
        ];

        foreach ($options as $to_save => $value) {
            if(session($to_save) === 'sim') {
                $data[$to_save] = $value;
            }
        }

        $data = TicketGate::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->route('ticket_gate-page');
    }
}
