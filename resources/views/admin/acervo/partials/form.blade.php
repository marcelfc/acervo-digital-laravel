<meta name="csrf-token" content="{{ csrf_token() }}" />
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>


<div class="form-group">
    <label class="col-md-4 control-label">Título</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="nome" value="{{ old('nome' , !empty($row) ? $row->nome : '') }}" />
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Descrição</label>
    <div class="col-md-4">
        <textarea rows="4" cols="50" class="form-control" name="descricao" value="{{ old('descricao', !empty($row) ? $row->descricao : '') }}" >{{ old('descricao', !empty($row) ? $row->descricao : '') }}</textarea>
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        <button type="submit" class="btn btn-primary"> Cadastrar  <i class="glyphicon glyphicon-floppy-disk"></i></button>
    </div>
</div>

