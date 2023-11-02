<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index(){
        return view('users.tracking');
    }

    public function tracking(Request $request) {
        $to_saves = [
            'email' => $request->email,
            'phone' => $request->phone,
            'name' => $request->name,
        ];

        foreach ($to_saves as $to_save => $value) {
            if ($value === 'sim') {
                $request->session()->put($to_saves, $value);
            }
        }
        return redirect()->route('ticket_gate-page');
    }
}
