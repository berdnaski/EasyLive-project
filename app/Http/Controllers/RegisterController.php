<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\User;
class RegisterController extends Controller
{
    public function index() {
        return view('Auth.register');
    }
    public function register(Request $request) {
        try {
            $guzzle = new \GuzzleHttp\Client();
            $url = env("API_BLT_URL");
            $response = json_decode($guzzle->request('POST', $url . 'customers/auth/register', [
                'headers' => [
                    'Token' => env("API_BLT_TOKEN"),
                ],
                'query' => [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => $request->password,
                    'product' => 'EasyLive',
                    'billing_plan' => 'free',
                ],
            ])->getBody(), true);
            if($response['status'] == 'error') {
                return redirect()->route('register')->with('message', $response['message']);
            }
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'auth_token' => $response['auth_token'],
            ]);
            \Auth::login($user);
            return redirect()->route('register');
        } catch (\Throwable $exception) {
            Log::create([
                'activity' => 'An error occurred in the register function.',
                'realized_at' => now('America/Sao_Paulo')->format('Y-m-d H:i:s'),
                'status' => 'error',
                'response' => $exception,
            ]);
            return redirect()->route('register')->with('error', 'An unknown error occurred, please try again later!');
        }
    }
}
