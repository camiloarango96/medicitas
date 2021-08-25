<?php

namespace App\Http\Controllers;

use App\Models\citas;
use App\Models\medicos;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citasMed = citas::select('citas.id', 'citas.fecha_cita', 'medicos.nombre', 'medicos.apellido', 'sedes.name')
                                ->join('medicos', 'citas.medicos_id', '=', 'medicos.id')
                                ->join('sedes', 'medicos.sedes_id', '=', 'sedes.id')
                                ->get();
        return view('citas.index', ['citasMed' => $citasMed]);
        //return $citasMed;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = medicos::select('medicos.id','medicos.nombre', 'medicos.apellido', 'sedes.name')
                            ->join('sedes', 'medicos.sedes_id', '=', 'sedes.id')
                            ->get();
        return view('citas.create', ['medicos' => $medicos]);
        //return $medicos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        citas::create([
            'fecha_cita' => $request->fecha_cita,
            'medicos_id' => $request->medico,
            'user_id' => 1
        ]);
        */

        $cita = new citas();
        $cita->fecha_cita = $request->fecha_cita;
        $cita->medicos_id = $request->medico;
        $cita->user_id = 1;
        $cita->save();

        return redirect()->route('citas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(citas $citas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit(citas $citas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, citas $citas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy(citas $citas)
    {
        //$citas->delete();
        return $citas;
    }
}
