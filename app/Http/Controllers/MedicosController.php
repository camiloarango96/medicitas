<?php

namespace App\Http\Controllers;

use App\Models\medicos;
use Illuminate\Http\Request;

class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //La vista medicos.index tendra una variable con todos los medicos
        return view('medicos.index', ['medicos' => medicos::all()]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function show(medicos $medicos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function edit(medicos $medicos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medicos $medicos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medicos  $medicos
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicos $medicos)
    {
        //
    }
}
