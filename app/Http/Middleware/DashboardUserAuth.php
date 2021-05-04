<?php

namespace App\Http\Middleware;

use Closure;
use auth;

class DashboardUserAuth
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
        // if(auth::check())
        // {
        //     if(auth::user()->user_type !='superadmin')
        //     {
        //         return redirect()->route('unauthorize.user');
        //         // auth::logout();
        //         // $message = 'Your account is not approved please contact with administrator';
        //         // return redirect()->route('login')->withMessage($message);
        //     }

        //     return $next($request);

        // }
        if (Auth::user()->user_type =='superadmin') //If user has admin role
        {  
             return $next($request);
        } elseif(Auth::user()->user_type =='user'){
            return $next($request);
        }
       
        else{
            return redirect()->route('login');
        }
    }
}
