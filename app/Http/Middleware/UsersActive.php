<?php

namespace App\Http\Middleware;

use Closure;

class UsersActive
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
		if($request->user()->estado != 1) {
			return redirect('/unauthorize');
		}
        return $next($request);
    }
}
