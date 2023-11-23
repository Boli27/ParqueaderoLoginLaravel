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
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_vehiculo')->unique();
            $table->unsignedBigInteger('id_tarifa');
            $table->timestamp('fecha_salida')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('valor_pagar');
            $table->timestamps();
    
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos')->onDelete('cascade');;
            $table->foreign('id_tarifa')->references('id')->on('tarifas');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprobantes');
    }
};
