<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
class AdminLab
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
        //return $next($request);
        if (Auth::check() && Auth::user()->role_id == 0) {
            return $next($request);
            //return redirect()->route('adminlab.index');
        }
        else {
            return redirect()->route('login');
        }
    }
}
