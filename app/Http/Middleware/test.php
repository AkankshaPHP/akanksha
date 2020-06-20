<?php

namespace App\Http\Middleware;

use Closure;

class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ip=$request->ip();
        //$ip='162.164.1.1';
        if($ip == '::1'){
            //die("lll");
        echo "local";
        }else{
            // closure fun wil run
        return $next($request);
        }
    }
}
