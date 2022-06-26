@extends('layouts.template')

@section('content')
    <div class="card shadow formulario">
        <div class="card-body">
            <form action="{{ route('orden_pedido.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center">Formulario</div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="id_encargado" class="form-label la">Encargado:</label>
                        <select class="form-control js-example-theme-single " name="id_encargado" id="id_encargado" >
                            <option disabled selected>---Seleccione---</option>
                        @foreach ($encargado as $encargados )

                        <option {{old('id_encargado')==$encargados->id ? 'selected' : ' '}} value="{{$encargados->id}}"> {{$encargados->usuario}}</option>

                        @endforeach
                        </select>
                        @error('id_encargado')
                        <small class="text-danger">{{ 'El campo  es obligatorio.' }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="id_odontologo" class="form-label la">Odontologo:</label>
                        <select class="form-control js-example-theme-single " name="id_odontologo" id="id_odontologo" >
                            <option disabled selected>---Seleccione---</option>
                        @foreach ($odontologo as $odontologos )

                        <option {{old('id_odontologo')==$odontologos->id ? 'selected' : ' '}} value="{{$odontologos->id}}"> {{$odontologos->nombre}}</option>

                        @endforeach
                        </select>
                        @error('id_odontologo')
                        <small class="text-danger">{{ 'El campo  es obligatorio.' }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <label for="detalle" class="form-label la">Detalle:</label>
                        <textarea name="detalle" type="text" class="form-control shadow-sm" id="detalle" for="detalle"
                            value="{{ old('detalle') }}"></textarea>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="fechaPedido" class="form-label la">Fecha de Pedido:</label>
                        <input name="fechaPedido" type="date" class="form-control shadow-sm" id="fechaPedido"
                            for="fechaPedido" value="{{ old('fechaPedido') }}" />
                        @error('fechaPedido')
                            <small class="text-danger">{{ $message }}</small>
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
