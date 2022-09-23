<?php

use Lockwebsitevendor\Lockwebsitepackage\Http\Controllers\passwordVerification;
use Lockwebsitevendor\Lockwebsitepackage\Http\Middleware\RouteAccess;
use Illuminate\Support\Facades\Route;

Route::get('/locksite', [passwordVerification::class,'index'])->name('locksite');

Route::post('/password-verify', [passwordVerification::class,'passwordVerify'])->name('password_verify');

Route::middleware([RouteAccess::class])->group(function(){  
  Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php')); 
});