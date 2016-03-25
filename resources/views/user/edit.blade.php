
@extends('app')
@section('content')

    @include('user.partials.errors')

    <div class="panel panel-default">
        <div class="panel-heading">{{ $title }}</div>
        <div class="panel-body">
            <form method="post" action="{{ route('user.update', [ 'id' => $row->id ]) }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put"/>
                <input type="hidden" name="id" value="{{ $row->id }}"/>
                @include('user.partials.form', compact('row'))
            </form>
        </div>
    </div>

@stop