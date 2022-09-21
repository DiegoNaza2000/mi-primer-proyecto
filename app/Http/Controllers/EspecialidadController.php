<?php

namespace App\Http\Controllers;

use App\Models\especialidad;
use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidad= especialidad::all();
        return view('especialidad.index')->with('especialidad',$especialidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especialidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $especialidad = $request->all();
       especialidad::create($especialidad);

        return redirect('especialidad')->with('flash_message','registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especialidad = especialidad::find($id);
        return view('especialidad.read')->with('especialidad', $especialidad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidad=especialidad::find($id);
        return view('especialidad.edit')->with('especialidad', $especialidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $especialidad = especialidad::find($id);
        $input= $request->all();
        $especialidad->update($input);
        return redirect('especialidad')->with('flash_message', 'especialidad epdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        especialidad::destroy($id);
        return redirect('especialidad')->with('flash_message','especialidad borrado');
    }
}
