<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Acervo extends Model {

    protected $table = 'acervos';

    protected $fillable =
        [   'nome',
            'descricao'];

    public function imagems(){

        return $this->hasMany('App\Imagem', 'foreign_key', 'acervo_id');
    }


}
