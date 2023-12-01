<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tarifas', function (Blueprint $table) {
            $table->id();
            $table->integer('precio_tarifa');
            $table->string('tipo_vehiculo');
            $table->timestamps();
        });
    
        // Insertar datos por defecto
        DB::table('tarifas')->insert([
            ['precio_tarifa' => 1000, 'tipo_vehiculo' => 'moto'],
            ['precio_tarifa' => 1500, 'tipo_vehiculo' => 'carro'],
            ['precio_tarifa' => 2000, 'tipo_vehiculo' => 'camion'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarifas');
    }
};
