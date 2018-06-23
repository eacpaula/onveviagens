<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateViagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('viagem', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('id_tipo_pacote')->index('id_tipo_pacote');
			$table->string('titulo', 250);
			$table->decimal('valor', 10, 0);
			$table->string('descricao', 2000);
			$table->integer('diaria');
			$table->string('local', 2000);
			$table->string('dormitorio', 150);
			$table->dateTime('data_inicial');
			$table->dateTime('data_final');
			$table->integer('id_tipo_hospedagem');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('viagem');
	}

}
