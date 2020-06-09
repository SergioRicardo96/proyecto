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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $Servicio)
    {
      // return $Servicio;
       return view('verServicio',compact('Servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $Servicio)
    {
       // return $Servicio;
        return view('modificarServicio',compact('Servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $Servicio)
    {
        return $request;
        $Servicio->fill($request->except('imagen'));

        if ($request->hasFile('imagen')) {
            $file=$request->file('imagen');
            $name = time().$request->file('imagen')->getClientOriginalName();
            $Servicio->imagen = $name;
            $file->move(public_path().'/img/',$name);
        }
        $Servicio->save();

         return redirect('/satisfactorio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $Servicio)
    {
       
        $Servicio->delete();

        return redirect("/cobrador/Servicio");
    }
}
