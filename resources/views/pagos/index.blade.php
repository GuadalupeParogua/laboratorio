@extends('layouts.template')


@section('content')
    <a href="{{ route('pago.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Agregar Pago</a>
    <table id="example" class="table ui celled table" style="width:100%">
        <thead>
            <tr>
                <th>Nrº</th>
                <th>Fecha</th>

                <th>Tipo de Pago</th>
                <th>Order Pedido</th>
                <th>Estado de Pago</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($pago as $pagos)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $pagos->fecha }}</td>

                    <td>{{ $pagos->tipoPago->tipo }}</td>
                    <td>{{ $pagos->orden_de_pedido->id }}</td>
                    @if ($pagos->estado == 1)
                        <td class="badge bg-success mt-3" style="color:white;">Saldo Cancelado</td>
                    @else
                        <td class="badge bg-warning mt-3" style="color:white;">Saldo Pendiente</td>
                    @endif

                    <td>
                       


                        <a href="{{ route('pago.edit', [$pagos->id]) }}"
                            class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>

                    </td>
                </tr>
            @endforeach
        </tbody>


        </tfoot>
    </table>
@endsection
