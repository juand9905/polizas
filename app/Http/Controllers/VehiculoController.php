<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehiculoRequest;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vehiculos.index',[
            'vehiculos' => Vehiculo::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehiculoRequest $request)
    {
        $vehiculo = new Vehiculo();

        $vehiculo->vehiculo_type = $request->get('vehiculo_type');
        $vehiculo->vehiculo_nameplate = $request->get('vehiculo_nameplate');
        $vehiculo->vehiculo_model = $request->get('vehiculo_model');
        $vehiculo->vehiculo_brand = $request->get('vehiculo_brand');
        $vehiculo->vehiculo_vin = $request->get('vehiculo_vin');
        $vehiculo->registro_document = $request->get('registro_document');

        $vehiculo->save();

        return redirect('/vehiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculos.show',[
            'vehiculo' => $vehiculo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehiculo $vehiculo)
    {
        return view('vehiculos.edit', [
            'vehiculo' => $vehiculo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VehiculoRequest $request, Vehiculo $vehiculo)
    {
        $vehiculo->vehiculo_type = $request->get('vehiculo_type');
        $vehiculo->vehiculo_nameplate = $request->get('vehiculo_nameplate');
        $vehiculo->vehiculo_model = $request->get('vehiculo_model');
        $vehiculo->vehiculo_brand = $request->get('vehiculo_brand');
        $vehiculo->vehiculo_vin = $request->get('vehiculo_vin');
        $vehiculo->registro_document = $request->get('registro_document');

        $vehiculo->save();

        return redirect('/vehiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return back();
    }
}
