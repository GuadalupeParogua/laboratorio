@extends('layouts.template')

@section('content')
    <div class="card shadow formulario">
        <div class="card-body">
            <form action="{{ route('orden_pedido.update',[$orden->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center">Formulario</div>
                    <br>


                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="fechaEntrega" class="form-label la">Fecha de Entrega:</label>
                        <input name="fechaEntrega" type="date" class="form-control shadow-sm" id="fechaEntrega"
                            for="fechaEntrega" value="{{ old('fechaEntrega') }}" />
                        @error('fechaEntrega')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="estado" class="form-label la">Estado:</label>
                        <select class="form-control js-example-theme-single " name="estado" id="estado">
                            <option disabled selected>---Seleccione---</option>

                            <option @if ($orden->estado == 1) selected @endif value="1">Pendiente</option>
                            <option @if ($orden->estado == 2) selected @endif value="2">Entregado</option>




                        </select>
                        @error('estado')
                            <small class="text-danger">{{ 'El campo  unidad de medida es obligatorio.' }}</small>
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
