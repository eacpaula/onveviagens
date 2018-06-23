<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipoPacoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipo_pacote', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('titulo', 250);
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
		Schema::drop('tipo_pacote');
	}

}
