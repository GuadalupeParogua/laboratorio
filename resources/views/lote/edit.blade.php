@extends('layouts.template')

@section('content')
    <div class="card shadow formulario">
        <div class="card-body">
            <form action="{{ route('lote.update', [$lotes->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center;font-size:30px">
                        {{ $lotes->Materia_Prima->nombre }}</div>
                    <hr>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="p_compra" class="form-label la">Precio Compra:</label>
                        <input name="p_compra" type="number" class="form-control shadow-sm" id="p_compra" for="p_compra"
                            value="{{ old('p_compra', $lotes->p_compra) }}">

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="f_entrega" class="form-label la">Fecha de Entrega:</label>
                        <input name="f_entrega" type="date" class="form-control shadow-sm" id="f_entrega" for="f_entrega"
                            value="{{ old('f_entrega') }}" />
                        @error('f_entrega')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="estado" class="form-label la">Estado:</label>
                        <select class="form-control js-example-theme-single " name="estado" id="estado">
                            <option disabled selected>---Seleccione---</option>

                            <option @if ($lotes->estado == 1) selected @endif value="1">Pendiente</option>
                            <option @if ($lotes->estado == 2) selected @endif value="2">Entregado</option>




                        </select>
                        @error('estado')
                            <small class="text-danger">{{ 'El campo  unidad de medida es obligatorio.' }}</small>
                        @enderror
                    </div>





                </div>
                <br />
                <div class="w-10">
                    <div class="center">
                        <button type="submit">Guardar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
