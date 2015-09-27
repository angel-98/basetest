<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use App\Profile;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserCreatingProfile
{
    /**
     * Handle the event.
     *
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
		DB::transaction(function() use ($event, &$data){
			$user = User::create($event->iuser);
			$event->iprofile['user_id'] = $user->id;
			$profile = Profile::create($event->iprofile);
		});
		Session::flash('flash_message', "El usuario ". $event->request['name'] ." a sido creado");
    }
}
