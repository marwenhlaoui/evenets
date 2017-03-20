<?php

namespace App\Http\Middleware;

use Closure;

class testMiddleware
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
        
        if (!empty(\Auth::user()->id)&&(\Auth::user()->id == 1)) {
            return $next($request);
        }else{
            return redirect()->route('register');
        }
    }
}
