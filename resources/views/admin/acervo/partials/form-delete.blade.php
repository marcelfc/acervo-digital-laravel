<form id="form-delete" class="pull-right" method="post" action="{{ route('acervo.destroy', compact('id')) }}">
    <input type="hidden" name="_method" value="get" />
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

    <button type="button" class="btn btn-danger modal-delete"><i class="glyphicon glyphicon-trash"></i></button>
</form>