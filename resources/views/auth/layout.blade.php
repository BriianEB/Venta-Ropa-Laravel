<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="page-container">
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
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
