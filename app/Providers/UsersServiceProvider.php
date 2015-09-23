<?php

namespace App\Providers;

use App\User;
use Illuminate\Support\ServiceProvider;

class UsersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		//
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
		User::deleting(function ($user) {
			if ($user->id === 1) {
				return redirect()->back();
			}
		});
    }
}
