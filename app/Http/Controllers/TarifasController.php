<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarifa;
class TarifasController extends Controller
{
    public function add(Request $request){
        $request->validate([
            "tipo_vehiculo"=> "required",
            "precio_tarifa"=> "required",

        ]);
        $tarifa = new Tarifa;
        $tarifa->tipo_vehiculo = $request->tipo_vehiculo;
        $tarifa->precio_tarifa = $request->precio_tarifa;
        $tarifa-> save();

        return redirect()->route('ShowAddTarifas')->with("success","Tarifa Agregada");
    } 

    public function show()
    {
        $tarifas = Tarifa::all(); 
        return view('tarifas/AddT', ['tarifas' => $tarifas]);
    }
    public function showedit($id)
    {
        $tarifa = Tarifa::find($id); 
        return view('tarifas/EditT', ['tarifa' => $tarifa]);
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            "tipo_vehiculo"=> "required",
            "precio_tarifa"=> "required",
        ]); 

        $tarifa = Tarifa::find($id);
        $tarifa->tipo_vehiculo = $request->tipo_vehiculo;
        $tarifa->precio_tarifa = $request->precio_tarifa;
        $tarifa->save();

        return redirect()->route('ShowAddTarifas')->with('success', 'Tarifa Actualizada');
    
    }

    public function delete($id){  
        $tarifa = Tarifa::find($id);
        $tarifa -> delete();
        return redirect()->route('ShowAddTarifas')->with('danger', 'Tarifa Eliminada');
    }
}
