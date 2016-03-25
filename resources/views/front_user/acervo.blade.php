
@extends('front_user.app_user')
        @section('content')
            <div class="container">

                <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Acervo</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{route('home.index')}}">Home</a>
                            </li>
                            <li class="active">Acervo</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            <div class="search_acervo">
                <form class = "form-inline" action="/home/acervo/galeria">
                    <div class = "form-group">
                        <label>Palavra Chave: </label>
                        <input type="text" name="search" value="{{ old('search' , !empty($_GET) ? $_GET['search'] : '') }}" class="form-control" id="texto" size="50px">
                    </div>
                    <div class = "form-group">
                        <div class = "form-group">
                            <label>Classificação: </label>
                            <select name="classificacao" class="form-control">
                                <option value="" >Selecione...</option>
                                <option value="ata/documento" {{ old("classificacao", !empty($_GET['classificacao']) ? $_GET['classificacao'] : '') == 'ata/documento' ? 'selected' : '' }} >Ata/Documento</option>
                                <option value = "fotografias" {{ old("classificacao", !empty($_GET['classificacao']) ? $_GET['classificacao'] : '') == 'fotografias' ? 'selected' : '' }}>Fotografias</option>
                                <option value = "jornais" {{ old("classificacao", !empty($_GET['classificacao']) ? $_GET['classificacao'] : '') == 'jornais' ? 'selected' : '' }}>Jornais</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-warning"><i class="fa fa-search"></i> Filtrar</button>
                </form>
            </div>

            <div id="table_acervo">
                <table class="table table-striped table-bordered table-hover">
                    <thead>

                        <th>Classificação</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Visualização</th>

                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr>
                            <td>{{ $row->classificacao }}</td>
                            <td>{{ $row->titulo }}</td>
                            <td>{{ $row->autor_do_documento }}</td>
                            <td><a class="btn btn-info" href="{{ route('home.show', ['id' => $row->id]) }}">Ir para a Galeria <i class="fa fa-external-link"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                
            </div>

            <div class="pagination-acervo">
                <ul class="pagination">
                    @for($i = 1; $i<=$pagination; $i++)
                        <li><a href="{{url('/home/acervo/galeria?page='.$i.'&classificacao='.$_GET['classificacao'].'&search='.$_GET['search'])}}">{{$i}}</a></li>
                    @endfor
                </ul>
            </div>


@stop
