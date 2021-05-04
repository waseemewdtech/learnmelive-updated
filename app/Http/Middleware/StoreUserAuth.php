<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class StoreUserAuth
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
        // if(Auth::check())
        // {
        //     if(Auth::user()->user_type !='owner')
        //     {
        //         return redirect()->route('unauthorize.user');
        //         // auth::logout();
        //         // $message = 'Your account is not approved please contact with administrator';
        //         // return redirect()->route('login')->withMessage($message);
        //     }

        //     return $next($request);

        // }
        if (Auth::user()->user_type=='owner') //If user has admin role
        {
            return $next($request);
        }
        else{
            return redirect()->route('login');
        }
    }
}
