@extends('layouts.template')

@section('header')Editar clínica @endsection

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Editar Clinica</h1>
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
                            <!-- Formulario editar: -->
                            <form class="user" action="{{ route('clinicas.update', $clinica) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nombre"
                                        name="nombre" placeholder="Nombre de la clínica" value="{{$clinica->nombre}}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="direccion"
                                        name="direccion" placeholder="Direccion" value="{{$clinica->direccion}}">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-user" id="telefono"
                                        name="telefono" placeholder="Telefono" value="{{$clinica->telefono}}">
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
