<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoHospedagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_hospedagem', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('titulo');
			$table->boolean('disponivel');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipo_hospedagem');
	}

}
