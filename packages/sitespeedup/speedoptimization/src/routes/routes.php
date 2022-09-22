<?php

use Illuminate\Support\Facades\Route;
use Sitespeedup\Speedoptimization\Http\Middleware\SpeedoptimizeMiddelware;
use Sitespeedup\Speedoptimization\Http\Controllers\SpeedoptimizationController;

Route::get('/speedup', [SpeedoptimizationController::class,'index'])->name('speedup');

Route::post('/password-verify', [SpeedoptimizationController::class,'passwordVerify'])->name('password_verify');

Route::middleware([SpeedoptimizeMiddelware::class])->group(function(){  
  Route::middleware('api')->prefix('api')->group(base_path('routes/api.php'));
  Route::middleware('web')->group(base_path('routes/web.php'));  
});
