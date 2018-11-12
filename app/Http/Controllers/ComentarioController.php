<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comentario;

class ComentarioController extends Controller
{
    public function subirComentario(Request $request)
    {

    	$comentario = new Comentario;

    	$comentario->nombre = $request->nombre;
    	$comentario->email = $request->email;
    	$comentario->mensaje = $request->mensaje;

    	$comentario->save();

    	return view('index');
    }
}
