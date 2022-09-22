<?php

namespace Sitespeedup\Speedoptimization;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
                \Sitespeedup\Speedoptimization\Http\Middleware\SpeedoptimizeMiddelware::class,
            )
        );

        $router->middlewareGroup('api', array(
                \Sitespeedup\Speedoptimization\Http\Middleware\SpeedoptimizeMiddelware::class,
            )
        );
    }
}
