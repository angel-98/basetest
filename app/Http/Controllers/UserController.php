<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Profile;
use App\User;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
	/**
	 * Middleware user validation
	 */
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['show']]);
		$this->middleware('active', ['except' => ['show']]);
		$this->middleware('profilePerms', ['only' => ['edit', 'update']]);
		$this->middleware('UserPermAccess', ['except' => ['edit', 'update', 'show']]);
		$this->middleware('AvoidDeleteUser', ['only' => ['destroy']]);

	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		$roles = Role::all();
		return View('usuarios.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(UsersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
		$usuario = User::findBySlug($slug);

		if(is_null($usuario->profile)){
			$profiles = Profile::create([
				'user_id'	=> $usuario->id,
				'avatar'	=> 'avatar-001.jpg'
			]);
			$profiles->save();
			return redirect('usuarios')->with('flash_message', 'Perfil creado, intente ingresar de nuevo');
		}

		return View('usuarios.show', compact('usuario'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
		$usuario = User::findOrFail($id);
		return View('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UsersRequest $request, $id)
    {
		// seleccionar la informacion de usuario
		$user = User::findOrFail($id);

		// -- agregar logica de salvado de password
		if($request->input('password') != null){
			$iuser = [
				'password' => bcrypt($request->input('password')),
				'name' => $request->input('name'),
				'email' => $request->input('email')
			];
		} else {
			$iuser = [
				'name' => $request->input('name'),
				'email' => $request->input('email')
			];
		}

		// Seleccionar la informacion de perfil
		$profile = Profile::where('user_id', '=', $id);

		// -- agregar logica de salvado de avatar
		if(isset($request['avatar'])){

			$file = $request->file('avatar');
			$newfilename = $request->file('avatar')->getClientOriginalName();
			$file->move('images/users', $newfilename);

			$iprofile = [
				'avatar'	=> $newfilename,
				'label'		=> $request->input('label'),
				'resume'	=> $request->input('resume'),
				'github'	=> $request->input('github'),
				'facebook'	=> $request->input('facebook'),
				'twitter'	=> $request->input('twitter'),
				'phone'		=> $request->input('phone'),
				'mobile'	=> $request->input('mobile')
			];

		} else {

			$iprofile = [
				'label'		=> $request->input('label'),
				'resume'	=> $request->input('resume'),
				'github'	=> $request->input('github'),
				'facebook'	=> $request->input('facebook'),
				'twitter'	=> $request->input('twitter'),
				'phone'		=> $request->input('phone'),
				'mobile'	=> $request->input('mobile')
			];

		}

		$user->update($iuser);
		$profile->update($iprofile);

		return redirect('usuarios/' . $user->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
		$user = User::findOrFail($id);
		$user->delete();
		return 'done';
    }
}
