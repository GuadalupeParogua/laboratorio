@extends('layouts.template')

@section('header')Registrar nuevo odontologo @endsection

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrar odontologo</h1>
                            </div>
                            {{ csrf_field() }}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- personas.create=stores-->
                            <form class="user"  action="{{ route('odontologos.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        name="ci" placeholder="Ci" value="{{ old('ci') }}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            name="nombre" placeholder="Nombres" value="{{ old('nombre') }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            name="apellido" placeholder="Apellidos" value="{{ old('apellido') }}">
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-user" id="exampleInputEmail"
                                        name="telefono" placeholder="Telefono" value="{{ old('telefono') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        name="direccion" placeholder="Direccion" value="{{ old('direccion') }}">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        name="correo" placeholder="Correo" value="{{ old('correo') }}">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" class="form-control form-control-user" id="exampleInputEmail"
                                        name="tipo" value="O">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 mt-3">
                                    <label for="id_unidadMedida" class="form-label la">Clinica:</label>
                                    <select class="form-control js-example-theme-single " name="id_clinica" id="id_clinica" >
                                        <option disabled selected>---Seleccione---</option>
                                    @foreach ($clinica as $clinicas )
            
                                    <option {{old('id_clinica')==$clinicas->id ? 'selected' : ' '}} value="{{$clinicas->id}}"> {{$clinicas->nombre}}</option>
            
                                    @endforeach
                                    </select>
                                </div><br>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        name="especialidad" placeholder="Especialidad" value="{{ old('especialidad') }}">
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="submit" class="btn btn-facebook btn-user btn-block" value="Aceptar">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <a href="{{ route('odontologos.index') }}"
                                            class="btn btn-primary btn-user btn-block">
                                            Cancelar
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
