<?php

namespace App\Http\Controllers;

use App\Models\cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cita= cita::all();
        return view('cita.index')->with('cita',$cita);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cita.create_cita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita = $request->all();
       cita::create($cita);

        return redirect('cita')->with('flash_message','registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = cita::find($id);
        return view('cita.read_cita')->with('cita', $cita);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita=cita::find($id);
        return view('cita.edit')->with('cita', $cita);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cita = cita::find($id);
        $input= $request->all();
        $cita->update($input);
        return redirect('cita')->with('flash_message', 'cita epdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        cita::destroy($id);
        return redirect('cita')->with('flash_message','cita borrado');
    }
}
