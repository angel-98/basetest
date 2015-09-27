<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsersRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

		$rules = [
			'email' 	=> 'required|email|unique:users,id,:id',
			'name'		=> 'required||max:255',
			'password' 	=> 'confirmed|min:6',
			'github'	=> 'url',
			'facebook'	=> 'url',
			'twitter'	=> 'url',
			'phone'		=> 'string',
			'mobile'	=> 'string',
			'avatar'	=> 'image'
		];

		return $rules;
    }
}
