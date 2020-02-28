<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class MemberMiddleware
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
        if ($request->user() && $request->user()->type !='u'){
            return new Response (view('unauthorized')->with('role','MEMBER'));
        }
        return $next($request);    
    }
}
