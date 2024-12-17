<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <br>
            <ul>
                @guest
                    <li>
                        <a href="#"> Diplomado</a>
                        <ul>
                            <li><a href="{{ route('perfil.index') }}">Comprar</a></li>
                            <li><a href="{{ route('landing.diplomado') }}">Mas Informacion</a></li>
                        </ul>
                    </li>

                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Inicio de sesión</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registro</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a href="#"> Diplomado</a>
                        <ul>
                            <li><a href="{{ route('perfil.index') }}">Comprar</a></li>
                            <li><a href="{{ route('landing.diplomado') }}">Mas Informacion</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">{{ Auth::user()->name }}</a>
                        <ul>
                            <li><a href="{{ route('perfil.index') }}">Mi cuenta</a></li>
                            <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    href="{{ route('logout') }}">Cerrar sesión</a></li>
                        </ul>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                @endguest
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    @yield('js')

</body>

</html>
