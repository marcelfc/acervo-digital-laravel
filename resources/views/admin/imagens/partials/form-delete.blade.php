<form id="form-delete-imagem" class="pull-right" method="post" action="{{ route('imagem.destroy', compact('id')) }}">
    <input type="hidden" name="_method" value="DELETE" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <button type="button" class="btn btn-danger modal-delete"><i class="glyphicon glyphicon-trash"></i></button>
</form>