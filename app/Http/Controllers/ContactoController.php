<?php

namespace App\Http\Controllers;

use App\Mail\FormularioContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function enviarEmail(Request $request){
        $mensaje = $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'mensaje' => 'required',
            'asunto' => 'required',
        ]);
        Mail::to('alexjose.r.r@gmail.com')->send(new FormularioContacto($mensaje));
        return response()->json([
            'msg' => 'se envio formulario'
        ]);
    }
}