<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class FrontRouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers\Front';

    protected $baseMiddleware = ['web'];

    protected $routePath = 'routes/front/';

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mapBaseRoutes();
        $this->mapCheckoutRoute();
        $this->mapAuthRoutes();
        $this->mapCartRoutes();
        $this->mapSearchRoutes();
        Auth::routes();
        $this->mapFrontRoutes();
    }

    protected function mapAuthRoutes()
    {
        Route::middleware(array_merge($this->baseMiddleware, ['auth']))
             ->namespace($this->namespace)
             ->group(base_path($this->routePath . 'auth.php'));
    }

    protected function mapCheckoutRoute()
    {
        Route::prefix('checkout')
             ->middleware(array_merge($this->baseMiddleware, ['auth']))
             ->name('checkout.')
             ->namespace($this->namespace)
             ->group(base_path($this->routePath . 'checkout.php'));
    }

    protected function mapCartRoutes()
    {
        Route::middleware($this->baseMiddleware)
             ->namespace($this->namespace)
             ->group(base_path($this->routePath . 'cart.php'));
    }

    protected function mapSearchRoutes()
    {
        Route::middleware($this->baseMiddleware)
             ->namespace($this->namespace)
             ->name('search.')
             ->group(base_path($this->routePath . 'search.php'));
    }

    protected function mapFrontRoutes()
    {
        Route::middleware($this->baseMiddleware)
             ->namespace($this->namespace)
             ->name('front.')
             ->group(base_path($this->routePath . 'front.php'));
    }

    protected function mapBaseRoutes()
    {
        Route::middleware($this->baseMiddleware)
             ->namespace($this->namespace)
             ->group(base_path($this->routePath . 'base.php'));
    }
}
