@extends('app')
@section('content')
    <div class="panel panel-default">

        <div class="panel-heading">{{ $title }}</div>

        <div class="panel-body">


            @if(empty($rows))
                <h2>Não há usuários cadastrados</h2>
            @else
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                    <th>Nome</th>
                    <th>Email</th>
                    <th class="text-center">Ações</th>
                    </thead>
                    <tbody>
                    @foreach($rows as $row)
                        <tr>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td class="actions">
                                <div class="pull-right">
                                    <a class="btn btn-danger pull-right" onclick="return confirm('Deseja realmente excluir?')" href="/user/delete/{{$row->id}}" ><i class="glyphicon glyphicon-trash"></i></a>
                                    <a class="btn btn-default pull-right" href="{{ route('user.edit', ['id' => $row->id]) }}"><i class="glyphicon glyphicon-pencil"></i></a>
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