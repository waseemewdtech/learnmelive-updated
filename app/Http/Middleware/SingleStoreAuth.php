<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class SingleStoreAuth
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
        if(!Session::has('singlestore') && empty(Session::get('singlestore')))
        {
            $message = 'Please first login in your store';
            return redirect()->route('stores.home')->withMessage($message);
        }
        else if(Session::has('singlestore') && !empty(Session::get('singlestore')))
        {
            $sub = \App\Subscription::where('store_id',Session::get('singlestore'))->where('status','active')->get()->last();
            if ($sub)
            {
                if($sub->count() == 0 && $sub->subscription_end_date < time())
                {
                    $message = 'Sorry! your subscription has been canceled and finished';
                    return redirect()->route('stores.home')->withMessage($message);
                }
            }
            else
            {
                $message = 'Sorry! your subscription has been canceled and finished please first subscribed';
                return redirect()->route('stores.home')->withMessage($message);
            }
        }

        
        return $next($request);
    }
}
