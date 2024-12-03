<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class EstudianteController extends Controller
{
    //
    public function list(){
        $estudiantes = Estudiante::all();
        //return view('estudiantes', compact('estudiantes'));
        return view('estudiantes')->with('estudiantes', $estudiantes);
    }

    public function create(Request $request){
        $estudiante = new Estudiante();
        $estudiante->nombre1 = $request['nombre1'];
        $estudiante->nombre2 = $request['nombre2'];
        $estudiante->apellido1 = $request['apellido1'];
        $estudiante->apellido2 = $request['apellido2'];
        $estudiante->direccion = $request['direccion'];
        $estudiante->telefono = $request['telefono'];
        $estudiante->correo =$request['correo'];
        $estudiante->estado = true;
        $estudiante->save();
        return back()->with('estudiantes')->with('estudiantes', Estudiante::all());
    }

    public function update(Request $request, $id){
        $estudiante = Estudiante::find($id);
        $estudiante->nombre1 = $request['nombre1'];
        $estudiante->nombre2 = $request['nombre2'];
        $estudiante->apellido1 = $request['apellido1'];
        $estudiante->apellido2 = $request['apellido2'];
        $estudiante->direccion = $request['direccion'];
        $estudiante->telefono = $request['telefono'];
        $estudiante->correo =$request['correo'];
        $estudiante->estado = true;
        $estudiante->save();
        return back()->with('estudiantes')->with('estudiantes', Estudiante::all());
    }

    public function delete($id){
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return back()->with('estudiantes')->with('estudiantes', Estudiante::all());
    }
}
