<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('web');
    }

    public function redirectToProvider(string $provider)
    {
        // if ($provider === 'google' && !settings()->google_oauth_status || $provider === 'facebook' && !settings()->facebook_oauth_status) {
        //     abort(403, ucwords($provider) . ' login is currently disabled.');
        // }
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback(string $provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
        $user = User::firstOrCreate(
            ['email' => $socialUser->email],
            [
                'username' => Str::slug($socialUser->name, '') . rand(100, 999),
                'password' => bcrypt(Str::random(16)),
                'email_verified_at' => now(),
            ]
        );
        $this->guard()->login($user);
        return redirect()->route('dashboard');
    }
}
