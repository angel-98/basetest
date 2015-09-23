<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class ProfilePerms
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

		if(Auth::user() && Auth::user()->can('own-profile-edit') && $request->segments()[1] == Auth::user()->id){
        	return $next($request);
		} elseif(Auth::user()->can('profile-edit-full-access')){
        	return $next($request);
		}
		return redirect()->back();
    }
}
