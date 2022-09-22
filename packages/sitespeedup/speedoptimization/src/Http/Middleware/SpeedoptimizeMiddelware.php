<?php

namespace Sitespeedup\Speedoptimization\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SpeedoptimizeMiddelware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {       
        $path =dirname(dirname( dirname(__FILE__) )).'/passwordGenerate.php';

        /*
            This condition is use to check passwordGenerator file is autogenerated or not
            If file is generated your wesite is complete locked otherwaise website is running on normal mode
            Note : This concept is taken from laravel default site up and down
        */
        if(File::exists($path)){            
            return view('speedoptimization::passwordscreen');
        }else{
            return $next($request);
        }              
    }   
}