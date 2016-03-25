@extends('app')
@section('content')

    @include('user.partials.errors')

    <div class="panel panel-default">
        <div class="panel-heading">{{ $title }}</div>
        <div class="panel-body">
            <form method="post" action="{{ route('user.store') }}" class="form-horizontal" enctype="multipart/form-data">
                @include('user.partials.form')
            </form>
        </div>
    </div>

@stop