<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Infrastructure\Repositories\PostRepositoryInterface::class, \App\Infrastructure\Repositories\PostRepository::class);
        $this->app->bind(\App\Infrastructure\Repositories\CategoryRepositoryInterface::class, \App\Infrastructure\Repositories\CategoryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
