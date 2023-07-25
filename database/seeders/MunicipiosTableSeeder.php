<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function run()
{
    'siat_pc'::table('municipios')->insert([
        ['nombre' => 'Quibdó', 'departamento' => 'Chocó', 'area' => 456.78],
        ['nombre' => 'Nuquí', 'departamento' => 'Chocó', 'area' => 789.23],
        ['nombre' => 'Riosucio', 'departamento' => 'Chocó', 'area' => 345.91],
        // Agregar más municipios con sus respectivas áreas
    ]);
}
};

