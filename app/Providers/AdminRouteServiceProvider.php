<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class AdminRouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers\Admin';

    protected $name = 'admin.';

    protected $prefix = 'admin';

    protected $baseMiddleware = ['web', 'admin'];

    protected $routePath = 'routes/admin/';

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
        $this->mapAuthRoute();
        $this->mapDashboardRoute();
        $this->mapCategoriesRoute();
        $this->mapCustomersRoute();
        $this->mapEmployeesRoute();
        $this->mapOrdersRoute();
        $this->mapProductsRoute();
        $this->mapOthersRoute();
    }

    protected function mapAuthRoute()
    {
        Route::prefix($this->prefix)
             ->name($this->name)
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path($this->routePath . 'auth.php'));
    }

    protected function mapDashboardRoute()
    {
        Route::prefix($this->prefix)
             ->middleware($this->baseMiddleware)
             ->name($this->name . 'dashboard')
             ->namespace($this->namespace)
             ->group(base_path($this->routePath . 'dashboard.php'));
    }

    protected function mapCategoriesRoute()
    {
        Route::prefix($this->prefix)
             ->middleware(array_merge($this->baseMiddleware, ['route:admin', 'guard:admin']))
             ->name($this->name)
             ->namespace($this->namespace . '\Categories')
             ->group(base_path($this->routePath . 'categories.php'));
    }

    protected function mapCustomersRoute()
    {
        Route::prefix($this->prefix)
             ->middleware(array_merge($this->baseMiddleware, ['route:admin', 'guard:admin']))
             ->name($this->name)
             ->namespace($this->namespace . '\Customers')
             ->group(base_path($this->routePath . 'customers.php'));
    }

    protected function mapEmployeesRoute()
    {
        Route::prefix($this->prefix)
             ->middleware(array_merge($this->baseMiddleware, ['route:admin', 'guard:admin']))
             ->name($this->name)
             ->namespace($this->namespace)
             ->group(base_path($this->routePath . 'employees.php'));
    }

    protected function mapOrdersRoute()
    {
        Route::prefix($this->prefix)
             ->middleware(array_merge($this->baseMiddleware, ['route:admin', 'guard:admin']))
             ->name($this->name)
             ->namespace($this->namespace . '\Orders')
             ->group(base_path($this->routePath . 'orders.php'));
    }

    protected function mapProductsRoute()
    {
        Route::prefix($this->prefix)
             ->middleware(array_merge($this->baseMiddleware, ['route:admin', 'guard:admin']))
             ->name($this->name)
             ->namespace($this->namespace . '\Products')
             ->group(base_path($this->routePath . 'products.php'));
    }

    protected function mapOthersRoute()
    {
        Route::prefix($this->prefix)
             ->middleware(array_merge($this->baseMiddleware, ['route:admin', 'guard:admin']))
             ->name($this->name)
             ->namespace($this->namespace)
             ->group(base_path($this->routePath . 'others.php'));
    }
}
