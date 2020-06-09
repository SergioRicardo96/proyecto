<?php

namespace App\Http\Controllers\Suscriptor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Servicio;
use App\Suscripcion;
use App\Pago;
use App\Mensualidade;
use Illuminate\Support\Facades\DB;

class Servicios extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $servi = Servicio::all();
        $consulta = DB::select('SELECT * FROM suscripcions');
        //return $servi;
        return view('suscriptor\servicios',compact("servi","consulta"));



        //return $consulta2;
    }


    public function store(Request $request)
    {
        //return $request;
   
        $suscripcion = new Suscripcion();
        $suscripcion->user_id= $request->input('idusuario');
        $suscripcion->servicio_id= $request->input('idservicio');
        $suscripcion->save();

        // $mensu = new Mensualidade();
        // $mensu->user_id= $request->input('idusuario');
        // $mensu->status= 0;

        // $mensu->save();



        $select = DB::table('suscripcions')->latest()->first();
        $almacen = $select->id;

        $inserc2 = new Pago();
        $inserc2->user_id= $request->input('idusuario');
        $inserc2->suscripcion_id= $almacen;

        $inserc2->save();

        return redirect("/suscriptor/Servicios");
    }

}
