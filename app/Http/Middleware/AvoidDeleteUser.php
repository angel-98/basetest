<?php

namespace App\Http\Middleware;

use Closure;

class AvoidDeleteUser
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
		if($request->input('id') == 1)
		{
			return redirect()->back();
		}
        return $next($request);
    }
}
