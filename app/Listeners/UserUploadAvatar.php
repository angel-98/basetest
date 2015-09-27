<?php

namespace App\Listeners;

use App\Events\UserWasUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserUploadAvatar
{
    /**
     * Handle the event.
     *
     * @param  UserWasUpdated  $event
     * @return void
     */
    public function handle(UserWasUpdated $event)
    {
		if(isset($event->request['avatar'])){
			$file = $event->request['avatar'];
			$event->avatar = $event->request['avatar']->getClientOriginalName();
			$file->move('images/users', $event->avatar);
		}
    }
}
