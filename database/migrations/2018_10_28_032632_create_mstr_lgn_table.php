<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMstrLgnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mstr_lgn', function(Blueprint $table)
		{
			$table->string('lgnid', 50)->primary();
			$table->string('name', 50);
			$table->string('pwd', 50);
			$table->string('mail', 50);
			$table->integer('craetedate');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mstr_lgn');
	}

}
