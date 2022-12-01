<?php

namespace App\Http\Controllers;

use App\Http\Requests\PagoRequest;
use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pagos.index',[
            'pagos' => Pago::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagoRequest $request)
    {
        $pago = new Pago();

        $pago->pago_method = $request->get('pago_method');
        $pago->pago_bank = $request->get('pago_bank');
        $pago->pago_email = $request->get('pago_email');
        $pago->registro_document = $request->get('registro_document');
        $pago->vehiculo_vin = $request->get('vehiculo_vin');
        $pago->poliza_number = $request->get('poliza_number');

        $pago->save();

        return redirect('/pagos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        return view('pagos.show',[
            'pago' => $pago
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {
        return view('pagos.edit', [
            'pago' => $pago
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagoRequest $request, Pago $pago)
    {
        $pago->pago_method = $request->get('pago_method');
        $pago->pago_bank = $request->get('pago_bank');
        $pago->pago_email = $request->get('pago_email');
        $pago->registro_document = $request->get('registro_document');
        $pago->vehiculo_vin = $request->get('vehiculo_vin');
        $pago->poliza_number = $request->get('poliza_number');

        $pago->save();

        return redirect('/pagos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        $pago->delete();
        return back();
    }
}
