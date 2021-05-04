<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class SpecialistCheck
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
        if(Auth::check())
        {
            if(Auth::user()->user_type=='specialist')
            {
                return $next($request);
            }
            return redirect()->route('index');

        }
    }
}
