@extends('auth/layout')

@section('title', 'Registrarse')

@section('content')
    <div class="form-container">
        <h1>Registrarse</h1>
        <form action="{{ route('register') }}" method="post">
            @csrf

            <div class="form-group">
                <label asp-for="name">Nombre de usuario</label>
                <input id="name" name="name" type="text" class="form-control">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label asp-for="password">Contraseña</label>
                <input id="password" name="password" type="password" class="form-control">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="button-container">
                <button type="submit" class="boton" name="guardar">Registrarse</button>
            </div>
        </form>
    </div
@endsection
