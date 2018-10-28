<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('reg_id', 50)->nullable();
			$table->string('profileby', 500)->nullable();
			$table->string('name');
			$table->string('mname', 100)->nullable();
			$table->string('lname', 100)->nullable();
			$table->string('mobileno', 100)->nullable();
			$table->string('gender', 100)->nullable();
			$table->string('marital_status', 100)->nullable();
			$table->string('subcaste', 100)->nullable();
			$table->string('mother_tongue', 100)->nullable();
			$table->string('country_living', 100)->nullable();
			$table->string('reg_date', 100)->nullable();
			$table->string('adharcardno', 50)->nullable();
			$table->string('email');
			$table->string('password');
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->integer('isactive')->nullable();
			$table->integer('isdeleted')->nullable();
			$table->integer('ispayment')->nullable();
			$table->integer('isAccepted')->nullable();
			$table->string('postgraduation', 100)->nullable();
			$table->string('graduation', 100)->nullable();
			$table->string('current_employer', 100)->nullable();
			$table->string('occupation', 100)->nullable();
			$table->string('employerin', 100)->nullable();
			$table->string('income', 100)->nullable();
			$table->string('father', 100)->nullable();
			$table->string('mother', 100)->nullable();
			$table->string('sister', 100)->nullable();
			$table->string('brother', 100)->nullable();
			$table->string('fatheroccupation', 100)->nullable();
			$table->string('motheroccupation', 100)->nullable();
			$table->string('parentcontact', 100)->nullable();
			$table->string('familyvalue', 100)->nullable();
			$table->string('familytype', 100)->nullable();
			$table->string('familystatus', 100)->nullable();
			$table->string('aboutmyfamily', 100)->nullable();
			$table->string('rashi', 50)->nullable();
			$table->string('birth_place', 50)->nullable();
			$table->string('birth_date', 100)->nullable();
			$table->string('birth_time', 50)->nullable();
			$table->string('hobbies', 50)->nullable();
			$table->string('photo', 200)->nullable();
			$table->string('lastcollegename', 100)->nullable();
			$table->string('terms', 50)->nullable();
			$table->string('expectation', 200)->nullable();
			$table->string('description', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
