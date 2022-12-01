<?php

namespace App\Http\Controllers;

use App\Http\Requests\PolizaRequest;
use App\Models\Poliza;
use Illuminate\Http\Request;

class PolizaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('polisas.index',[
            'polisas' => Poliza::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('polisas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PolizaRequest $request)
    {
        $polisa = new Poliza();

        $polisa->poliza_type = $request->get('poliza_type');
        $polisa->poliza_number = $request->get('poliza_number');
        $polisa->poliza_terminatedate = $request->get('poliza_terminatedate');
        $polisa->vehiculo_nameplate = $request->get('vehiculo_nameplate');
        $polisa->vehiculo_brand = $request->get('vehiculo_brand');
        $polisa->vehiculo_vin = $request->get('vehiculo_vin');
        $polisa->registro_document = $request->get('registro_document');
        $polisa->registro_firstname = $request->get('registro_firstname');
        $polisa->registro_lastname = $request->get('registro_lastname');

        $polisa->save();

        return redirect('/polisas');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Poliza $polisa)
    {
        return view('polisas.show',[
            'polisa' => $polisa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Poliza $polisa)
    {
        return view('polisas.edit',[
            'polisa' => $polisa
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PolizaRequest $request, Poliza $polisa)
    {

        $polisa->poliza_type = $request->get('poliza_type');
        $polisa->poliza_number = $request->get('poliza_number');
        $polisa->poliza_terminatedate = $request->get('poliza_terminatedate');
        $polisa->vehiculo_nameplate = $request->get('vehiculo_nameplate');
        $polisa->vehiculo_brand = $request->get('vehiculo_brand');
        $polisa->vehiculo_vin = $request->get('vehiculo_vin');
        $polisa->registro_document = $request->get('registro_document');
        $polisa->registro_firstname = $request->get('registro_firstname');
        $polisa->registro_lastname = $request->get('registro_lastname');

        $polisa->save();

        return redirect('/polisas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poliza $polisa)
    {
        $polisa->delete();
        return back();
    }
}
