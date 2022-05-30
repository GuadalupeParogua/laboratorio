@extends('layouts.template')
@section('content')


    <a href="{{route('unidadmedida.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Agregar unidad</a>
          
    <table id="example" class="table ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
               <th>Abreviatura</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($unidad as $unidades)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $unidades->nombre }}</td>
                    <td>{{ $unidades->abreviatura }}</td>
            <td>
                        <form action="{{ route('unidadmedida.destroy', [$unidades->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{ route('unidadmedida.edit', [$unidades->id]) }}"
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
