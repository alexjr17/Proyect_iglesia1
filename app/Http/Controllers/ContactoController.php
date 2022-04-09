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
            'asunto' => 'required',
            'mensaje' => 'required'
        ]);
        // Mail::to('alexjose.r.r.17@gmail.com')->send(new FormularioContacto($mensaje));
        Mail::send('mail.formulario_contacto', $mensaje, function($message){
            $message->subject('mail');
            $message->to('alexjose.r.r.17@gmail.com');
        });
        return response()->json([
            'msg' => 'se envio formulario'
        ]);
    }
}
