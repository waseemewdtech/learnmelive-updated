<?php

namespace App\Http\Middleware;

use Closure;
use auth;
class UserStatus
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
        if(auth::check())
        {
            if(auth::user()->status=='inactive')
            {
                auth::logout();
                $message = 'Your account is not approved please contact with administrator';
                return redirect()->route('login')->withMessage($message);
            }

            return $next($request);

        }
        else{
            return redirect()->route('login');
        }
        
    }
}
