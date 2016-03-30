<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Imagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Redirect;

class ImagemController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$rows = Imagem::where('acervo_id','=',$_GET['acervo'])->paginate(10);
		return view('admin.imagens.index')->with('rows',$rows)
			->with('title','Imagens do Acervo');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('admin.imagens.create')
			->with('title', 'Adicionar Imagem');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\ImagemRequest $request)
	{

		$data = $request->all();

		foreach($data['nome_arquivo'] as $file)
		{
			$row = $data;
			$row['nome_arquivo'] = $file;
			$row['acervo_id'] = $data['acervo'];
			Imagem::create($row);
		}

		Flash::success('Imagens adicionadas sucesso!');
		return Redirect::route('imagem.index', array('acervo' => $data['acervo']));


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		die('dewes');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
