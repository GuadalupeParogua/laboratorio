@extends('layouts.template')

@section('header')clinicas @endsection

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <p class="mb-4"></p>       
                    <a href="{{'/clinicas/create'}}" class="btn btn-success btn-icon-split">
                        <span class="text">Registrar Clinica</span>
                    </a>
                    <div class="my-2"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de Clinicas</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($clinica as $clinica)
                                        <tr>                                           
                                            <td>{{$clinica->id}}</td>
                                            <td>{{$clinica->nombre}}</td>
                                            <td>{{$clinica->direccion}}</td>
                                            <td>{{$clinica->telefono}}</td>
                                            <td>
                                                <a href="{{route('clinicas.edit', $clinica->id)}}" class="btn btn-info btn-icon-split"
                                                style="height: 35px">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Editar</span>
                                                </a>
                                                <div class="my-2"></div>
                                                <form action="{{route('clinicas.destroy', $clinica->id)}}" method="POST" 
                                                    class="btn btn-danger btn-icon-split"
                                                style="height: 35px; width: 110px;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-trash"></i>
                                                    </span>
                                                    <input type="submit" value="Eliminar"  class="btn btn-danger btn-icon-split">
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