<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth',['except' => ['landing', 'unauthorize']]);
		$this->middleware('guest',['only' => ['landing']]);
		$this->middleware('active',['except' => ['landing', 'unauthorize']]);

	}

    public function home()
	{

		return View('dash.home');
	}

	public function landing()
	{
		return View('dash.landing');
	}

	public  function unauthorize()
	{
		if(Auth::user()->estado == 1){
			return redirect('/');
		}
		return View('dash.unauthorize');
	}
}
