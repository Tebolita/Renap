<?php

namespace App\Http\Controllers;

use App\Mail\NotiMails;
use App\Models\Solicitude;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AdministradorController extends Controller
{




    public function login()
    {
        return view('Login');

    }

    public function __invoke()
    {

      $solicitud = Solicitude::all();

      return view('Administrador', compact('solicitud'));

    }


    // Son las credenciales necesarios para iniciar sesion 
    public function credenciales(){

      
      $credentials = request()->only('email', 'password');

      if(Auth::attempt($credentials)){
  
      // Muy importante de colocar para evitar aperturas de seguridad en las sesiones
        request()->session()->regenerate();
        Log::debug('AdministradorCredenciales:: Se tomaron las credenciales para iniciar sesion, sesion iniciada con exito');
         return redirect()->route('admin.index');
      }else{
        Log::debug('AdministradorCredenciales:: Se tomaron las credenciales para iniciar sesion, Usuario no econtrado');
        return redirect()->route('admin.login');
      }

     
    }


    public function update($id){

      $solicitud =  Solicitude::find($id);

      switch($solicitud->status){
        case "Solicitado":
          $solicitud->status = "En proceso";
          $solicitud->save();
          Log::debug('AdministradorUpdate:: Actualizacion del dato status del campo Status de la tabla Solicitudes');
          return redirect()->route('admin.index');
        break;

        case "En proceso":
        $solicitud->status = "Listo para entregar";
        $solicitud->save(); 
        Log::debug('AdministradorUpdate:: Actualizacion del dato status del campo Status de la tabla Solicitudes, Se envio un email notificando al usuario' );
        $email = new NotiMails;
        Mail::to($solicitud->email)->send($email);
        
        return redirect()->route('admin.index');
        break;

      }
    }

      public function logout(Request $request){

        Auth::logout();

        //Este codigo invalida la sesion y genera una nueva

        $request->session()->invalidate();

        //Regenera el token csrf
        $request->session()->regenerateToken();

        Log::debug('AdministradorLogout:: Se ha cerrado sesion en la pagina de administrador!!');

        return redirect()->route('admin.login');

        
      }
    
}
