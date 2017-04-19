<?php

namespace HinaPlugin\Plugin;

use Illuminate\Support\ServiceProvider as MainServiceProvider;

class ServiceProvider extends MainServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
