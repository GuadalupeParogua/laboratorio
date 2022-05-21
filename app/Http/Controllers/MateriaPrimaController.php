<?php

namespace App\Http\Controllers;

use App\Models\materia_prima;
use App\Http\Requests\Storemateria_primaRequest;
use App\Http\Requests\Updatemateria_primaRequest;

class MateriaPrimaController extends Controller
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
     * @param  \App\Http\Requests\Storemateria_primaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemateria_primaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materia_prima  $materia_prima
     * @return \Illuminate\Http\Response
     */
    public function show(materia_prima $materia_prima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materia_prima  $materia_prima
     * @return \Illuminate\Http\Response
     */
    public function edit(materia_prima $materia_prima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemateria_primaRequest  $request
     * @param  \App\Models\materia_prima  $materia_prima
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemateria_primaRequest $request, materia_prima $materia_prima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materia_prima  $materia_prima
     * @return \Illuminate\Http\Response
     */
    public function destroy(materia_prima $materia_prima)
    {
        //
    }
}
