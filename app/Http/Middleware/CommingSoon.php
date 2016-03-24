<?php

namespace App\Http\Middleware;

use Closure;

class CommingSoon
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
        if (env('APP_COMING_SOON')==true && $request->path()!='coming-soon') {
            return redirect('/coming-soon');
        }

        return $next($request);
    }
}
