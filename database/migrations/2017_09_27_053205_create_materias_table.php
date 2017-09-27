<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{

    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_materia');
            $table->integer('semestre');
            $table->string('carrera');
            $table->float('p1')->nullable();
            $table->float('p2')->nullable();
            $table->float('p3')->nullable();
            $table->float('ordi')->nullable();
            $table->float('extra')->nullable();
            $table->float('regu')->nullable();
            $table->float('final')->nullable();
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
        Schema::dropIfExists('materias');
    }
}
