<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name');
            $table->String('last_name');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('phone_number');
            $table->string('marital_status');
            $table->date('date_of_birth');
            $table->string('health_challenge');
            $table->string('next_of_kin_first_name');
            $table->string('next_of_kin_last_name');
            $table->string('next_of_kin_address');
            $table->string('next_of_kin_phone');
            $table->string('courses');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
