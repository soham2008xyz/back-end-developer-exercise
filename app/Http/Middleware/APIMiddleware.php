<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class APIMiddleware
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
        dd("This is test Api Middleware but we are not using anymore");
        return $next($request);
    }
}
