<?php

namespace App\Providers;

use App\Providers\AdminRouteServiceProvider;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
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
        $this->app->register(AdminRouteServiceProvider::class);
    }
}
