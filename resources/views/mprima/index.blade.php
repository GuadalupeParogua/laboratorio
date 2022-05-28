@extends('layouts.template')
@section('content')
    <a href="{{ route('mprimas.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Agregar Materia Prima</a>

    <button type="button" class="btn btn-sm btn-light float-right" data-toggle="modal" data-target="#exampleModalCenterTitle"
        style="background-color:#fbaf32">
        <span>
            <i class="fa fa-plus " style="color: #f8f8f8"></i>
        </span>
        Solicitar Compra
    </button>

    <a href="{{ route('lote.index') }}"> <button type="button" class="btn btn-sm btn-light float-right"
            style="background-color:#fbaf32">
            <span>
                <i class="fa fa-plus " style="color: #f8f8f8"></i>
            </span>
            Lista de solicitudes
        </button></a>

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

    <div class="modal fade" id="exampleModalCenterTitle" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #fbaf32; color: white">
                    <h5 class="modal-title" id="exampleModalLongTitle">Solicitar Compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('lote.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">

                        <div class="col-xs-6 col-sm-6 col-md-12 mt-3">
                            <label style="color: #fbaf32" for="ci" class="form-label la">Materia Prima:</label>
                            <select name="lista_material" id="lista_material" class="form-control shadow-sm" required>
                                @foreach ($lista_material as $lista_materials)
                                    <option {{ old('lista_materials') == $lista_materials->id ? 'selected' : ' ' }}
                                        value="{{ $lista_materials->id }} ">{{ $lista_materials->nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 mt-3">
                            <label style="color: #fbaf32" for="cantidad" class="form-label la">Cantidad</label>
                            <input name="cantidad" type="text" class="form-control
                            shadow-sm"
                                id="cantidad" for="cantidad" value="{{ old('cantidad') }}">
                            @error('cantidad')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 mt-3">
                            <label style="color: #fbaf32" for="fecha_c" class="form-label la">Fecha de Compra:</label>
                            <input name="fecha_c" type="date" class="form-control shadow-sm" id="fecha_c" for="fecha_c"
                                value="{{ old('fecha_c') }}" />
                            @error('fecha_c')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" style="background: #08a129; border-color: #fbaf32;">
                            Enviar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
