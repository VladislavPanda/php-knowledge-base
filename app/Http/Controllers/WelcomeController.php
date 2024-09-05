<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function __invoke()
    {
        return view('welcome');
    }
}
