<?php namespace App\Http\Controllers;

use App\Acervo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	private $number_for_page = 20;

	public function index()
	{
		$rows = Acervo::all()->sortByDesc('id')->take(6);
		foreach($rows as $row)
		{
			$files = File::allFiles('uploads/' .$row->nome_arquivo);
			$data[$row->id]['files'] = $files[0]->getPathName();
			$data[$row->id]['legendas'] = $row->titulo;
			$data[$row->id]['id'] = $row->id;
		}


		return view('front_user.index')->with('data',$data);
	}


	public function show($id)
	{
		$row = Acervo::find($id);
		$path = 'uploads/' . $row['nome_arquivo'];
		$files = File::allFiles($path);
		return view('galeria.user_galeria')->with('files',$files)->with('path',"/".$path)->with('row',$row);

	}

	public function acervo(){

		if(empty($_GET['page']))
		{
			$_GET['page'] = 1;
		}
		if(empty($_GET['classificacao']))
		{
			$_GET['classificacao'] = '';
		}
		if(empty($_GET['search']))
		{
			$_GET['search'] = '';
		}


		if(!empty($_GET['classificacao']))
		{
			if(!empty($_GET['search']))
			{
				$rows = Acervo::where('titulo','like','%'.$_GET['search'].'%')
					->where('classificacao','=',$_GET['classificacao'])
					->orwhere('descricao','like','%'.$_GET['search'].'%')
					->orwhere('autor_do_documento','like','%'.$_GET['search'].'%')
					->orwhere('tema','like','%'.$_GET['search'].'%')
					->orwhere('nomes','like','%'.$_GET['search'].'%')
					->get()->forPage($_GET['page'],$this->number_for_page);

				$pagination = Acervo::where('titulo','like','%'.$_GET['search'].'%')
					->where('classificacao','=',$_GET['classificacao'])
					->orwhere('descricao','like','%'.$_GET['search'].'%')
					->orwhere('autor_do_documento','like','%'.$_GET['search'].'%')
					->orwhere('tema','like','%'.$_GET['search'].'%')
					->orwhere('nomes','like','%'.$_GET['search'].'%')
					->count();
			}
			else
			{
				$rows = Acervo::where('classificacao','=',$_GET['classificacao'])->forPage($_GET['page'],$this->number_for_page)->get();
				$pagination = Acervo::where('classificacao','=',$_GET['classificacao'])->count();
			}

		}
		else
		{
			if(!empty($_GET['search']))
			{

				$rows = Acervo::where('titulo','like','%'.$_GET['search'].'%')
					->orwhere('descricao','like','%'.$_GET['search'].'%')
					->orwhere('autor_do_documento','like','%'.$_GET['search'].'%')
					->orwhere('tema','like','%'.$_GET['search'].'%')
					->orwhere('nomes','like','%'.$_GET['search'].'%')->get()->forPage($_GET['page'],$this->number_for_page);

				$pagination = Acervo::where('titulo','like','%'.$_GET['search'].'%')
					->orwhere('descricao','like','%'.$_GET['search'].'%')
					->orwhere('autor_do_documento','like','%'.$_GET['search'].'%')
					->orwhere('tema','like','%'.$_GET['search'].'%')
					->orwhere('nomes','like','%'.$_GET['search'].'%')->count();
			}
			else
			{
				$pagination = Acervo::all()->count();
				$rows = Acervo::all()->sortByDesc('id')->forPage($_GET['page'],$this->number_for_page);
			}
		}

		return view('front_user/acervo')->with('rows',$rows)->with('pagination',abs($pagination/$this->number_for_page));
	}

	public function contato(){
		return view('front_user.contact');
	}

}
