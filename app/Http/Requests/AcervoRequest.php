<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AcervoRequest extends Request {

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

		return [

			'nome' => 'required',
			'descricao' => 'required',

		];
	}

	public function messages(){
		return [
			'nome.required' => 'O campo Título deve ser preenchido.',
			'descricao.required' => 'O campo Descrição deve ser preenchido.',

		];
	}

}
