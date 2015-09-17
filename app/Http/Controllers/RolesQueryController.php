<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RolesQueryController extends Controller
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

			$roles = Role::with('permissions')
				->latest()->select(['id', 'name', 'description'])
				->where(function ($query) use ($search) {
					$query->where('name', 'LIKE', '%'.$search.'%')
						->orWhere('description', 'LIKE', '%'.$search.'%');
				})
				->limit($counter)
				->offset($start)
				->get();

			$total = $roles->count();

			/**$total = Role::where(function ($query) use ($search) {
				$query->where('name', 'LIKE', '%'.$search.'%')
					->orWhere('description', 'LIKE', '%'.$search.'%');
			})->count();**/

			return $roles = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $roles
			];

		} else {

			$roles = Role::with('permissions')
				->latest()
				->limit($counter)
				->offset($start)
				->get();
			$total = Role::all()->count();
			return $roles = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $roles
			];
		}
	}

	/**
	 * regresa un listado de roles con id
	 * @return mixed
	 */
	public function getRolesList()
	{
		$roles = Role::select('name as text', 'id')->get();
		return $roles;
	}
}
