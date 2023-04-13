<?php

namespace App\Http\Middleware;

//use Cartalyst\Sentinel\Sentinel;
use Closure;
use Illuminate\Http\Request;
use Sentinel;

class PermissionCheckerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$permission)
    {
//        return $next($request);

        if (Sentinel::check()):
            if (in_array($permission , Sentinel::getUser()->permissions)):
                return $next($request);
            endif;
            abort(403);
        else:
            abort(403);
        endif;
    }
}
