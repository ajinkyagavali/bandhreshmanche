<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HoroscopeDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('mstr_horoscope',function(Blueprint $table){
            $table->string('horoscope_id');
            $table->string('personal_id');
            $table->string('rashi',50);
            $table->string('birth_place',50);
            $table->string('birth_time',50);
            $table->string('mangal',50);
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
         Schema::dropIfExists('mstr_horoscope');
    }
}
