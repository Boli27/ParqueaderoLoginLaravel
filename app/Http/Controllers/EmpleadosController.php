<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;
class EmpleadosController extends Controller
{
    public function add(Request $request){
        $request->validate([
            "nombre"=> "required",
            "contacto"=> "required",
            "sueldo"=> "required",
        ]);
        $empleado = new Empleado;
        $empleado->nombre = $request->nombre;
        $empleado->contacto = $request->contacto;
        $empleado->sueldo = $request->sueldo;
        $empleado-> save();

        return redirect()->route('ShowAddEmpleado')->with("success","Empleado Agregado");
    } 

    public function show()
    {
        $empleados = Empleado::all(); 
        return view('empleados/AddE', ['empleados' => $empleados]);
    }
    public function showedit($id)
    {
        $empleado = Empleado::find($id); 
        return view('empleados/EditE', ['empleado' => $empleado]);
    }

    public function edit(Request $request, $id)
    {
        $request->validate([
            "nombre"=> "required",
            "contacto"=> "required",
            "sueldo"=> "required",
        ]); 

        $empleado = Empleado::find($id);
        $empleado->nombre = $request->nombre;
        $empleado->contacto = $request->contacto;
        $empleado->sueldo = $request->sueldo;
        $empleado-> save();
        return redirect()->route('ShowAddEmpleado')->with('success', 'Empleado Actualizado');
    }

    public function delete($id){  
        $empleado = Empleado::find($id);
        $empleado -> delete();
        return redirect()->route('ShowAddEmpleado')->with('danger', 'Empleado Eliminado');
    }
}
