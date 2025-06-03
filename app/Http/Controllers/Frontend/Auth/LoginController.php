<?php

namespace App\Http\Controllers\Frontend\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return inertia('Frontend/Auth/Login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email:filter',
            'password' => 'required|string',
        ]);
        if ($this->guard()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)) {
            // $user = userAuthInfo();
            // if ($user->status == 0) {
            //     $user->logout();
            //     return back()->withErrors([
            //         'message' => 'Your account has been blocked.',
            //     ]);
            // }
            $request->session()->regenerate();
            return redirect()->route('start');
        }
        return back()->withErrors([
            'email' => 'Alamat email tersebut belum terdaftar.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('web');
    }
}
