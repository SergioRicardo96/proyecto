<?php

namespace App\Http\Controllers\Cobrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageReceived;

class mensaje extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {//$servi = Servicio::all();
    	$usuario = DB::select('SELECT * FROM users WHERE id IN(SELECT user_id FROM role_user WHERE role_id=1)');
        //$servi = Servicio::all();
      
        return view('cobrador\mensajes',compact('usuario'));
    }

    public function envio(Request $request)
    {
    	//return $request;
    	$correo = $request->input('id');
    	// Mail::send("cobrador\msj",$request, function($mensaje){
    	// 	$mensaje->to("sergioricardonangusegonzalez@gmail.com","Ricardo")->subject("Hola Suscriptor Aviso");
    	// });

    	Mail::to("narutoremolinoo96@gmail.com")->send(new MessageReceived($request));

    	Session()->flash('message','Mensaje enviado correctamente');
    	return redirect()->route('/cobrador/Mensaje');
    }
}
