<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormularioContacto extends Mailable
{
    use Queueable, SerializesModels;
    public $nombre, $asunto, $mensaje, $correo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->nombre = $mensaje['nombre'];
        $this->asunto = $mensaje->asunto;
        $this->mensaje = $mensaje->mensaje;
        $this->correo = $mensaje->correo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.formulario_contacto');
    }
}
