<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RemoveSubdomainArgs
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
        $route = $request->route();
        $route->forgetParameter('subdomain');
        return $next($request);
    }
}
