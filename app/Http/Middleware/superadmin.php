<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class superadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->superadmin == 1){
            return $next($request);
        } else {
            return redirect('/dashboard')->with('message', 'Anda bukan Superadmin !!');
        }
    }
}
