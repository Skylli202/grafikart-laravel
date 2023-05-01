<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRealEstateRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		// TODO: Update authorize() once authentication is ready.
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, ValidationRule|array|string>
	 */
	public function rules(): array
	{
		return [
			'title'       => 'required|min:8',
			'surface'     => 'required|min:0',
			'price'       => 'required|min:0',
			'description' => 'required',
			'rooms'       => 'required|numeric|min:1',
			'bedrooms'    => 'required|numeric|min:0',
			'floor'       => 'required|numeric|min:0',
			'address'     => 'required|min:0',
			'city'        => 'required|min:0',
			'zipcode'     => 'required|min:0',
		];
	}
}
