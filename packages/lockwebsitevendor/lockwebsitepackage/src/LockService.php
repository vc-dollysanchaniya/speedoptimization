<?php

namespace Lockwebsitevendor\Lockwebsitepackage;

use Illuminate\Support\Facades\Route ;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LockService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'lockwebsitevendor');
      
            $router->middlewareGroup('web', array(
                \Lockwebsitevendor\Lockwebsitepackage\Http\Middleware\RouteAccess::class,
            )
        );
    }
}
