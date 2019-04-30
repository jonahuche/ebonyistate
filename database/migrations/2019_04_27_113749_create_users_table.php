<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('email');
            $table->date('date_of_birth')->nullable();
            $table->string('marital_status');
            $table->string('gender');
            $table->string('residential_address');
            $table->string('phone_no');
            $table->string('village');
            $table->string('autonomous_comm');
            $table->string('photo');
            $table->string('state_of_origin');
            $table->string('category')->nullable();
            $table->string('lga');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
