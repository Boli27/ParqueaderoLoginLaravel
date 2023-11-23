<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarifa;
class TarifasController extends Controller
{
    public function show()
    {
        $tarifas = Tarifa::all(); 
        return view('tarifas/EditT', ['tarifas' => $tarifas]);
    }

    public function edit(Request $request)
    {
        $tipo_vehiculo = $request->tipo_vehiculo;

        $tarifa = Tarifa::where('tipo_vehiculo', $tipo_vehiculo)->first();
        $tarifa->precio_tarifa = $request->tarifa;
        $tarifa->save();

        return redirect()->route('Addvehiculos')->with('success', 'Tarifa actualizada');
    
    }
}
