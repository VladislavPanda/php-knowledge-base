<?php

namespace App\Providers;

use App\Contracts\ContentModelInterface;
use App\Models\Chapter;
use App\Policies\ContentPolicy;
use App\Repositories\CategoryRepository;
use App\Repositories\ChapterRepository;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\ChapterRepositoryInterface;
use App\Repositories\Contracts\RoleRepositoryInterface;
use App\Repositories\RoleRepository;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, RoleRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(ContentModelInterface::class, ContentPolicy::class);
    }
}
