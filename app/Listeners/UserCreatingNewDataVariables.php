<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCreatingNewDataVariables
{
    /**
     * Handle the event.
     *
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
		$event->iuser = [
			'password' => bcrypt($event->request['password']),
			'name' => $event->request['name'],
			'email' => $event->request['email']
		];

		/**
		 * if is upload the avatar image
		 */
		if(isset($event->request['avatar'])){
			$event->iprofile = [
				'avatar'	=> $event->avatar,
				'label'		=> $event->request['label'],
				'resume'	=> $event->request['resume'],
				'github'	=> $event->request['github'],
				'facebook'	=> $event->request['facebook'],
				'twitter'	=> $event->request['twitter'],
				'phone'		=> $event->request['phone'],
				'mobile'	=> $event->request['mobile']
			];
		} else {
			$event->iprofile = [
				'avatar' 	=> 'avatar-001.jpg',
				'label'		=> $event->request['label'],
				'resume'	=> $event->request['resume'],
				'github'	=> $event->request['github'],
				'facebook'	=> $event->request['facebook'],
				'twitter'	=> $event->request['twitter'],
				'phone'		=> $event->request['phone'],
				'mobile'	=> $event->request['mobile']
			];
		}
    }
}
