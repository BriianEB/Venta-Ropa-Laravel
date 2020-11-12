@extends('auth/layout')

@section('title', 'Iniciar sesión')

@section('content')
    <div class="form-container">
        <h1>Iniciar sesión</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="form-group">
                <label asp-for="name">Nombre de usuario</label>
                <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label asp-for="password">Contraseña</label>
                <input id="password" name="password" type="password" class="form-control" value="{{ old('password') }}">
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="button-container">
                <button type="submit" class="boton" name="guardar">Iniciar sesión</button>
            </div>
        </form>
        <div style="margin-top: 1rem;">
            ¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate</a>
        </div>
    </div>
@endsection
