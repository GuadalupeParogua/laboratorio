@extends('layouts.template')

@section('content')
    <div class="card shadow formulario">
        <div class="card-body">
            <form action="{{ route('pago.update',[$pago->id] )}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center">Formulario</div>
                    <br>

                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="id_tipo" class="form-label la">Tipo Pago:</label>
                        <select class="form-control js-example-theme-single " name="id_tipo" id="id_tipo" >
                            <option disabled selected>---Seleccione---</option>
                            @foreach ($tipo_pago as $tipo_pagos )

                            <option {{$pago->id_tipo==$tipo_pagos->id ? "selected" : ""}} value="{{$tipo_pagos->id}}"> {{$tipo_pagos->tipo}}</option>

                            @endforeach
                        </select>
                        @error('id_tipo')
                        <small class="text-danger">{{ 'El campo  es obligatorio.' }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="fecha" class="form-label la">Fecha:</label>
                        <input name="fecha" type="date" class="form-control shadow-sm" id="fecha"
                            for="fecha" value="{{$pago->fecha}}" />
                        @error('fecha')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="estado" class="form-label la">Estado de Pago:</label>
                        <select class="form-control js-example-theme-single " name="estado" id="estado">
                            <option disabled selected>---Seleccione---</option>

                            <option @if ($pago->estado == 1) selected @endif value="1">Saldo Cancelado</option>
                            <option @if ($pago->estado == 2) selected @endif value="2">Saldo Pendiente</option>




                        </select>
                        @error('estado')
                            <small class="text-danger">{{ 'El campo es obligatorio.' }}</small>
                        @enderror
                    </div>







                </div>
                <br />
                <div class="w-100">
                    <div class="center">
                        <button type="submit">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
