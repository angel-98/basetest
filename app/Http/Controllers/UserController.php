<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Profile;
use App\User;
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
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		return View('usuarios.index');
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
    public function store(Request $request)
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
    public function edit($slug)
    {
		$usuario = User::findBySlug($slug);
		return View('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
		// seleccionar la informacion de usuario
		$user = User::findOrFail($id);

		// -- agregar logica de salvado de password
		if($request->input('password') != null){
			$iuser = ['password' => $request->input('password')];
		}

		$iuser = [
			'name' => $request->input('name'),
			'email' => $request->input('email')
		];

		// Seleccionar la informacion de perfil
		$profile = Profile::where('user_id', '=', $id);

		// -- agregar logica de salvado de avatar
		if(isset($request['avatar'])){

			$file = $request->file('avatar');
			$newfilename = $request->file('avatar')->getClientOriginalName();
			$file->move('images/users', $newfilename);

			// open an image file
			//$img = Image::make('images/users', $newfilename);

			// now you are able to resize the instance
			//$img->resize(320, 240);

			// finally we save the image as a new file
			//$img->save('images/users', $newfilename);


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
        //
    }
}
