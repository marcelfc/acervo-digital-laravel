<meta name="csrf-token" content="{{ csrf_token() }}" />
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>

<div class="form-group">
    <label class="col-md-4 control-label">Classificação:</label>
    <div class="col-md-4">
        <select class="form-control" name="classificacao">
            <option value="" {{ old("classificacao", !empty($row->classificacao) ? $row->classificacao : '') == '' ? 'selected' : '' }}> Selecione </option>
            <option value="ata/documento" {{ old("classificacao", !empty($row->classificacao) ? $row->classificacao : '') == 'ata/documento' ? 'selected' : '' }}> Ata/Documento </option>
            <option value="fotografias" {{ old("classificacao", !empty($row->classificacao) ? $row->classificacao : '') == 'fotografias' ? 'selected' : '' }}> Fotografias </option>
            <option value="jornais" {{ old("classificacao", !empty($row->classificacao) ? $row->classificacao : '') == 'jornais' ? 'selected' : '' }}> Jornais </option>
        </select>
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Título</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="titulo" value="{{ old('titulo' , !empty($row) ? $row->titulo : '') }}" />
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Data Publicação</label>
    <div class="col-md-4">
        <input class="form-control" type="date" name="data_publicacao" value="{{ old('data_publicacao', !empty($row) ? $row->data_publicacao : '') }}" />
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Descrição</label>
    <div class="col-md-4">
        <textarea class="form-control" name="descricao" value="{{ old('descricao', !empty($row) ? $row->descricao : '') }}" >{{ old('descricao', !empty($row) ? $row->descricao : '') }}</textarea>
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Localização Física</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="localizacao_fisica" value="{{ old('localizacao_fisica', !empty($row) ? $row->localizacao_fisica : '') }}" />
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Autor do Documento</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="autor_do_documento" value="{{ old('autor_do_documento', !empty($row) ? $row->autor_do_documento : '') }}" />
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Qualidade</label>
    <div class="col-md-4">

        <select class="form-control" name="qualidade">
            <option value="" {{ old("qualidade", !empty($row->qualidade) ? $row->qualidade : '') == '' ? 'selected' : '' }}> Selecione </option>
            <option value="ruim" {{ old("qualidade", !empty($row->qualidade) ? $row->qualidade : '') == 'ruim' ? 'selected' : '' }}> Ruim </option>
            <option value="boa" {{ old("qualidade", !empty($row->qualidade) ? $row->qualidade : '') == 'boa' ? 'selected' : '' }}> Boa </option>
            <option value="otima" {{ old("qualidade", !empty($row->qualidade) ? $row->qualidade : '') == 'otima' ? 'selected' : '' }}> Ótima </option>
        </select>

    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Tema</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="tema" value="{{ old('tema', !empty($row) ? $row->tema : '') }}" />
    </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label">Nomes</label>
    <div class="col-md-4">
        <input class="form-control" type="text" name="nomes" value="{{ old('nomes', !empty($row) ? $row->nomes : '') }}"/>
    </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-3">
        <div class="dropzone" id="dropzoneFileUpload">

            <div class="dz-default dz-message">

                <span>Arraste os arquivos até aqui.</span>
            </div>

        </div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        <button type="submit" id="submit-all" class="btn btn-primary"> Cadastrar  <i class="glyphicon glyphicon-floppy-disk"></i></button>
    </div>
</div>

