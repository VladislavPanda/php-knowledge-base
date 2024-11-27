<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repositories\ChapterRepository;
use App\Repositories\Contracts\ChapterRepositoryInterface;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * @var array|class-string[]
     */
    public array $bindings = [
        ChapterRepositoryInterface::class => ChapterRepository::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['admin.sidebar', 'admin.user.index'], function ($view) {
            $chapterRepository = $this->app->make(ChapterRepositoryInterface::class);
            $userRepository = $this->app->make(UserRepositoryInterface::class);
            $view
                ->with('chapters', $chapterRepository->findAll())
                ->with('user', $userRepository->findCurrentUserWithRoles());
        });
    }
}
