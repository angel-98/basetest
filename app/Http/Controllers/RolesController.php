<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolesRequest;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{

	/**
	 * Middleware user validation
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		$roles = Role::all();
        return View('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$roles = Role::all();
		return View('roles.index', compact('roles'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(RolesRequest $request)
    {
		$roles = Role::create($request->all());
		return $roles->latest()->get();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
		$roles = Role::findBySlug($id);
		return View('roles.edit', compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
		$roles = Role::all();
		return View('roles.index', compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(RolesRequest $request, $id)
    {
        $roles = Role::findOrFail($id);
		$roles->update($request->all());

		return redirect('roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $roles = Role::findOrFail($id)->delete();
		return redirect('roles')->with('flash_message', 'Rol eliminado');
    }
}
