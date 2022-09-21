<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente= paciente::all();
        return view('paciente.index')->with('paciente',$paciente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create_paciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = $request->all();
       paciente::create($paciente);

        return redirect('paciente')->with('flash_message','registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = paciente::find($id);
        return view('paciente.read_pacient')->with('paciente', $paciente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente=paciente::find($id);
        return view('paciente.edit')->with('paciente', $paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = paciente::find($id);
        $input= $request->all();
        $paciente->update($input);
        return redirect('paciente')->with('flash_message', 'paciente epdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        paciente::destroy($id);
        return redirect('paciente')->with('flash_message','paciente borrado');
    }
}
