@extends('layouts.template')


@section('content')
<a href="{{ route('orden_pedido.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Agregar Pedido</a>

{{-- <button type="button" class="btn btn-sm btn-light float-right" data-toggle="modal" data-target="#exampleModalCenterTitle"
style="background-color:#fbaf32">
<span>
    <i class="fa fa-plus " style="color: #f8f8f8"></i>
</span>
 Lista de pagos
</button> --}}

<a href="{{ route('pago.index') }}"> <button type="button" class="btn btn-sm btn-light float-right"
    style="background-color:#fbaf32">
    <span>
        <i class="fa fa-plus " style="color: #f8f8f8"></i>
    </span>
  Lista de pagos
</button></a>

<table id="example" class="table ui celled table" style="width:100%">
    <thead>
        <tr>
            <th>Nrº</th>
            <th>Encargado</th>
            <th>Odontologo</th>
            <th>Detalle</th>
            <th>Fecha Pedido</th>
            <th>Fecha Entrega</th>
            <th>Estado</th>

            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($orden as $ordenes)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $ordenes->encargado->usuario }}</td>
                <td>{{ $ordenes->Odontologo->nombre }}</td>
                <td>{{ $ordenes->detalle }}</td>
                <td>{{ $ordenes->fechaPedido }}</td>
                <td>{{ $ordenes->fechaEntrega }}</td>

                @if ($ordenes->estado == 1)
                    <td class="badge bg-warning mt-3" style="color:white;">Pendiente</td>
                @else
                    <td class="badge bg-success mt-3" style="color:white;">Entregado</td>
                @endif
               <td>
                    {{--  <div>
                        <a href="{{ route('lote.pdf', $ordenes->id) }}"
                            class="btn btn-danger btn-sm fa fa-id-badge  cursor-pointer">
                            <span><i class=" " style="color: #fbaf32"></i> </span>
                            &nbsp;
                        </a>
                    </div>--}}


                    <a href="{{ route('orden_pedido.edit', [$ordenes->id]) }}"
                        class="btn btn-primary btn-sm fas fa-edit  cursor-pointer"></a>

                </td>
            </tr>
        @endforeach
    </tbody>


    </tfoot>
</table>

@endsection
