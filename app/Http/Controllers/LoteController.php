<?php

namespace App\Http\Controllers;

use App\Models\lote;
use App\Http\Requests\StoreloteRequest;
use App\Http\Requests\UpdateloteRequest;

class LoteController extends Controller
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
     * @param  \App\Http\Requests\StoreloteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreloteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function show(lote $lote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function edit(lote $lote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateloteRequest  $request
     * @param  \App\Models\lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateloteRequest $request, lote $lote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lote  $lote
     * @return \Illuminate\Http\Response
     */
    public function destroy(lote $lote)
    {
        //
    }
}
