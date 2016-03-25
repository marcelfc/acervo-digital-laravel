@extends('app')
@section('content')

    @include('admin.acervo.partials.errors')

    <div class="panel panel-default">
        <div class="panel-heading">{{ $title }}</div>
        <div class="panel-body">

            <form id= "#form_acervo" method="post" action="{{ route('acervo.store') }}" class="form-horizontal" enctype="multipart/form-data">
                @include('admin.acervo.partials.form')

            </form>


        </div>
    </div>



@stop