<?php

namespace App\Http\Middleware;

use Closure;

class TrainerMiddleWare
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

        if(!$request->user()->is('trainer'))
        {
            return redirect('/notallowed/Trainer');
        }

        return $next($request);
    }
}
