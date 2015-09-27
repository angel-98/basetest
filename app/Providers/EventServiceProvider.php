<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserWasUpdated' => [
            'App\Listeners\UserUploadAvatar',
            'App\Listeners\UserCreatingDataVariables',
            'App\Listeners\UserUpdateProfile'
        ],
		'App\Events\UserWasCreated' => [
			'App\Listeners\UserUploadNewAvatar',
            'App\Listeners\UserCreatingNewDataVariables',
            'App\Listeners\UserCreatingProfile'
		],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
