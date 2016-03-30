@extends('app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading"><b>{{ $title }}</b></div>

        <div class="panel-body">

            <div style="margin-bottom: 1%" align="center">
                <a class="btn btn-warning btn-lg" href="{{route('imagem.create',['acervo' => $_GET['acervo']])}}">Adicionar Imagem ao acervo</a>
            </div>


            @if(empty($rows[0]))
                <h3 align="center" class="alert alert-danger">Ops! Nenhum dado foi encontrado:( </h3>
            @else

                {{--@include('admin.imagens.partials.search')--}}

                <div class="table-responsive">
                    <table width="85%" class="table table-striped table-bordered table-hover">
                        <thead>
                            <th width="10%">#</th>
                            <th width="30%">Titulo</th>
                            <th width="15%">Autor</th>
                            <th width="15%">Data da Publicação</th>

                            <th width="15%" class="text-center">Ações</th>
                        </thead>
                        <tbody>
                        @foreach($rows as $row)
                            <tr>
                                <td width="10%"><img src="{{asset('uploads/'). '/'.$_GET['acervo'] .'/' . $row->nome_arquivo}}" width="50px" height="50px"></td>
                                <td width="30%">{{ $row->titulo }}</td>
                                <td width="15%">{{ $row->autor_do_documento }}</td>
                                <td width="15%"> {{ $row->data_publicacao }}</td>

                                <td width="15%" class="actions">
                                    <div class="pull-center">
                                        @include('admin.imagens.partials.form-delete', [ 'id' => $row->id ])
                                        <a class="btn btn-default pull-right" href="{{ route('acervo.edit', ['id' => $row->id]) }}"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a class="btn btn-info pull-right" href="{{ route('acervo.show', ['id' => $row->id]) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>



@stop