@extends('layouts.template')

@section('header')Odontologo @endsection

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    
                    <p class="mb-4"></p>       
                    <a href="{{route('odontologos.create')}}" class="btn btn-success btn-icon-split">
                        <span class="text">Registrar odontologo</span>
                    </a>
                    <div class="my-2"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de odontologos</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table ui celled table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nrº</th>
                                            <th>CI</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Telefono</th>
                                            <th>Direccion</th>
                                            <th>Correo</th>
                                            <th>Especialidad</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nrº</th>
                                            <th>CI</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Telefono</th>
                                            <th>Direccion</th>
                                            <th>Correo</th>
                                            <th>Especialidad</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i = 1;
                                            
                                        @endphp
                                        

                                            @foreach ($persona as $personas)
                                
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <th>{{$personas->ci}}</th>
                                                <th>{{$personas->nombre}}</th>
                                                <th>{{$personas->apellido}}</th>
                                                <th>{{$personas->telefono}}</th>
                                                <th>{{$personas->direccion}}</th>
                                                <th>{{$personas->correo}}</th><!--nullable-->
                                                <th>{{$personas->odontologo->especialidad}}</th><!--unique-->
                                                <td>
                                                    <form action="{{ route('odontologos.destroy', [$personas->id]) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <a href="{{ route('odontologos.edit', [$personas->id]) }}"
                                                            class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>
                                                        <button class="btn btn-danger btn-sm fas fa-trash-alt  cursor-pointer"
                                                            onclick="return confirm('¿ESTA SEGURO QUE DESEA ELIMINAR?')" value="Borrar"></button>
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