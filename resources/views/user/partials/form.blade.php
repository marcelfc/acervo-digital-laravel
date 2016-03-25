<input type="hidden" name="_token" value="{{ csrf_token() }}"/>


<div class="form-group">
    <label class="col-md-4 control-label">Nome</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="name" value="{{ old('name' , !empty($row) ? $row->name : '') }}" />
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Email</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="email" value="{{ old('email', !empty($row) ? $row->email : '') }}" />
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Senha</label>
    <div class="col-md-4">
        <input class="form-control" type="password" name="password" value="{{ old('password', !empty($row) ? $row->password : '') }}" />
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Confirmar Senha</label>
    <div class="col-md-4">
        <input class="form-control" type="password" name="password_confirm" value="{{ old('password', !empty($row) ? $row->password : '') }}" />
    </div>
</div>
<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        <button type="submit" class="btn btn-primary"> Cadastrar  <i class="glyphicon glyphicon-floppy-disk"></i></button>
    </div>
</div>