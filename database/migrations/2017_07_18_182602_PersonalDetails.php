<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonalDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mstr_personal', function (Blueprint $table) {
             $table->string('personal_id');
             $table->string('login_id',50);
             $table->string('fname',50);
             $table->string('mname',50);
             $table->string('lname',50);
             $table->string('dob',50);
             $table->string('gender',50);
             $table->string('height',50);
             $table->string('complexion',50);
             $table->string('subcast',50);
             $table->string('weight',50);
             $table->integer('is_active')->default(1);
            $table->integer('is_deleted')->default(0);
            $table->timestamps();
        });
       /* Schema::table('mstr_personal',function(Blueprint $table){
              $table->string('gender',50);
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
          Schema::dropIfExists('mstr_personal');
    }
}
