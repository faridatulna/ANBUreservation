<?php
namespace App\Http\Middleware;
use Closure;
use Auth;

class Kalab
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
        if (Auth::check() && Auth::user()->role_id == 1) {
            return $next($request);
            // return redirect()->route('kalab.index');
        }
        else {
            return redirect()->route('login');
        }
    }
}
