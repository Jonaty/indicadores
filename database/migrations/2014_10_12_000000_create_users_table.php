<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
 
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_user');
            $table->string('no_cuenta')->unique();
            $table->string('password');
            $table->integer('semestre');
            $table->string('carrera');
            $table->string('facultad');
            $table->string('campus');
            $table->boolean('activo')->default(0);
            $table->integer('rol');
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
