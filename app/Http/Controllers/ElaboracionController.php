<?php

namespace App\Http\Controllers;

use App\Models\elaboracion;
use App\Http\Requests\StoreelaboracionRequest;
use App\Http\Requests\UpdateelaboracionRequest;

class ElaboracionController extends Controller
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
     * @param  \App\Http\Requests\StoreelaboracionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreelaboracionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\elaboracion  $elaboracion
     * @return \Illuminate\Http\Response
     */
    public function show(elaboracion $elaboracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\elaboracion  $elaboracion
     * @return \Illuminate\Http\Response
     */
    public function edit(elaboracion $elaboracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateelaboracionRequest  $request
     * @param  \App\Models\elaboracion  $elaboracion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateelaboracionRequest $request, elaboracion $elaboracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\elaboracion  $elaboracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(elaboracion $elaboracion)
    {
        //
    }
}
