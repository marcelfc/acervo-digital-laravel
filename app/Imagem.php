<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model {

    protected $table = 'imagems';

    protected $fillable =
        [   'acervo_id',
            'classificacao',
            'titulo',
            'data_publicacao',
            'descricao',
            'localizacao_fisica',
            'autor_do_documento',
            'qualidade',
            'tema',
            'nomes',
            'nome_arquivo'];

    public function acervo(){

        return $this->belongsTo('App\Acervo','foreign_key', 'id');
    }

}
