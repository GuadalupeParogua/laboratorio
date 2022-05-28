@extends('layouts.template')
@section('content')
    <a href="{{ route('mprimas.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Agregar Materia Prima</a>

    <table id="example" class="table ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Nrº</th>
                <th>Nombre</th>
                <th>Precio Venta</th>
                <th>Precio Compra</th>
                {{-- foraneas --}}
                <th>Unidad Medida</th>
                <th>Area</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($mprima as $mprimas)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $mprimas->nombre }}</td>
                    <td>{{ $mprimas->p_venta }}</td>
                    <td>{{ $mprimas->p_compra }}</td>
                    <td>{{ $mprimas->UniMedida->nombre }}</td>
                    <td>{{ $mprimas->AreAlmacen->nombre }}</td>
                    <td>{{ $mprimas->categoria->nombre }}</td>
                    <td>
                        <form action="{{ route('mprimas.destroy', [$mprimas->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('mprimas.edit', [$mprimas->id]) }}"
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
