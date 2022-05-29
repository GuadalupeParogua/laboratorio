@extends('layouts.template')
@section('content')
    <h2>Lista de solicitudes</h2>
    <table id="example" class="table ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Nrº</th>
                <th>Materia Prima</th>
                <th>Cantidad</th>
                <th>Precio Compra</th>
                <th>Fecha de compra</th>
                <th>Fecha de Entrega</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($lote as $lotes)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $lotes->Materia_Prima->nombre }}</td>
                    <td>{{ $lotes->cantidad }}</td>
                    <td>{{ $lotes->p_compra }}</td>
                    <td>{{ $lotes->f_vencimiento }}</td>
                    <td>{{ $lotes->f_entrega }}</td><br>
                    @if ($lotes->estado == 1)
                        <td class="badge bg-warning mt-3" style="color:white;">Pendiente</td>
                    @else
                        <td class="badge bg-success mt-3" style="color:white;">Entregado</td>
                    @endif
                    <td>
                        <div>
                            <a href="{{ route('lote.pdf', $lotes->id) }}"
                                class="btn btn-danger btn-sm fa fa-id-badge  cursor-pointer">
                                <span><i class=" " style="color: #fbaf32"></i> </span>
                                &nbsp;
                            </a>
                        </div>


                        <a href="{{ route('lote.edit', [$lotes->id]) }}"
                            class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>

                    </td>
                </tr>
            @endforeach
        </tbody>


        </tfoot>
    </table>
@endsection
