<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEducationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Educations', function(Blueprint $table)
		{
			$table->increments('education_id');
			$table->string('user_id');
			$table->string('postgraduation', 100)->nullable();
			$table->string('graduation', 100)->nullable();
			$table->string('current_employer', 100)->nullable();
			$table->string('occupation', 100)->nullable();
			$table->timestamps();
			$table->integer('isactive')->nullable();
			$table->integer('isdelete')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Educations');
	}

}
