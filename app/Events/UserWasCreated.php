<?php

namespace App\Events;

use App\Events\Event;
use App\Profile;
use App\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserWasCreated extends Event
{
    use SerializesModels;
	public $request;
	public $user;
	public $profile;
	public $avatar;
	public $iuser;
	public $iprofile;

	/**
	 * Create a new event instance.
	 *
	 * @param $request
	 */
    public function __construct($request)
    {
		$this->request = $request;
    }
}
