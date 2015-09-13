<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionsRequest;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View('permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PermissionsRequest $request)
    {
		$permisos = Permission::create($request->all());
		return $permisos->latest()->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
		$permiso = Permission::findOrFail($id);
		return View('permisos.index', compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(PermissionsRequest $request, $id)
    {
		$permisos = Permission::findOrFail($id);
		$permisos->update($request->all());
		return 'done';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
		$permisos = Permission::findOrFail($id)->delete();
		return 'done';
    }
}
