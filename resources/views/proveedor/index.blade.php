@extends('layouts.template')
@section('content')


    <a href="{{ route('proveedor.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Agregar Provedor</a>
          
    <table id="example" class="table ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Nrº</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($proveedor as $proveedores)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $proveedores->nombre }}</td>
                    <td>{{ $proveedores->telefono }}</td>
                    <td>{{ $proveedores->direccion }}</td>
                    <td>
                        <form action="{{ route('proveedor.destroy', [$proveedores->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('proveedor.edit', [$proveedores->id]) }}"
                                class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>



                            <button class="btn btn-danger btn-sm fas fa-trash-alt  cursor-pointer"
                                onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar"></button>



                        </form>


                    </td>
                </tr>
            @endforeach


            </tfoot>
    </table>
@endsection
