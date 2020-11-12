@extends('shared/layout')

@section('title', 'Reporte de ventas')


@section('content')
    <h2>Reporte de ventas</h2>

    <table class="tabla">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Promedio de venta del producto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reporteVentas['ventas'] as $venta)
                <tr>
                    <td>{{ $venta->producto }}</td>
                    <td>{{ $venta->cantidad }}</td>
                    <td>${{ $venta->total }}</td>
                    <td>${{ $venta->promedio_producto }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4"><span>Total ganado en el día:</span> ${{$reporteVentas['total']}}</td>
            </tr>
        </tfoot>
    </table>
@endsection
