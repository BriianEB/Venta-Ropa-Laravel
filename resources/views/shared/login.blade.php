@auth
    <form action="{{ route('logout') }}" method="post" style="display: flex;">
        @csrf
        <div class="boton">Bienvenido {{ Auth::user()->name }}</div>
        <button type="submit" class="boton">Cerrar sesión</button>
    </form>
@else
    <a href="{{ route('login') }}" class="boton">Iniciar sesión</a>
@endauth
