<?php

namespace Sitespeedup\Speedoptimization;

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
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'speedoptimization');
    }
}
