<?php

namespace App\Providers;

use App\Providers\FrontRouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class FrontServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(FrontRouteServiceProvider::class);
    }
}
