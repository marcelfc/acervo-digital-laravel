@extends('app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">{{ $title }}</div>

        <div class="panel-body">

            <div align="center">
                <a class="btn btn-warning btn-lg" href="{{route('imagem.create')}}">Adicionar Imagem ao acervo</a>
            </div>

            @if(empty($rows[0]))
                <h3 align="center" class="alert alert-danger">Ops! Nenhum dado foi encontrado:( </h3>
            @else

                @include('admin.imagens.partials.search')

                <div class="table-responsive">
                    <table width="100%" class="table table-striped table-bordered table-hover">
                        <thead>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Data da Publicação</th>
                        <th>Classificação</th>
                        <th class="text-center">Ações</th>
                        </thead>
                        <tbody>
                        @foreach($rows as $row)
                            <tr>
                                <td>{{ $row->titulo }}</td>
                                <td>{{ $row->autor_do_documento }}</td>
                                <td>{{ $row->data_publicacao }}</td>
                                <td>{{ $row->classificacao }}</td>
                                <td class="actions">
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