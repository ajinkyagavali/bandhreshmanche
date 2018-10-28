<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_log', function(Blueprint $table)
		{
			$table->string('user_log_id');
			$table->string('request_id');
			$table->string('accepted_id');
			$table->integer('flag')->nullable();
			$table->integer('is_active')->default(1);
			$table->integer('is_deleted')->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_log');
	}

}
