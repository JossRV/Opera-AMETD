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
                                    src="https://ametd.online/assets/img/slides/logoAmetd.png">
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
                                            <a data-hash class="nav-link" href="{{ route('home') }}"
                                                data-hash-offset="0" data-hash-offset-lg="68">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68"
                                                href="#programa">
                                                Programa
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68"
                                                href="#profesores">
                                                Profesores
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68"
                                                href="#contact">
                                                Contacto
                                            </a>
                                        </li>
                                        @guest
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68"
                                                    href="#registro">
                                                    Registro
                                                </a>
                                            </li>
                                        @else
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68"
                                                    href="{{ route('landing.diplomado') }}">
                                                    Más información
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68"
                                                    href="{{ route('perfil.index') }}">
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
                                    {{-- <a href="#" class="header-nav-features-toggle" aria-label="">
                                            <i class="far fa-user text-color-light fa-2x"></i>
                                        </a> --}}
                                    <a style="cursor: pointer" class="prueba1234">
                                        <i class="far fa-user text-color-light"></i>
                                    </a>
                                    <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right"
                                        id="headerTopUserDropdown">
                                        <i style="float: right;font-size:20px;cursor:pointer"
                                            class="fa-solid fa-xmark cerrarmodal"></i>
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
                                                        <input type="email" name="email" value="{{ old('email') }}"
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
                                                        <div class="col-12 col-md-4">
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
                                                        </div>
                                                        <div class="col-6 col-md-4">
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
                                                        </div>
                                                        <div class="col-6 col-md-4">
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
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-6 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label mb-1 text-2 opacity-8">
                                                                    Especialidad *
                                                                </label>
                                                                <select
                                                                    class="form-control form-select form-control-lg @error('especialidad') is-invalid @enderror"
                                                                    name="especialidad" required
                                                                    autocomplete="especialidad">
                                                                    <option value="" selected>
                                                                        Seleccionar
                                                                    </option>
                                                                    <hr>
                                                                    @foreach ($especialidades as $especialidad)
                                                                        <option value="{{$especialidad->id}}" {{old('especialidad') == $especialidad->id ? 'seelcted' : ''}}>
                                                                            {{$especialidad->especialidad}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                @error('especialidad')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    <strong>{{ $message }}</strong>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
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
                                                        <div class="col-12 col-md-4">
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
    <style>
        .signup-form {
            width: 770px;
        }

        @media screen and (max-width:1200px) {
            .signup-form {
                width: 420px;
            }
        }

        @media screen and (max-width:767px) {
            .signup-form {
                width: 100% !important;
            }

            .signin-form {
                width: 100% !important;
            }


        }
    </style>
</header>
