<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddressDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mstr_address',function(Blueprint $table){
            $table->string('address_id');
            $table->string('personal_id');
            $table->string('address',50);
            $table->string('city',50);
            $table->string('state',50);
            $table->string('country',50);
            $table->string('email');
            $table->string('adhar',50);
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
        Schema::dropIfExists('mstr_address');
    }
}
