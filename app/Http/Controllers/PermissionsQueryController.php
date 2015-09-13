<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PermissionsQueryController extends Controller
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

			$permisos = Permission::where(function ($query) use ($search) {
					$query->where('name', 'LIKE', '%'.$search.'%')
						->orWhere('description', 'LIKE', '%'.$search.'%');
				})
				->limit($counter)
				->offset($start)
				->get();

			$total = $permisos->count();

			/**$total = Role::where(function ($query) use ($search) {
			$query->where('name', 'LIKE', '%'.$search.'%')
			->orWhere('description', 'LIKE', '%'.$search.'%');
			})->count();**/

			return $permisos = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $permisos
			];

		} else {

			$permisos = Permission::latest()
				->limit($counter)
				->offset($start)
				->get();
			$total = Permission::all()->count();
			return $permisos = [
				'itemsPerPage' => $counter,
				'total' => $total,
				'items' => $permisos
			];
		}
	}
}
