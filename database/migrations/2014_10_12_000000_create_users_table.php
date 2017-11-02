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
<<<<<<< HEAD
           $table->increments('id');
           $table->string('fullname');
           $table->string('username');
           $table->string('email')->unique();
           $table->string('phone');
           $table->string('password');
           $table->string('position');
           $table->text('address');
           $table->rememberToken();
           $table->timestamps();
=======
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
>>>>>>> 1e7b2651de78a175a21a2a2ba25fc95e988905ee
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
