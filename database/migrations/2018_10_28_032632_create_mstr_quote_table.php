<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMstrQuoteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mstr_quote', function(Blueprint $table)
		{
			$table->string('quoteid', 50);
			$table->string('fname', 50);
			$table->string('lname', 50);
			$table->string('companyname', 50);
			$table->string('email', 50);
			$table->string('phone', 50);
			$table->string('message', 160);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mstr_quote');
	}

}
