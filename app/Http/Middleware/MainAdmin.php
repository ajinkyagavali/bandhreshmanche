<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class MainAdmin
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
        if(Auth::user()->id == 24){

           return $next($request);
    } 
    return redirect('/index');
    }
     
}
