<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
