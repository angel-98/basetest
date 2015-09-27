<?php

namespace App\Listeners;

use App\Events\UserWasUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCreatingDataVariables
{
    /**
     * Handle the event.
     *
     * @param  UserWasUpdated  $event
     * @return void
     */
    public function handle(UserWasUpdated $event)
    {
		/**
		 * If there is a password change
		 */
		if(isset($event->request['password']) && $event->request['password'] != ""){
			$event->iuser = [
				'password' => bcrypt($event->request['password']),
				'name' => $event->request['name'],
				'email' => $event->request['email']
			];
		} else {
			$event->iuser = [
				'name' => $event->request['name'],
				'email' => $event->request['email']
			];
		}

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
