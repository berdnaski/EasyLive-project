<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\User;
class LoginController extends Controller
{
    public function index() {
        if(\Auth::check()) {
            return redirect()->route('welcome');
        }
        return view('Auth.login');
    }
    public function login(Request $request) {
        try {
            $guzzle = new \GuzzleHttp\Client();
            $url = env("API_BLT_URL");
            $response = json_decode($guzzle->request('POST', $url . 'customers/auth/login', [
                'headers' => [
                    'Token' => env("API_BLT_TOKEN"),
                ],
                'query' => [
                    'email' => $request->email,
                    'password' => $request->password,
                    'product' => 'EasyLive',
                ],
            ])->getBody(), true);
            if($response['status'] == 'error') {
                return redirect()->route('login')->with('error', $response['message']);
            }
            $user = User::where('auth_token', $response['auth_token'])->first();
            \Auth::login($user);
            return redirect()->route('links');
        } catch (\Throwable $exception) {
            Log::create([
                'activity' => 'An error occurred in the login function.',
                'realized_at' => now('America/Sao_Paulo')->format('Y-m-d H:i:s'),
                'status' => 'error',
                'response' => $exception,
            ]);
            return redirect()->route('login-page')->with('error', 'An unknown error occurred, please try again later!');
        }
    }
    public function logout(Request $request) {
        \Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login-page');
    }
}
