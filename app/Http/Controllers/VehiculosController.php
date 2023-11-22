<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vehiculo;
use Illuminate\Http\Request;


class VehiculosController extends Controller
{
    public function insertar(Request $request){
        $request->validate([
            "tipo_vehiculo"=> "required",
            "marca"=> "required",
            "color"=> "required",
            "placa"=> "required",
        ]);
        $vehiculo = new Vehiculo;
        $vehiculo->tipo_vehiculo = $request->tipo_vehiculo;
        $vehiculo->marca = $request->marca;
        $vehiculo->color = $request->color;
        $vehiculo->placa = $request->placa;
        $vehiculo-> save();

        return redirect()->route('Addvehiculos')->with("success","Vehiculo Agregado");
    } 

    public function consultar(){
        $vehiculos = Vehiculo::all(); 
        return view('vehiculo/agregarV', ['vehiculos' => $vehiculos]); 
    }

    public function vereditar($id){
        $vehiculo = Vehiculo::find($id); 
        return view('vehiculo/editarV', ['vehiculo' => $vehiculo]); 
    }

    public function editar(Request $request, $id){  
        $vehiculo = Vehiculo::find($id);
        $vehiculo->marca = $request->marca;
        $vehiculo->color = $request->color;
        $vehiculo->placa = $request->placa;
        $vehiculo-> save();
        return redirect()->route('Addvehiculos')->with('success', 'Vehiculo actualizado');

    }
    public function borrar($id){  
        $vehiculo = Vehiculo::find($id);
        $vehiculo -> delete();
        return redirect()->route('Addvehiculos')->with('danger', 'Vehiculo eliminado');
    }
}
