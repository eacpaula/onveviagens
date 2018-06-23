<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersViagemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_viagem', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_users');
			$table->integer('id_viagem')->index('id_viagem');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_viagem');
	}

}
