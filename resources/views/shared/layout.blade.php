<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="page-container">
        <header>
            <nav class="nav">
                <div class="nav-logo">
                    <a href="/">
                        <img src="{{ asset('images/logo.png') }}" class="logo">
                    </a>
                </div>
                <div class="nav-menu">
                    @include('shared/login')
                </div>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <div class="footer-wrapper">
                <hr>
                <div class="footer-content">
                    <div class="footer-info">
                        <span>© Copyright {{ date('Y') }}</span>
                    </div>
                    <div class="footer-options">
                        <a href="/">Inicio</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
