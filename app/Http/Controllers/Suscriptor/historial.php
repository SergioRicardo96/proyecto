<?php

namespace App\Http\Controllers\Suscriptor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class historial extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$consulta1 = DB::select('SELECT servicios.nombre,servicios.costo,pagos.* FROM servicios,suscripcions,pagos WHERE servicios.id IN(SELECT suscripcions.servicio_id FROM servicios WHERE suscripcions.id IN(SELECT pagos.suscripcion_id FROM suscripcions))'); 
    	
    	return view('suscriptor/historial',compact("consulta1"));
    	
    }



    public function index2()
    {
        $consulta1 = DB::select('SELECT servicios.*,pagos.* FROM servicios,suscripcions,pagos WHERE servicios.id IN(SELECT suscripcions.servicio_id FROM servicios WHERE suscripcions.id IN(SELECT pagos.suscripcion_id FROM suscripcions))'); 
        
        return view('suscriptor/estado',compact("consulta1"));
        
    }

    
}
