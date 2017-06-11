<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin{

     public function handle($request, Closure $next)
    {
     if (Auth::user() &&  Auth::user()->name== 'admin') {
            return $next($request);
     }

    return back();
    }
}