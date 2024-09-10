<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\Handler as MiddlewareHandler;
use Illuminate\Foundation\Configuration\Exceptions;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(new MiddlewareHandler())
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
