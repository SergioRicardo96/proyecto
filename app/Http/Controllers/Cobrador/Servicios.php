<?php

namespace App\Http\Controllers\Cobrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Servicio;

class Servicios extends Controller
{
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        
        if ($request->hasFile('avatar1')) {
            $file=$request->file('avatar1');
            $name1 = time().$request->file('avatar1')->getClientOriginalName();
            $file->move(public_path().'/img/',$name1);
        }

        if ($request->hasFile('avatar2')) {
            $file=$request->file('avatar2');
            $name2 = time().$request->file('avatar2')->getClientOriginalName();
            $file->move(public_path().'/img/',$name2);
        }

        if ($request->hasFile('avatar3')) {
            $file=$request->file('avatar3');
            $name3 = time().$request->file('avatar3')->getClientOriginalName();
            $file->move(public_path().'/img/',$name3);
        }
        


        $servicio = new Servicio();
        $servicio->nombre= $request->input('nombre');
        $servicio->costo= $request->input('costo');
        $servicio->mora= $request->input('mora');
        $servicio->horario= $request->input('horario');
        $servicio->imagen1= $name1;
        $servicio->imagen2= $name2;
        $servicio->imagen3= $name3;
        $servicio->slug= $request->input('nombre');
        $servicio->save();

        return redirect("/cobrador/Servicio");
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
