@extends('shared/layout')

@section('title', 'Nueva venta')

@section('content')
    <div class="form-container">
        <h2>Agregar nueva venta</h2>
        <form action="/ventas/guardar" method="post">
            @csrf

            <div class="form-group">
                <label for="producto">Producto</label>
                <select id="producto" name="producto" class="form-control">
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}" {{ (old('producto') == $producto->id) ? 'selected' : '' }} >{{ $producto->nombre }}</option>
                    @endforeach
                </select>
                <span asp-validation-for="Producto"></span>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{ old('cantidad') }}">
                @error('cantidad')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="button-container">
                <button type="submit" class="boton" name="guardar">Guardar</button>
            </div>
        </form>
    </div>
@endsection
