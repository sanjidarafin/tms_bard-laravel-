<?php

namespace App\Http\Middleware;

use Closure;

class MonitorMiddleware
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
        if(!Auth::check()){
            return redirect()->guest('/auth/login');
        }

        if(!$request->user()->is('monitor'))
        {
            return redirect('/notallowed/Monitor');
        }

        return $next($request);
    }
}
