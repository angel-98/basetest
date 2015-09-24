<?php

namespace App\Http\Controllers;

use App\Permission;
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
		$this->middleware('active');
		$this->middleware('UserPermAccess');
	}

	/**
	 * Request roles list index, search and pagination improved
	 * /permisos/query
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

	/**
	 * Listado de permisos
	 * /permisos/query/permisos-list
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function getPermisosList()
	{

		$query = $_SERVER['QUERY_STRING'];
		$vars = [];
		foreach (explode('&', $query) as $pair) {
			list($key, $value) = explode('=', $pair);
			if('' == trim($value)){
				continue;
			}
			$vars[$key] = urldecode($value);
		}

		$name = $vars['q'];

		$permisos = Permission::select('id', 'name as text')
			->where('name', 'LIKE', '%'. $name .'%')->get();
		return [
			'results' => $permisos
		];
	}

	/**
	 * Listado de permisos relacionados a rol
	 * /permisos/query/permisos-relacionados
	 * @param $id
	 * @return array
	 */
	public function getPermisosRelacionados($id)
	{
		$query = $_SERVER['QUERY_STRING'];
		$vars = [];
		foreach (explode('&', $query) as $pair) {
			list($key, $value) = explode('=', $pair);
			if('' == trim($value)){
				continue;
			}
			$vars[$key] = urldecode($value);
		}

		$name = $vars['q'];

		$permisos = Permission::select('id', 'name as text')
			->where('text', 'LIKE', '%'. $name .'%');
		return [
			'results' => $permisos
		];
	}
}

