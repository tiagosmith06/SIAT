<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
{
    Schema::create('municipios', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->string('departamento');
        $table->float('area'); // Agregar la columna para el área
        $table->timestamps();
    });
}
};
