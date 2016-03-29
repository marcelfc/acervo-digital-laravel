<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ImagemRequest extends Request {

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

		switch($this->method())
		{
			case 'GET':
			case 'DELETE':
			{
				return [];
			}
			case 'POST':
			{
				return [

					'classificacao' => 'required',
					'titulo' => 'required',
					'data_publicacao' => 'required',
					'descricao' => 'required',
					'localizacao_fisica' => 'required',
					'autor_do_documento' => 'required',
					'qualidade' => 'required',
					'tema' => 'required',
					'nomes' => 'required',
					'files' => 'required',

				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [

					'classificacao' => 'required',
					'titulo' => 'required',
					'data_publicacao' => 'required',
					'descricao' => 'required',
					'localizacao_fisica' => 'required',
					'autor_do_documento' => 'required',
					'qualidade' => 'required',
					'tema' => 'required',
					'nomes' => 'required',

				];
			}
			default:break;
		}

	}

	public function messages(){
		return [

			'classificacao.required' => 'O campo Classificação deve ser preenchido.',
			'titulo.required' => 'O campo Título deve ser preenchido.',
			'data_publicacao.required' => 'A Data da Publicação deve ser preenchida.',
			'descricao.required' => 'A Descrição deve ser preenchida.',
			'localizacao_fisica.required' => 'A Localização deve ser preenchida.',
			'autor_do_documento.required' => 'O campo Autor do Documento  deve ser preenchido.',
			'qualidade.required' => 'O campo Qualidade deve ser preenchido.',
			'tema.required' => 'O campo Tema deve ser preenchido.',
			'nomes.required' => 'O campo Nomes deve ser preenchido.',
			'files.required' => 'Por favor, faça o upload de uma imagem.',

		];
	}

}
