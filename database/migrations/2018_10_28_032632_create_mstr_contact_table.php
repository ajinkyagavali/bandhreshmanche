<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMstrContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mstr_contact', function(Blueprint $table)
		{
			$table->string('contactid', 50);
			$table->string('fname', 50);
			$table->string('lname', 50);
			$table->string('email', 50);
			$table->string('phone', 50);
			$table->string('companyname', 50);
			$table->string('jobtitle', 50);
			$table->string('canhelp', 50);
			$table->string('createdate', 50);
			$table->string('modifieddate', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mstr_contact');
	}

}
