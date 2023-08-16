<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestionesTable extends Migration
{
    public function up()
    {
        Schema::create('gestiones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->date('fecha');
            $table->text('descripcion');
            $table->string('enlace_descarga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gestiones');
    }
}

