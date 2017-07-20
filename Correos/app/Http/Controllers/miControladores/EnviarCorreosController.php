<?php

namespace App\Http\Controllers\miControladores;

use App\Http\Controllers\Controller;
use App\Mail\Correo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnviarCorreosController extends Controller
{
    public function index(){
    	return view('formulario');
    }

    public function enviarCorreo( Request $request ){

    	$nombre 	= $request->nombre;
    	$correo 	= $request->correo;
    	$contenido 	= $request->contenido; 

    	$datos = array( 'nombre' => $nombre, 'correo' => $correo, 'contenido' => $contenido );

    	Mail::to('destinatario@hotmail.com')->send( new Correo( $datos ) );

    	return 'Cotenido: ' . $contenido;
    }
}
