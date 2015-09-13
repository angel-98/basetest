<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersQueryController extends Controller
{
	/**
	 * Middleware user validation
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * index request, search impruved
	 * @param null $page
	 * @param null $search
	 * @return array
	 */
	public function getIndex($page = null, $search = null)
	{
		$counter = 5;
		$start = ($page > 1) ? ($page * $counter) - $counter : 0;
		if($search != null){

			$user = User::with('profiles')
				->latest()->select(['id', 'name', 'email'])
				->where(function ($query) use ($search) {
					$query->where('name', 'LIKE', '%'.$search.'%')
						->orWhere('email', 'LIKE', '%'.$search.'%');
				})
				->limit($counter)
				->offset($start)
				->get();

			$total = $user->count();

			/**$total = Role::where(function ($query) use ($search) {
			$query->where('name', 'LIKE', '%'.$search.'%')
			->orWhere('description', 'LIKE', '%'.$search.'%');
			})->count();**/

			return $user = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $user
			];

		} else {

			$user = User::with('permissions')
				->latest()
				->limit($counter)
				->offset($start)
				->get();
			$total = User::all()->count();
			return $user = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $user
			];
		}
	}
}
