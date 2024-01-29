<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next)
{
    if (auth()->check()) {
        return $next($request);
    }

    return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
}
}