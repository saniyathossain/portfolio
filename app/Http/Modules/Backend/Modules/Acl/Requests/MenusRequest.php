<?php

namespace App\Http\Modules\Acl\Requests;

use App\Http\Base\Requests\BaseRequest;

class MenusRequest extends BaseRequest
{
	/**
	* Determine if the user is authorized to make this request.
	*
	* @return bool
	*/
	public function authorize(): bool
	{
		return true;
	}

	/**
	* Get the validation rules that apply to the request.
	*
	* @return array
	*/
	public function rules(): array
	{
		return [
			'name'		=> 'required',
			'status'	=> 'required'
		];
	}
}