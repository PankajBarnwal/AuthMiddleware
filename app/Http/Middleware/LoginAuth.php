<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LoginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   $path = $request->path();
          if(($path =='login') && (session()->has('UserData'))){
            return redirect('/');
          }
          elseif(($path !='login') && !session()->has('UserData'))
          return redirect('/login')->with('msg','Please Login to access all pages');
        return $next($request);
    }
}
