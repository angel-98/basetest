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
		 * If there is a password change
		 */
		if(isset($event->request['password']) && $event->request['password'] != ""){
			$this->iuser = [
				'password' => bcrypt($event->request['password']),
				'name' => $event->request['name'],
				'email' => $event->request['email']
			];
		} else {
			$this->iuser = [
				'name' => $event->request['name'],
				'email' => $event->request['email']
			];
		}

		/**
		 * if is upload the avatar image
		 */
		if(isset($event->request['avatar'])){
			$this->iprofile = [
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
			$this->iprofile = [
				'label'		=> $event->request['label'],
				'resume'	=> $event->request['resume'],
				'github'	=> $event->request['github'],
				'facebook'	=> $event->request['facebook'],
				'twitter'	=> $event->request['twitter'],
				'phone'		=> $event->request['phone'],
				'mobile'	=> $event->request['mobile']
			];
		}

		/**
		 * Save on transaction for security
		 */
		DB::transaction(function() use ($event, &$data){
			$event->user->update($this->iuser);
			$event->profile->update($this->iprofile);
		});

		Session::flash('flash_message', "Usuario actualizado");
    }
}
