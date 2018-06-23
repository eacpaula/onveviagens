<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsersViagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_viagem', function(Blueprint $table)
		{
			$table->foreign('id_viagem', 'users_viagem_ibfk_1')->references('id')->on('viagem')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_viagem', function(Blueprint $table)
		{
			$table->dropForeign('users_viagem_ibfk_1');
		});
	}

}
