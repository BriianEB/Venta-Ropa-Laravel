@extends('shared/layout')

@section('title', 'Venta de Ropa')

@section('content')
    <ul class="main-menu">
          <li>
              <a href="/productos/crear" class="boton">Nuevo producto</a>
          </li>
          <li>
              <a href="/ventas/crear" class="boton">Formulario de venta</a>
          </li>
          <li>
              <a href="/ventas/reporte" class="boton">Ver reporte de venta</a>
          </li>
      </ul>
@endsection
