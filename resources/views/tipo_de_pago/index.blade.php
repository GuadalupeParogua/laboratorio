@extends('layouts.template')

@section('header')Tipos de Pago @endsection

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <p class="mb-4"></p>       
                    <a href="{{route('tipo_de_pago.create')}}" class="btn btn-success btn-icon-split">
                        <span class="text">Agregar Tipo de pago</span>
                    </a>
                    <div class="my-2"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Lista de tipo de pago</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table ui celled table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nrº</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nrº</th>
                                            <th>Nombre</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp 
                                        @foreach ($tipo_de_pagos as $tipo_de_pago)
                                        <tr> 
                                                                                     
                                            <td>{{$i++}}</td>
                                            <td>{{$tipo_de_pago->tipo}}</td>
                                            <td>
                                                <form action="{{ route('tipo_de_pago.destroy', [$tipo_de_pago->id]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('tipo_de_pago.edit', [$tipo_de_pago->id]) }}"
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