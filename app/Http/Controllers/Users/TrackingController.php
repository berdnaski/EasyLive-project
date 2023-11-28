<?php

namespace App\Http\Controllers\Users;

use Illuminate\Support\Str;
use App\Models\Tracking;
use App\Modelsz\Live;
use Illuminate\Routing\Controller;
use Auth;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index() {
        return view('users.tracking');
    }

    public function tracking(Request $request) {
        $user = Auth::user();
        $user_id = $user->id;

        $token = Str::random(10);

        $data_to_update = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'token' => $token,
        ];

        $live_id = $request->live_id;

        $tracking = Tracking::firstOrCreate(['user_id' => $user_id]);

        $tracking->update(['live_id' => $live_id]);

        return redirect()->route('live-create');
    }

}



