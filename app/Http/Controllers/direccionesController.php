<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contactoStore;

class direccionesController extends Controller
{
    public function inicio(){
        return view('index');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function contact(){
        return view('contacto');
    }

    public function lugar(){
        return view('lugar');
    }

    public function lugares(){
        return view('lugares');
    }

    public function store(Request $request){
        $post = new contactoStore;
            $post->nombre = $request->nombre;
            $post->apellido = $request->apellido;
            $post->email= $request->email;
            $post->telefono = $request->telefono;
            $post->nombreLugar = $request->nombreLugar;
            $post->descripcion = $request->descripcion;
            $post->save();
            return redirect()->route("contact")->with('success', 'Datos enviados correctamente.');
        
    
    }
}
