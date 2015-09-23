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

		$create = [
			'email' => 'required|unique:users'
		];

		$edit = [
			'email' => 'required'
		];

		if($this->method == 'PUT' || $this->method == 'PATH'){
			return $edit;
		} else {
			return $create;
		}
    }
}
