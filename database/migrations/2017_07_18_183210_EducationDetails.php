<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EducationDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('mstr_education',function(Blueprint $table){
            $table->string('education_id');
            $table->string('personal_id');
            $table->string('education_area',50);
            $table->string('education',50);
            $table->string('occupation',50);
            $table->string('income',50);
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
        Schem::dropIfExists('mstr_education');
    }
}
