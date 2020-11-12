@extends('shared/layout')

@section('title', 'Agregar producto')

@section('content')
    <div class="form-container">
        <h2>Agregar nuevo producto</h2>
        <form action="/productos/guardar" method="post">
            @csrf
            
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre') }}">
                @error('nombre')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input id="precio" name="precio" type="number" class="form-control" value="{{ old('precio') }}">
                @error('precio')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="button-container">
                <button type="submit" class="boton" name="guardar">Guardar</button>
            </div>
        </form>
    </div>
@endsection
