<?php

namespace App\Http\Controllers\Cobrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mensualidade;
use Illuminate\Support\Facades\DB;


class mensualidad extends Controller
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
        //return $servi;
        return view('cobrador\servicio',compact('servi'));
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

    	// $mensu = new Mensualidade;
     //    $mensu->id = $request->input('idmensualidad');
     //    $mensu->user_id = $request->input('idusuario');
     //    $mensu->status = $request->input('status');

     //    $mensu->save();
     //    //$consulta = DB::select('UPDATE mensualidades SET status=1 WHERE id ={{$mensu}}');
     //    return redirect("/cobrador/Suscriptor");
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
        $usuario->fill($request->all());
        $usuario->save();
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $Servicio)
    {
       
        
    }

    public function actualizar(Request $request)
    {

        $mensu1 = $request->input('idmensualidad');
     //    $mensu->user_id = $request->input('idusuario');
     //    $mensu->status = $request->input('status');
       $consulta = DB::table('mensualidades')
            ->where('id', $mensu1)
            ->update(['status' => 1]);
        return redirect("/cobrador/Suscriptor");
    }
}
