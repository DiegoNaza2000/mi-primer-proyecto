<?php

namespace App\Http\Controllers;

use App\Models\receta;
use App\Models\medico;
use App\Models\paciente;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receta= receta::all();
        return view('receta.index')->with('receta',$receta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receta.create_recet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receta = $request->all();
       receta::create($receta);

        return redirect('receta')->with('flash_message','registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $receta = receta::find($id);
        $medico = medico::find($id);
        $paciente = paciente::find($id);

        return view('receta.read_recet',['receta'=>$receta, 'medico'=>$medico, 'paciente'=>$paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receta=receta::find($id);
        return view('receta.edit')->with('receta', $receta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $receta = receta::find($id);
        $input= $request->all();
        $receta->update($input);
        return redirect('receta')->with('flash_message', 'receta epdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        receta::destroy($id);
        return redirect('receta')->with('flash_message','receta borrado');
    }
}
