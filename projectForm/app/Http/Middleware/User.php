<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
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
//dd("asdf");
       /* if ($request->user()->role != 0) {
            Auth::logout();
            return redirect()->guest('/login');
        }*/
        return $next($request);
    }


}

