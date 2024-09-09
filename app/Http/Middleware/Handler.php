<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Foundation\Configuration\Middleware as BaseMiddleware;

final class Handler
{
    /**
     * @var array|class-string[]
     */
    protected array $aliases = [
        'auth.internal' => AuthInternalMiddleware::class,
        'cache.prevent' => CachePreventMiddleware::class
    ];

    /**
     * @param BaseMiddleware $baseMiddleware
     * @return BaseMiddleware
     */
    public function __invoke(BaseMiddleware $baseMiddleware): BaseMiddleware
    {
        if ($this->aliases) {
            $baseMiddleware->alias($this->aliases);
        }

        return $baseMiddleware;
    }
}
