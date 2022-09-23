<?php

namespace Sitespeedup\Speedoptimization;

use Illuminate\Support\Facades\Route ;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class Speedoptimization extends ServiceProvider
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
        $this->loadViewsFrom(__DIR__.'/views', 'speedoptimization');

        $router->middlewareGroup('web', array(
            \Authenticate\Role\Http\Middleware\CheckAuth::class,
            )
        );
   
    }
}
