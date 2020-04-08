<?php

namespace App\Http\Middleware;

use Closure, Auth;

class RedirectIfIsAdmin
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
        if (Auth::user()->is_admin) 
            return $next($request);
        
        return redirect(route('homeCursos'));
    }
}
