<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\User;
use App\Profile;

class UserWasUpdated extends Event
{
    use SerializesModels;

	public $request;
	public $id;
	public $user;
	public $avatar;
	public $profile;

	/**
	 * Create a new event instance.
	 * @param $request
	 */
    public function __construct($request, $id)
    {
        $this->request = $request;
		$this->user = User::findOrFail($id);
		$this->profile = Profile::where('user_id', '=', $id);
    }
}
