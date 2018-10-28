<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMstrRegTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mstr_reg', function(Blueprint $table)
		{
			$table->string('reg_id', 50);
			$table->string('username', 50);
			$table->string('fname', 50);
			$table->string('lname', 50);
			$table->string('email', 50);
			$table->string('phone', 50);
			$table->string('password', 50);
			$table->string('re_password', 50);
			$table->string('comp_name', 50);
			$table->string('address', 50);
			$table->string('city', 50);
			$table->string('state', 50);
			$table->string('postalcode', 50);
			$table->string('website', 50);
			$table->string('createdate', 50);
			$table->string('modifieddate', 50);
			$table->integer('isactive');
			$table->integer('isdeleted');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mstr_reg');
	}

}
