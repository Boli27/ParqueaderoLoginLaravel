<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comprobante;
use Illuminate\Http\Request;

class ComprobanteController extends Controller
{
    public function CrearComprobante($id)
    {
        //validacion de la existencia de un comprobante para el vehiculo antes de generarlo
        if (Comprobante::where('id_vehiculo', $id)->exists()) {
        
            return redirect()->route('Addvehiculos')->with("danger", "Ya existe un comprobante para este vehículo");
        }
        // en caso que la condicion no se aplique reazara el prceso de crear el comprobante con la id pasada como parametros en el metos
        $comprobante = new Comprobante;
        $comprobante->id_vehiculo = $id;
        $comprobante -> save();
        return redirect()->route('Addvehiculos')->with("success","Comprobante Generado");
    }

    public function VerComprobante($id_vehiculo)
    {
        // Verificar si el vehículo tiene un comprobante
        if (!Comprobante::where('id_vehiculo', $id_vehiculo)->exists()) {
            return redirect()->route('Addvehiculos')->with("danger","El vehiculo aun no tiene comprobante");
        }
        // El vehículo tiene un comprobante, realizar la consulta JOIN
        $datosComprobante = Comprobante::join('vehiculos', 'comprobantes.id_vehiculo', '=', 'vehiculos.id')
            ->where('comprobantes.id_vehiculo', $id_vehiculo)
            ->select('comprobantes.*', 'vehiculos.*')
            ->first();
        return view('comprobantes/verC', compact('datosComprobante'));
    }
}
