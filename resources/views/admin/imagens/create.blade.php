@extends('app')
@section('content')

    @include('admin.imagens.partials.errors')

    <div class="panel panel-default">
        <div class="panel-heading">{{ $title }}</div>
        <div class="panel-body">

            <form  class="dropzone form-horizontal" method="post" action="{{ route('imagem.store') }}" enctype="multipart/form-data">
                @include('admin.imagens.partials.form')

            </form>


        </div>
    </div>

@stop