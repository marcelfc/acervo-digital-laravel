@extends('app')
@section('content')

    @include('admin.imagens.partials.errors')

    <div class="panel panel-default">
        <div class="panel-heading">{{ $title }}</div>
        <div class="panel-body">

            <form method="post" action="{{ route('imagem.store') }}" enctype="multipart/form-data">

                <input type="file" name="files" id="filer_input2" multiple="multiple">
                <input type="submit" value="Submit">

            </form>

        </div>
    </div>




@stop