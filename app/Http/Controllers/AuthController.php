<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Services\Auth\Google;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * @param AuthRequest $authRequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(AuthRequest $authRequest)
    {
        if (Auth::attempt($authRequest->validated())) {
            $authRequest->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['Ошибка: данные для входа введены неверно']);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * @param Google $googleAuth
     * @return RedirectResponse
     */
    public function handleGoogleCallback(Google $googleAuth): \Illuminate\Http\RedirectResponse
    {
        $userSocialite = Socialite::driver('google')->user();

        if (!$googleAuth->isAllowedEmailDomain($userSocialite->user['email'])) {
            return redirect('/');
        }

        Auth::login($googleAuth->process($userSocialite));

        return redirect()->intended('dashboard');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
