@extends('layouts.template')

@section('content')
@extends('layouts.template')

@section('content')
    <div class="card shadow formulario">
        <div class="card-body">
            <form action="{{ route('area.update',[$areas->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 info" style="text-align: center">Formulario</div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <label for="nombre" class="form-label la">Nombre:</label>
                        <input name="nombre" type="text" class="form-control shadow-sm" id="nombre" for="nombre"
                            value="{{$areas->nombre}}" />
                        @error('nombre')
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

@endsection
