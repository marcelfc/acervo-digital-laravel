<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imagems', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('acervo_id')->unsigned();
			$table->string('classificacao');
			$table->string('titulo');
			$table->date('data_publicacao');
			$table->text('descricao');
			$table->string('localizacao_fisica');
			$table->string('autor_do_documento');
			$table->string('qualidade');
			$table->string('tema');
			$table->string('nomes');
			$table->string('nome_arquivo');

			$table->timestamps();

			$table->foreign('acervo_id')
				->references('id')->on('acervos')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('imagems');
	}

}
