<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserUploadNewAvatar
{
    /**
     * Handle the event.
     *
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
		if(isset($event->request['avatar'])){
			$file = $event->request['avatar'];
			$event->avatar = $event->request['avatar']->getClientOriginalName();
			$file->move('images/users', $event->avatar);
		}
    }
}
