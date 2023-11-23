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
        DB::unprepared('
        CREATE TRIGGER calcular_valor_pagar BEFORE INSERT ON comprobantes FOR EACH ROW
        BEGIN
            DECLARE horas_permanencia INT;
            DECLARE tarifa_hora INT;
            DECLARE id_tarifa_comprobante INT;

            SET horas_permanencia = TIMESTAMPDIFF(HOUR, (SELECT fecha_ingreso FROM vehiculos WHERE id = NEW.id_vehiculo), NEW.fecha_salida);

            SELECT precio_tarifa, id INTO tarifa_hora, id_tarifa_comprobante
            FROM tarifas
            WHERE tipo_vehiculo = (SELECT tipo_vehiculo FROM vehiculos WHERE id = NEW.id_vehiculo);

            SET NEW.id_tarifa = id_tarifa_comprobante;

            SET NEW.valor_pagar = horas_permanencia * tarifa_hora;
        END
    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comprobante', function (Blueprint $table) {
            //
        });
    }
};
