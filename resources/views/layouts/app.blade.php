<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VIII DIPLOMADO TEÓRICO PRÁCTICO DE INTERVENCIONISMO EN DOLOR AMETD 2025</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-shop.css') }}">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/skins/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body>
    <header id="header" class="header-dark header-effect-shrink"
        data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 bg-dark box-shadow-none">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="AMETD" width="142"
                                        src="https://ametd.online/img/slides/logoAmetd.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div
                                class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                <div
                                    class="header-nav-main header-nav-main-font-lg header-nav-main-font-lg-upper-2 header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="nav-link">
                                                <a data-hash class="nav-link" href="{{route('home')}}">
                                                    Home
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="68" href="#programa">
                                                    Programa
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="68" href="#profesores">
                                                    Profesores
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0"
                                                    data-hash-offset-lg="68" href="#contact">
                                                    Contacto
                                                </a>
                                            </li>
                                            @guest
                                                <li>
                                                    <a class="nav-link" data-hash data-hash-offset="0"
                                                        data-hash-offset-lg="68" href="#registro">
                                                        Registro
                                                    </a>
                                                </li>
                                            @else
                                                <li>
                                                    <a class="nav-link" data-hash data-hash-offset="0"
                                                        data-hash-offset-lg="68" href="{{ route('landing.diplomado') }}">
                                                        Más información
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" data-hash data-hash-offset="0"
                                                        data-hash-offset-lg="68" href="{{ route('perfil.index') }}">
                                                        Comprar
                                                    </a>
                                                </li>
                                            @endguest

                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                    data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                                <div
                                    class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                    <div class="header-nav-feature header-nav-features-user d-inline-flex mx-2 pe-2 signin"
                                        id="headerAccount">
                                        <a href="#" class="header-nav-features-toggle" aria-label="">
                                            <i class="far fa-user text-color-light fa-2x"></i>
                                        </a>
                                        <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right"
                                            id="headerTopUserDropdown">
                                            @guest
                                                {{-- iniciar sesión --}}
                                                <div class="signin-form">
                                                    <h5 class="text-uppercase mb-4 font-weight-bold text-3">
                                                        Inicie sesión
                                                    </h5>
                                                    <form action="{{ route('login') }}" method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="form-group">
                                                            <label class="form-label mb-1 text-2 opacity-8">
                                                                Correo *
                                                            </label>
                                                            <input type="email" name="email"
                                                                value="{{ old('email') }}"
                                                                class="form-control form-control-lg @error('email') is-invalid @enderror">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label mb-1 text-2 opacity-8">
                                                                Contraseña *
                                                            </label>
                                                            <div class="input-group mb-3">
                                                                <input type="password"
                                                                    class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                                    name="password" type="password"
                                                                    aria-describedby="basic-addon2">
                                                                <span class="input-group-text" id="basic-addon2">
                                                                    <i class="fa-regular fa-eye" id="ver-password"></i>
                                                                </span>
                                                            </div>
                                                            @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="row pb-2">
                                                            <div class="form-group form-check col-lg-6 ps-1">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        id="rememberMeCheck">
                                                                    <label class="form-label custom-control-label text-2"
                                                                        for="rememberMeCheck">Recordarme</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-lg-6 text-end">
                                                                <a class="text-uppercase text-1 font-weight-bold text-color-dark"
                                                                    id="headerRecover" href="#">
                                                                    ¿Olvido su contraseña?
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <button class="btn btn-primary" type="submit">
                                                                        Entrar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="extra-actions">
                                                            <p>
                                                                ¿Aún no tiene cuenta?
                                                                <a href="#" id="headerSignUp"
                                                                    class="text-uppercase text-1 font-weight-bold text-color-dark">
                                                                    Regístrese aquí
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </form>
                                                </div>
                                                {{-- registrarse --}}
                                                <div class="signup-form">
                                                    <h5 class="text-uppercase mb-4 font-weight-bold text-3">Registro</h5>
                                                    <form method="POST" action="{{ route('register') }}">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-1 text-2 opacity-8">
                                                                        Nombre *
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                                        name="name" value="{{ old('name') }}">
                                                                    @error('name')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label mb-1 text-2 opacity-8">
                                                                        Apellido paterno *
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg @error('paterno') is-invalid @enderror"
                                                                        name="paterno" value="{{ old('paterno') }}">
                                                                    @error('paterno')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label mb-1 text-2 opacity-8">
                                                                        Apellido materno *
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control form-control-lg @error('materno') is-invalid @enderror"
                                                                        name="materno" value="{{ old('materno') }}">
                                                                    @error('materno')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-1 text-2 opacity-8">
                                                                        Especialidad *
                                                                    </label>
                                                                    <select
                                                                        class="form-control form-select form-control-lg @error('especialidad') is-invalid @enderror"
                                                                        name="especialidad" required
                                                                        autocomplete="especialidad">
                                                                        <option value="">
                                                                            Seleccionar
                                                                        </option>
                                                                        <hr>
                                                                        <option value="1">
                                                                            Médico Especialista
                                                                        </option>
                                                                        <option value="2">
                                                                            Médico Residente
                                                                        </option>
                                                                        <option value="3">
                                                                            Otros profesionales de la salud
                                                                        </option>
                                                                    </select>
                                                                    @error('especialidad')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        <strong>{{ $message }}</strong>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label mb-1 text-2 opacity-8">
                                                                        Correo *
                                                                    </label>
                                                                    <input type="email"
                                                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                                        name="email" value="{{ old('email') }}">
                                                                    @error('email')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="form-label mb-1 text-2 opacity-8">
                                                                        Teléfono *
                                                                    </label>
                                                                    <input type="number"
                                                                        class="form-control form-control-lg @error('telefono') is-invalid @enderror"
                                                                        name="telefono" value="{{ old('telefono') }}">
                                                                    @error('telefono')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-1 text-2 opacity-8">
                                                                        Contraseña *
                                                                    </label>
                                                                    <input id="password" type="password"
                                                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                                        name="password">
                                                                    @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-1 text-2 opacity-8">
                                                                        Repetir contraseña *
                                                                    </label>
                                                                    <input id="password-confirm" type="password"
                                                                        name="password_confirmation"
                                                                        class="form-control form-control-lg">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Registrarme
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="extra-actions">
                                                            <p>
                                                                ¿Ya tiene una cuenta?
                                                                <a href="#" id="headerSignIn"
                                                                    class="text-uppercase text-1 font-weight-bold text-color-dark">
                                                                    Inicie sesión
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </form>
                                                </div>
                                                {{-- recuperar contraseña --}}
                                                <div class="recover-form">
                                                    <h5 class="text-uppercase mb-2 pb-1 font-weight-bold text-3">
                                                        Recuperar mi contraseña
                                                    </h5>
                                                    <p class="text-2 mb-4">
                                                        Ingrese el email con el que se registro, le
                                                        enviaremos una liga para reestablecer su contraseña.
                                                    </p>
                                                    <form method="POST" action="{{ route('recuperar.cuenta') }}">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="form-group">
                                                            <label class="form-label mb-1 text-2 opacity-8">
                                                                Correo electrónico *
                                                            </label>
                                                            <input type="email" class="form-control form-control-lg"
                                                                name="mail">
                                                        </div>
                                                        <div class="actions">
                                                            <div class="row">
                                                                <div class="col d-flex justify-content-end">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Enviar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="extra-actions">
                                                            <p>
                                                                ¿Ya tiene una cuenta?
                                                                <a href="#" id="headerRecoverCancel"
                                                                    class="text-uppercase text-1 font-weight-bold text-color-dark">
                                                                    Inicie sesión
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </form>
                                                </div>
                                            @else
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li>
                                                        <a class="nav-link" data-hash data-hash-offset="0"
                                                            data-hash-offset-lg="68" href="{{ route('perfil.index') }}">
                                                            Mi cuenta
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                            class="nav-link" data-hash data-hash-offset="0"
                                                            data-hash-offset-lg="68" href="{{ route('logout') }}">
                                                            Cerrar sesión
                                                        </a>
                                                    </li>
                                                </ul>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="footer" class="mt-0">
        <div class="footer-copyright">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col d-flex align-items-center justify-content-center">
                        <p><strong>AMETD</strong> - © Copyright 2024. <a href="https://operamx.events/"
                                target="_blank">OperaMX</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jquery -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Vendor -->
    <script src="{{ asset('assets/vendor/plugins/js/plugins.min.js') }}"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/views/view.contact.js') }}"></script>
    <!-- Theme Custom -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ asset('assets/js/theme.init.js') }}"></script>
    <!-- Examples -->
    <script src="{{ asset('assets/js/examples/examples.portfolio.js') }}"></script>

    @yield('js')
</body>

</html>
