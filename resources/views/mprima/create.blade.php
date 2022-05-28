@extends('layouts.template')

@section('content')
    <div class="card shadow formulario">
        <div class="card-body">
            <form action="{{ route('mprimas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center">Formulario</div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <label for="nombre" class="form-label la">Nombre:</label>
                        <input name="nombre" type="text" class="form-control shadow-sm" id="nombre" for="nombre"
                            value="{{ old('nombre') }}" />

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                        <label for="p_venta" class="form-label la">Precio Venta:</label>
                        <input name="p_venta" type="number" class="form-control  shadow-sm" min="0" id="p_venta"
                            for="p_venta" value="{{ old('p_venta') }}">

                    </div>
                 
                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="id_unidadMedida" class="form-label la">Unidad Medida:</label>
                        <select class="form-control js-example-theme-single " name="id_unidadMedida" id="id_unidadMedida" >
                            <option disabled selected>---Seleccione---</option>
                        @foreach ($unidad as $unidads )

                        <option {{old('id_unidadMedida')==$unidads->id ? 'selected' : ' '}} value="{{$unidads->id}}"> {{$unidads->nombre}}</option>

                        @endforeach
                        </select>
                        @error('id_unidadMedida')
                        <small class="text-danger">{{ 'El campo  unidad de medida es obligatorio.' }}</small>
                        @enderror
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="id_area" class="form-label la">Area:</label>
                        <select class="form-control js-example-theme-single " name="id_area" id="id_area" >
                            <option disabled selected>---Seleccione---</option>
                            @foreach ($area as $area )

                            <option {{old('id_area')==$area->id ? 'selected' : ' '}} value="{{$area->id}}"> {{$area->nombre}}</option>

                            @endforeach
                        </select>
                        @error('id_area')
                        <small class="text-danger">{{ 'El campo  Area de almacenamiento es obligatorio.' }}</small>
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                        <label for="id_categoria" class="form-label la">Categor&#237;a:</label>
                        <select class="form-control js-example-theme-single " name="id_categoria" id="id_categoria" >
                            <option disabled selected>---Seleccione---</option>
                            @foreach ($categoria as $categorias )

                            <option {{old('id_categoria')==$categorias->id ? 'selected' : ' '}} value="{{$categorias->id}}"> {{$categorias->nombre}}</option>

                            @endforeach
                        </select>
                        @error('id_categoria')
                        <small class="text-danger">{{ 'El campo  categoria es obligatorio.' }}</small>
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
