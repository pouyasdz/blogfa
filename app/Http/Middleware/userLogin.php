<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class userLogin
{
   
    public function handle(Request $request, Closure $next): Response
    {   
        if(auth()->guard()->check()) return $next($request);
        return redirect()->route("login");
    }
}
