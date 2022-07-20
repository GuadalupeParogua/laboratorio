@extends('layouts.template')

@section('header')Modificar producto @endsection

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Modificar datos del producto</h1>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="user" action="{{ route('productos.update', [$producto_final->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <form class="user"  action="{{ route('productos.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                
                               
                                <div class="form-group row">
                                    <!--div class="col-sm-6 mb-3 mb-sm-0"-->
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            name="nombre" placeholder="Nombre" value="{{ $producto_final->nombre }}" required>
                                    <!--/div-->
                                    <br>
                                    
                                </div>
                               <div class="form-group">
                                        <!--input type="text" class="form-control form-control-user" id="exampleLastName"
                                            name="apellido" placeholder="Apellidos" value=""-->
                                        <textarea class="form-control form-control-user" id="exampleInputEmail"
                                            name="descripcion" placeholder="Descripcion">{{ $producto_final->descripcion }}</textarea>
                                    </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control form-control-user" id="exampleInputEmail"
                                        name="precio" placeholder="Precio" value="{{ $producto_final->precio }}">
                                </div>
                    
                                <div class="col-xs-12 col-sm-12  mt-3">
                                    <label for="id_categoria" class="form-label la">Categor&#237;a:</label>
                                    <select class="form-control js-example-theme-single " name="id_categoria" id="id_categoria" >
                                        <option disabled selected>---Seleccione---</option>
                                        @foreach ($categoria as $categorias )
            
                                        <option {{$producto_final->id_categoria==$categorias->id ? 'selected' : ' '}} value="{{$categorias->id}}"> {{$categorias->nombre}}</option>
            
                                        @endforeach
                                    </select>
                                    @error('id_categoria')
                                    <small class="text-danger">{{ 'El campo  categoria es obligatorio.' }}</small>
                                    @enderror
                                </div>
                                <br>
                             
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="submit" class="btn btn-facebook btn-user btn-block" value="Aceptar">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <a href="{{ route('producto_final.index') }}" class="btn btn-primary btn-user btn-block">
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