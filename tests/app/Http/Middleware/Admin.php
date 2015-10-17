<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Admin
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

        if(!$request->user()->is('admin'))
        {
            return redirect('/notallowed/Admin');
        }

        return $next($request);
    }
}
