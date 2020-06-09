<?php

namespace App\Http\Controllers\Cobrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class susccriptores extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
    {//$servi = Servicio::all();
    	$consulta = DB::select('SELECT * FROM users WHERE id IN(SELECT user_id FROM suscripcions)');
    	$consulta1 = DB::select('SELECT servicios.nombre,servicios.costo,pagos.* FROM servicios,suscripcions,pagos WHERE servicios.id IN(SELECT suscripcions.servicio_id FROM servicios WHERE suscripcions.id IN(SELECT pagos.suscripcion_id FROM suscripcions))'); 
    	$consulta2 = DB::select('SELECT servicios.nombre,suscripcions.* FROM servicios,suscripcions WHERE servicios.id IN(SELECT suscripcions.servicio_id FROM servicios)'); 

        $consulta3 = DB::select('SELECT * FROM mensualidades'); 

        //return $consulta2;
      
        return view('cobrador\suscriptores',compact("consulta","consulta1","consulta2","consulta3"));
    }




    public function pagos()
    {//$servi = Servicio::all();
    	$consulta = DB::select('SELECT * FROM users WHERE id IN(SELECT user_id FROM suscripcions)');
    	$consulta1 = DB::select('SELECT servicios.nombre,servicios.costo,pagos.* FROM servicios,suscripcions,pagos WHERE servicios.id IN(SELECT suscripcions.servicio_id FROM servicios WHERE suscripcions.id IN(SELECT pagos.suscripcion_id FROM suscripcions))'); 
    	$consulta2 = DB::select('SELECT servicios.nombre,suscripcions.* FROM servicios,suscripcions WHERE servicios.id IN(SELECT suscripcions.servicio_id FROM servicios)'); 

        //return $consulta2;
      
        return view('cobrador\pagos',compact("consulta","consulta1","consulta2"));
    }
}
