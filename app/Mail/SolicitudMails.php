<?php

namespace App\Mail;

use App\Models\Usuario;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SolicitudMails extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Informacion de estado DPI";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $User = Usuario::all();
        
        $User = Usuario::select('email','password')->orderBy('id', 'desc')->get()->first();

        return $this->view('email.SolicitudNoti', compact('User'));
    }
}
