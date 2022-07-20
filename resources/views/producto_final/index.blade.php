@extends('layouts.template')

@section('header')Productos @endsection

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    
                    <p class="mb-4"></p>       
                    <a href="{{route('productos.create')}}" class="btn btn-success btn-icon-split">
                        <span class="text">Registrar Productos</span>
                    </a>
                    <div class="my-2"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de productos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nrº</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Categoria</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nrº</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Categoria</th>

                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i = 1;
                                                
                                        @endphp
                                        

                                            @foreach ($producto_final as $producto)
                                            
                                            <tr>
                                                <td>{{ $i++ }}</td>

                                                <th>{{$producto->nombre}}</th>
                                                <th>{{$producto->descripcion}}</th>
                                                <th>{{$producto->precio}}</th>
                                                <th>{{$producto->categoria->nombre}}</th>
                                                <td>
                                                    <form action="{{ route('productos.destroy', [$producto->id]) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="{{ route('productos.edit', [$producto->id]) }}"
                                                            class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>
                                                        <button class="btn btn-danger btn-sm fas fa-trash-alt  cursor-pointer"
                                                            onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar"></button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->    
@endsection