<?php

namespace App\Http\Controllers;

use App\Mail\SolicitudMails;
use App\Models\Dpi;
use App\Models\Generate;
use App\Models\Solicitude;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;

class PublicasController extends Controller 
{
    public function __invoke()
    {
        return view('Solicitud');

        Log::debug(' Se ingreso a la vista Solicitud');
    }

    public function create(Request $request){
    
    // Validaciones para la imagen
        $request->validate([
            'foto' => 'image|max:2048|dimensions:max_width=550,max_height=550'
        ]);

        $imagen =  $request->file('foto')->store('public/fotografias');

        $url= Storage::url($imagen);

        Log::debug('Publicacreate:: Se valido el tamaño y las dimensiones de la fotografia');

     //Guardar los datos resividos desde el form
        $solicitud = new Solicitude;

        $solicitud->cedula = $request->cedula; 
        $solicitud->fechanacimiento = $request->fechanacimiento; 
        $solicitud->nombre = $request->nombre; 
        $solicitud->apellido = $request->apellido; 
        $solicitud->direccion = $request->direccion; 
        $solicitud->telefono = $request->telefono; 
        $solicitud->departamento = $request->departamento; 
        $solicitud->municipio = $request->municipio; 
        $solicitud->foto = $url; 
        $solicitud->email = $request->email; 
        $solicitud->status = "Solicitado";
        
        $solicitud->save();

       Log::debug('Publicacreate:: Se ha guardado una nueva solicitud en la base de datos ');
    
    //Generar usuario automatico
        
     Generate::factory(1)->create(); 
    
     //Enviar el correo corespondiente

    $email = new SolicitudMails();

    Mail::to($solicitud->email)->send($email);

    Log::debug('Publicacreate:: Se han auto creado los datos del usuario y se envio un correo con los datos correspondientes');


    // Generar un DPi unico para este usuario

    Dpi::factory(1)->create();

    Log::debug('Publicacreate::  Dpi Creado con exito para el usuario');

    return redirect()->route('publicas.index')->with('info', 'Verificar su correo electronico para confirmar sus credenciales');
    
   
    
    }
}