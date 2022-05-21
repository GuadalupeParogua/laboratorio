<?php

namespace App\Http\Controllers;

use App\Models\clinica;
use App\Http\Requests\StoreclinicaRequest;
use App\Http\Requests\UpdateclinicaRequest;

class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreclinicaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreclinicaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function show(clinica $clinica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function edit(clinica $clinica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclinicaRequest  $request
     * @param  \App\Models\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateclinicaRequest $request, clinica $clinica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function destroy(clinica $clinica)
    {
        //
    }
}
