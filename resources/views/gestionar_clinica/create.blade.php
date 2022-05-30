@extends('layouts.template')

@section('header')Registrar nueva Clinica @endsection

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registrar Clinica</h1>
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
                            <!-- Formulario registrar: -->
                            <form class="user" action="{{ route('clinicas.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nombre"
                                        name="nombre" placeholder="Nombre de la clínica" value="{{ old('nombre') }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="direccion"
                                        name="direccion" placeholder="Direccion" value="{{ old('direccion') }}">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-user" id="telefono"
                                        name="telefono" placeholder="Telefono" value="{{ old('telefono') }}">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="submit" class="btn btn-facebook btn-user btn-block" value="Aceptar">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <a href="{{ route('menu') }}"
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

