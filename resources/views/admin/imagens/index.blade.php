@extends('app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">{{ $title }}</div>

        <div class="panel-body">

            @include('admin.acervo.partials.search')

            @if(empty($rows))
                <h2>Não há documentos cadastrados</h2>
            @else
                <table class="table table-striped table-bordered table-hover">
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
                                <div class="pull-right">
                                    <a class="btn btn-danger pull-right" onclick="return confirm('Deseja realmente excluir?')" href="/acervo/delete/{{$row->id}}"><i class="glyphicon glyphicon-trash"></i></a>
                                    <a class="btn btn-default pull-right" href="{{ route('acervo.edit', ['id' => $row->id]) }}"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a class="btn btn-info pull-right" href="{{ route('acervo.show', ['id' => $row->id]) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>



@stop