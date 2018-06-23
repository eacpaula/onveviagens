<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToViagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('viagem', function(Blueprint $table)
		{
			$table->foreign('id_tipo_pacote', 'viagem_ibfk_1')->references('id')->on('tipo_pacote')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('viagem', function(Blueprint $table)
		{
			$table->dropForeign('viagem_ibfk_1');
		});
	}

}
