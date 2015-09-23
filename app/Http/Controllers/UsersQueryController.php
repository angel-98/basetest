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
		$this->middleware('active');
	}

	/**
	 * index request, search improved
	 * @param null $page
	 * @param null $search
	 * @return array
	 */
	public function getIndex($page = null, $search = null)
	{
		$counter = 5;
		$start = ($page > 1) ? ($page * $counter) - $counter : 0;
		if($search != null){

			$user = User::select(['id', 'slug', 'name', 'email', 'estado'])
				->where(function ($query) use ($search) {
					$query->where('name', 'LIKE', '%'.$search.'%')
						->orWhere('email', 'LIKE', '%'.$search.'%');
				})
				->limit($counter)
				->offset($start)
				->get();

			$total = $user->count();

			return $user = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $user
			];

		} else {

			$user = User::select(['id', 'slug', 'name', 'email', 'estado'])
				->with('roles')
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

	public function postUserEstado(Request $request, $id)
	{
		$user = User::findOrFail($id);
		$user->estado = $request->input('estado');
		$user->update();
		return 'done';
	}
}
