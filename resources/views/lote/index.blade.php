@extends('layouts.template')
@section('content')
<h2>Lista de solicitudes</h2>
    <table id="example" class="table ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Nrº</th>
                <th>Materia Prima</th>
                <th>Cantidad</th>
                <th>Fecha de compra</th>
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
                    <td>{{ $lotes->f_vencimiento }}</td>
                    <td>
                        <div class="fa-pull-left " style="margin-left: 5px;">
                            <a href="{{ route('lote.pdf', $lotes->id) }}" class="btn btn-sm btn-light">
                                <span><i class="fa fa-id-badge " style="color: #fbaf32"></i> </span>
                                &nbsp;Imprimir Solicitud
                            </a>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>


        </tfoot>
    </table>
@endsection
