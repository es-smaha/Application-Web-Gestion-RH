<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class ResppaieMiddleware
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
        if(auth::User()->usertype=='3'){
            return $next($request);
        }else{
            return redirect('/home')->with('status','vous n etes pas admin ');
        }
    }
}
