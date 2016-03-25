<?php namespace App\Http\Controllers;

use App\Acervo;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use Response;

class AcervoController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
		return view('admin.acervo.index')->with('rows',Acervo::paginate(10))
			->with('title','Acervos');

	}

	public function create()
	{
		return view('admin.acervo.create')
			->with('title', 'Adicionar Acervo');
	}

	public function store(Requests\AcervoRequest $request)
	{
		Acervo::create($request->all());
		Flash::success('Acervo criado com sucesso!');
		return redirect()->action('AcervoController@index');

	}

	public function show($id)
	{
		return Redirect::route('imagem.index', array('acervo' => $id));
	}

	public function edit($id)
	{
		return view('admin.acervo.edit')
			->with('id', $id)
			->with('title', 'Editar Acervo')
			->with('row', Acervo::find($id));
	}

	public function update(Requests\AcervoRequest $request, $id)
	{
		$row = Acervo::find($id);
		$row->update($request->all());

		Flash::success('Contato editado com sucesso!');

		return redirect()->route('acervo.index');
	}



	public function destroy($id)
	{
		Acervo::find($id)->delete();

		Flash::success('Registro excluído com sucesso!');

		return redirect()->action('AcervoController@index');
	}





}
