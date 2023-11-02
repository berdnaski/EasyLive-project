<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketGateController extends Controller
{
    public function index() {
        return view('users.ticket_gate');
    }
}
