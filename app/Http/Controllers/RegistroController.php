<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Models\Registro;
use Illuminate\Http\Request;


class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registros.index',[
            'registros' => Registro::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroRequest $request)
    {
        $registro = new Registro();

        $registro->registro_documenttype = $request->get('registro_documenttype');
        $registro->registro_document = $request->get('registro_document');
        $registro->registro_firstname = $request->get('registro_firstname');
        $registro->registro_lastname = $request->get('registro_lastname');
        $registro->registro_email = $request->get('registro_email');
        $registro->registro_phone = $request->get('registro_phone');

        $registro->save();

        return redirect('/registros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $registro)
    {
        return view('registros.show',[
            'registro' => $registro
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $registro)
    {
        return view('registros.edit', [
            'registro' => $registro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegistroRequest $request, Registro $registro)
    {
        $registro->registro_documenttype = $request->get('registro_documenttype');
        $registro->registro_document = $request->get('registro_document');
        $registro->registro_firstname = $request->get('registro_firstname');
        $registro->registro_lastname = $request->get('registro_lastname');
        $registro->registro_email = $request->get('registro_email');
        $registro->registro_phone = $request->get('registro_phone');

        $registro->save();

        return redirect('/registros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registro $registro)
    {
        $registro->delete();
        return back();
    }
}
