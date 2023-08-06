<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (true) {
            dd($request);
                // if(Auth::user()->is_admin == 1){
                //     return $next($request);
                //     dd($request);
                // }
                
            }
        
            return redirect('/signin');
    }
}
