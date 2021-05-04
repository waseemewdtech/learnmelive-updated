<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if($request->user() === null) {
            return response("unsufficient Permissions",401);
        }
        if($request->user()->hasRole($role) || !$role) {
            return $next($request);
        }
        return response("unsufficient Permissions",401);
    }
}
