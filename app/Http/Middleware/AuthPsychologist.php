<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthPsychologist
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
        session_start();
        if(!isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['email']))
            return redirect('/login');
        else
            return $next($request);
    }
}
