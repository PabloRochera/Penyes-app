<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 2) {
            return $next($request); // Permite el acceso
        }
        return redirect('/')->with('error', 'Acceso denegado.');
    }
}
