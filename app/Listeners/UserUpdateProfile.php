<?php

namespace App\Listeners;

use App\Events\UserWasUpdated;
use App\Profile;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserUpdateProfile
{

	public $iuser;
	public $iprofile;

    /**
     * Handle the event.
     *
     * @param  UserWasUpdated  $event
     * @return void
     */
    public function handle(UserWasUpdated $event)
    {
		/**
		 * Save on transaction for security
		 */
		DB::transaction(function() use ($event, &$data){
			$event->user->update($event->iuser);
			$event->profile->update($event->iprofile);
		});

		Session::flash('flash_message', "Usuario actualizado");
    }
}
