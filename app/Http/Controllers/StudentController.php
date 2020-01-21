<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentS;

class StudentController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function create(){
        //return "hola voy a crear algo grande";
        return view('create');
    }
    public function store (Request $request){
        $this->validate($request,[
            'nombre' => 'required',
            'email' => 'required',
            'telefono' => 'required'
        ]  );

        $estudiante = new StudentS;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellidos = $request->apellidos;
        $estudiante->email = $request->email;
        $estudiante->telefono = $request->telefono;
        $estudiante->save();
        return redirect (route('home'))->with('successMsg','Estudiante añadido correctamente');


    }

}

