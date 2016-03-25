@extends('app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading">{{ $title }}</div>

        <div class="panel-body">
    @if(empty($rows[0]))
        <h3 align="center" class="alert alert-danger">Ops! Nenhum dado foi encontrado:( </h3>
    @else
       @include('admin.acervo.partials.search')

            <div class="table-responsive">
                <table width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                        <th width="15%">Titulo</th>
                        <th width="60%">Descrição</th>
                        <th width="25%" class="text-center">Ações</th>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr>
                            <td width="15%">{{ $row->nome }}</td>
                            <td width="70%">{{ $row->descricao }}</td>
                            <td width="15%" class="actions">
                                <div class="pull-center">
                                    @include('admin.acervo.partials.form-delete', [ 'id' => $row->id ])
                                    <a class="btn btn-default pull-right" href="{{ route('acervo.edit', ['id' => $row->id]) }}"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a class="btn btn-info pull-right" href="{{ route('acervo.show', ['id' => $row->id]) }}"><i class="glyphicon glyphicon-eye-open"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!! $rows->render() !!}
            </div>
            @endif
        </div>
    </div>



@stop