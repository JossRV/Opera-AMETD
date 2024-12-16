@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                @if (session('error'))
                    <div class="alert alert-danger">
                        <strong>{{ session('error') }}</strong>
                    </div>
                @endif
                @if (session('alert'))
                    <div class="alert alert-danger">
                        <strong>{{ session('alert') }}</strong>
                    </div>
                @endif
                @if ($errors->has('email.unique'))
                    <div class="alert alert-danger">
                        <strong> Revisa los campos porfavor o comunicate por este medio soporte@fmcaac.mx para revisar tu
                            caso </strong>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col py-4">
                <div class="card" style="background-color: transparent;">
                    <div class="card-header">
                        <div class="float-start fs-4 py-2 titl">
                            Rellene el formulario para crear su cuenta
                        </div>
                        <div class="float-end py-1">
                            <a href="/" class="btn" style="background-color:#3A3DDD;color:white;font-weight:bold">
                                {{-- <i class="fa-solid fa-angles-left"></i> --}}
                                Regresar
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
                            id="form-register">
                            {{-- <form method="POST" action="{{ route('register.create') }}" enctype="multipart/form-data"> --}}
                            @csrf
                            @method('POST')
                            {{-- datos personales --}}
                            <span
                                style="color:rgb(255, 255, 255); background-color:#3A3DDD;padding:5px 15px ;border-radius:10px;margin-bottom:5px;font-weight:bold"
                                class="fs-6">Datos personales</span>
                            {{-- <p class="mt-3 fs-5" style="padding-left:2px">
                                <b>Campos obligatorios</b>
                                <i style="padding-left:2px;color:red" class="fa-solid fa-asterisk fa-2xs fw-bold"></i>
                            </p> --}}
                            <hr style="padding:10px !important">
                            <div class="row my-3">
                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="nombre" class="col-form-label">Nombre(s) <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="nombre" type="text"
                                        class="form-control @error('nombre') is-invalid @enderror text-capitalize"
                                        name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="apellido_paterno" class="col-form-label">Apellido paterno
                                        <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                    </label>
                                    <input id="apellido_paterno" type="text"
                                        class="form-control @error('apellido_paterno') is-invalid @enderror text-capitalize"
                                        name="apellido_paterno" value="{{ old('apellido_paterno') }}" required
                                        autocomplete="apellido_paterno">

                                    @error('apellido_paterno')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="apellido_materno" class="col-form-label">Apellido materno
                                        <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                    </label>
                                    <input id="apellido_materno" type="text"
                                        class="form-control @error('apellido_materno') is-invalid @enderror text-capitalize"
                                        name="apellido_materno" value="{{ old('apellido_materno') }}" required
                                        autocomplete="apellido_materno">

                                    @error('apellido_materno')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="telefono" class="col-form-label">Celular
                                        <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                    </label>
                                    <input id="telefono" type="number" required
                                        class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                        value="{{ old('telefono') }}" autocomplete="telefono">

                                    @error('telefono')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <style>
                                    #telefono[type=number]::-webkit-inner-spin-button,
                                    #telefono[type=number]::-webkit-outer-spin-button {
                                        -webkit-appearance: none;
                                        margin: 0;
                                    }

                                    #telefono[type=number] {
                                        -moz-appearance: textfield;
                                    }
                                </style>
                                <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="email" class="col-form-label">Correo electrónico <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror text-lowercase"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="pais" class="col-md-4 col-form-label">País <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <select id="pais" type="select"
                                        class="form-select @error('pais') is-invalid @enderror text-capitalize"
                                        name="pais" required autocomplete="pais">
                                        <option value="">Seleccione</option>
                                        <hr>
                                        @foreach ($paises as $pais)
                                            <option value="{{ $pais->id }}"
                                                {{ old('pais') == $pais->id ? 'selected' : '' }}>{{ $pais->pais }} |
                                                {{ $pais->codigo }}</option>
                                        @endforeach
                                    </select>

                                    @error('pais')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-5 col-xl-3 col-lg-4 col-md-6 col-12">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="categoria" class="col-form-label">Categoría <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>


                                    <select id="categoria"
                                        class="form-control form-select @error('categoria') is-invalid @enderror"
                                        name="categoria" required autocomplete="categoria">
                                        <option value="">Seleccionar <i class="fa-solid fa-arrow-down-long"></i>
                                        </option>
                                        <hr>
                                        @foreach ($categorias as $categoria)
                                            <option value="{{ $categoria->id }}"
                                                {{ old('categoria') == $categoria->id ? 'selected' : '' }}>
                                                {{ $categoria->categoria }}</option>
                                        @endforeach
                                    </select>
                                    @error('categoria')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12" id="content-federado">
                                    <label for="pregunta" class="col-form-label">
                                        ¿Eres Federado?
                                        <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                    </label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="federado"
                                                    id="flexRadioDefault1 check-federado-si" value="1">
                                                <label class="form-check-label mt-1" for="flexRadioDefault1">
                                                    Si
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="federado"
                                                    id="flexRadioDefault2 check-federado-no" checked value="0">
                                                <label class="form-check-label mt-1" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="password" class="col-form-label">Crear contraseña <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror " name="password"
                                        value="{{ old('password') }}" required autocomplete="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="password_confirmation" class="col-form-label">Confirmar contraseña <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="password_confirmation" type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror "
                                        name="password_confirmation" value="{{ old('password_confirmation') }}" required
                                        autocomplete="password_confirmation">

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="fecha_nacimiento" class="col-form-label">Fecha de nacimiento
                                        <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                    </label>
                                    <input id="fecha_nacimiento" type="date" required
                                        class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                                        name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"
                                        autocomplete="fecha_nacimiento" max="2006-12-31">
                                </div> --}}
                                {{-- <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="genero" class="col-md-4 col-form-label">Género
                                        <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                    </label>
                                    <select id="genero" class="form-control form-select" name="genero"
                                        autocomplete="genero" required>
                                        <option value="">Seleccionar <i class="fa-solid fa-arrow-down-long"></i>
                                        </option>
                                        <hr>
                                        <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>
                                            Masculino</option>
                                        <option value="Femenino" {{ old('genero') == 'Femenino' ? 'selected' : '' }}>
                                            Femenino</option>
                                        <option value="Prefiero no decirlo"
                                            {{ old('genero') == 'Prefiero no decirlo' ? 'selected' : '' }}>
                                            Prefiero no decirlo</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-12" id="curp_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="curp" class="col-form-label">CURP <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="curp" type="text"
                                        class="form-control @error('curp') is-invalid @enderror" name="curp"
                                        value="{{ old('curp') }}" required autocomplete="curp">

                                    @error('curp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-12 col-xl-3 col-lg-4 col-md-6" id="entidad_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="entidad" class="col-form-label">Estado <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <select id="entidad" type="text"
                                        class="form-select @error('entidad') is-invalid @enderror" name="entidad" required
                                        autocomplete="entidad">
                                        <option value="" selected>Seleccionar</option>
                                        <hr>
                                        @foreach ($estados as $estado)
                                            <option value="{{ $estado->id }}"
                                                {{ old('entidad') == $estado->id ? 'selected' : '' }}>
                                                {{ $estado->estado }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('entidad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-12" id="codigo_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="codigo_postal" class="col-form-label">Código postal <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="codigo_postal" type="text"
                                        class="form-control @error('codigo_postal') is-invalid @enderror text-capitalize"
                                        name="codigo_postal" value="{{ old('codigo_postal') }}" required
                                        autocomplete="codigo_postal">

                                    @error('codigo_postal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-12" id="calle_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="calle" class="col-md-4 col-form-label">Calle <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="calle" type="text"
                                        class="form-control @error('calle') is-invalid @enderror text-capitalize"
                                        name="calle" value="{{ old('calle') }}" required autocomplete="calle">

                                    @error('calle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-xl-3 col-lg-4 col-md-3 col-6" id="ext_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="numE" class="col-form-label">No. Ext </label>
                                    <input id="numE" type="text"
                                        class="form-control @error('numE') is-invalid @enderror text-capitalize"
                                        name="numE" value="{{ old('numE') }}" autocomplete="numE">

                                    @error('numE')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-xl-3 col-lg-4 col-md-3 col-6" id="int_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="numI" class="col-form-label">No. Int </label>
                                    <input id="numI" type="text"
                                        class="form-control @error('numI') is-invalid @enderror text-capitalize"
                                        name="numI" value="{{ old('numI') }}" autocomplete="numI">

                                    @error('numI')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-12" id="colonia_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="colonia" class="col-md-4 col-form-label">Colonia <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="colonia" type="text"
                                        class="form-control @error('colonia') is-invalid @enderror text-capitalize"
                                        name="colonia" value="{{ old('colonia') }}" required autocomplete="colonia">

                                    @error('colonia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-12" id="muni_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="municipio" class="col-form-label">Municipio <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="municipio" type="text"
                                        class="form-control @error('municipio') is-invalid @enderror text-capitalize"
                                        name="municipio" value="{{ old('municipio') }}" required
                                        autocomplete="municipio">

                                    @error('municipio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-md-6 col-xl-3 col-lg-4 col-12" id="colegio_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                        for="colegio" class="col-form-label">
                                        Colegio al que pertenece
                                        <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                    </label>
                                    <select id="colegio" class="form-select @error('colegio') is-invalid @enderror"
                                        name="colegio" required>
                                        <option value="" selected>
                                            Seleccione su colegio
                                            <i class="fa-solid fa-arrow-down-long"></i>
                                        </option>
                                        <hr>
                                        @forelse ($colegios as $colegio)
                                            <option value="{{ $colegio->id }}"
                                                {{ old('colegio') == $colegio->id ? 'selected' : '' }}>
                                                {{ $colegio->nombre_colegio }}
                                            </option>
                                        @empty
                                            <option value="" disabled>Sin opciones</option>
                                        @endforelse
                                    </select>
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" id="check-colegio">
                                        <label
                                            style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;font-weight:bold;margin:10px 0px;"
                                            class="form-check-label mt-1" for="check-colegio" class="mt-1">
                                            No pertenezco a ningun colegio
                                        </label>
                                    </div>
                                    @error('colegio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-12" id="const_container">
                                    <label
                                        style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;font-weight:bold;margin:10px 0px;"
                                        for="constancia" class="col-form-label">Constancia de situación fiscal <i
                                            class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i></label>
                                    <input id="constancia" type="file"
                                        class="form-control @error('constancia') is-invalid @enderror" name="constancia"
                                        value="{{ old('constancia') }}" autocomplete="constancia"
                                        accept="application/pdf">
                                    <div class="form-check mt-1">
                                        <input class="form-check-input" type="checkbox" name=""
                                            id="constancia_fiscal">
                                        <label
                                            style="color:black;background-color:rgba(255, 255, 255, 0.438);padding:4px 15px ;border-radius:10px;margin-bottom:5px;:; "
                                            class="form-check-label mt-1" for="constancia_fiscal" class="mt-1">No
                                            deseo
                                            subir mi constancia de
                                            situación fiscal</label>
                                    </div>
                                    @error('constancia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                {{-- registrarse como asociado, no necesario --}}
                                {{-- <div class="col-xl-3 col-lg-4 col-md-6 col-12" id="content-asociado">
                                    <label for="password_confirmation" class="col-form-label">
                                        ¿Deseas registrarte como asociado?
                                        <i class="fa-solid fa-asterisk fa-2xs fw-bold text-danger"></i>
                                    </label>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="asociado"
                                                    id="flexRadioDefault1 check-asociado-si" value="1">
                                                <label class="form-check-label mt-1" for="flexRadioDefault1">
                                                    Si
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="asociado"
                                                    id="flexRadioDefault2 check-asociado-no" checked value="0">
                                                <label class="form-check-label mt-1" for="flexRadioDefault2">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-between">
                                    <p class="my-2" style="padding-left:15px">Campos obligatorios <i
                                            style="padding-left:10px;color:red"
                                            class="fa-solid fa-asterisk fa-2xs fw-bold"></i>
                                    </p>
                                    <div class="captcha">
                                        <div class="g-recaptcha @error('captcha') is-invalid @enderror"
                                            data-sitekey="6Lfm35YqAAAAAKxUJG8zLuM4n8QWXnB8ILyygOMo">
                                        </div>
                                        @error('captcha')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn"
                                        style="background-color:#3A3DDD;color:white;font-weight:bold">
                                        Guardar información
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // $(document).ready(function() {
        //     // $('#RFC').on('input', function() {
        //     //     this.value = this.value.toUpperCase()
        //     // });
        //     // $('#curp').on('input', function() {
        //     //     this.value = this.value.toUpperCase()
        //     // });
        //     // $('#numI').on('input', function() {
        //     //     this.value = this.value.replace(/[^0-9]/g, '');
        //     // });
        //     // $('#numE').on('input', function() {
        //     //     this.value = this.value.replace(/[^0-9]/g, '');
        //     // });
        //     // $('#codigo_postal').on('input', function() {
        //     //     this.value = this.value.replace(/[^0-9]/g, '');
        //     // });
        //     var contentFederado = document.getElementById('content-federado');
        //     var contentFederadoData = document.getElementById('content-federado-data');
        //     var contentFederadoNum = document.getElementById('content-federado-num');

        //     contentFederado.classList.add('d-none');
        //     contentFederadoData.hidden = true;
        //     contentFederadoNum.hidden = true;

        //     const selectPais = document.getElementById('pais')

        //     if (!selectPais.options[selectPais.selectedIndex].text.includes('México')) {
        //         // document.getElementById('curp').disabled = true
        //         // document.getElementById('entidad').disabled = true
        //         // document.getElementById('codigo_postal').disabled = true
        //         // document.getElementById('colonia').disabled = true
        //         // document.getElementById('calle').disabled = true
        //         // document.getElementById('numE').disabled = true
        //         // document.getElementById('numI').disabled = true
        //         // document.getElementById('municipio').disabled = true
        //         // // document.getElementById('constancia').disabled = true
        //         // document.getElementById('colegio').disabled = true
        //         // document.getElementById('colegio').required = false

        //         // document.getElementById('curp_container').classList.add('d-none')
        //         // document.getElementById('entidad_container').classList.add('d-none')
        //         // document.getElementById('codigo_container').classList.add('d-none')
        //         // document.getElementById('colonia_container').classList.add('d-none')
        //         // document.getElementById('calle_container').classList.add('d-none')
        //         // document.getElementById('colonia_container').classList.add('d-none')
        //         // document.getElementById('ext_container').classList.add('d-none')
        //         // document.getElementById('int_container').classList.add('d-none')
        //         // document.getElementById('muni_container').classList.add('d-none')
        //         // document.getElementById('const_container').classList.add('d-none')
        //         // document.getElementById('colegio_container').classList.add('d-none')
        //         // document.getElementById('content-asociado').classList.add('d-none')
        //         document.getElementById('content-federado').classList.add('d-none')
        //         // if (checkConstancia.checked) {
        //         //     constancia.disabled = true
        //         // }
        //         // if (checkColegio.checked) {
        //         //     colegio.disabled = true
        //         // }
        //     } else {
        //         // document.getElementById('curp').disabled = false
        //         // document.getElementById('entidad').disabled = false
        //         // document.getElementById('codigo_postal').disabled = false
        //         // document.getElementById('colonia').disabled = false
        //         // document.getElementById('calle').disabled = false
        //         // document.getElementById('numE').disabled = false
        //         // document.getElementById('numI').disabled = false
        //         // document.getElementById('municipio').disabled = false
        //         // document.getElementById('constancia').disabled = false
        //         // document.getElementById('colegio').disabled = false
        //         // document.getElementById('colegio').required = true

        //         // document.getElementById('curp_container').classList.remove('d-none')
        //         // document.getElementById('entidad_container').classList.remove('d-none')
        //         // document.getElementById('codigo_container').classList.remove('d-none')
        //         // document.getElementById('calle_container').classList.remove('d-none')
        //         // document.getElementById('colonia_container').classList.remove('d-none')
        //         // document.getElementById('ext_container').classList.remove('d-none')
        //         // document.getElementById('int_container').classList.remove('d-none')
        //         // document.getElementById('muni_container').classList.remove('d-none')
        //         // document.getElementById('const_container').classList.remove('d-none')
        //         // document.getElementById('colegio_container').classList.remove('d-none')
        //         // document.getElementById('content-asociado').classList.add('d-none')
        //         document.getElementById('content-federado').classList.remove('d-none')
        //         // if (checkConstancia.checked) {
        //         //     constancia.disabled = true
        //         // }
        //         // if (checkColegio.checked) {
        //         //     colegio.disabled = true
        //         // }
        //     }

        //     selectPais.addEventListener('change', () => {
        //         if (!selectPais.options[selectPais.selectedIndex].text.includes('México')) {
        //             // document.getElementById('curp').disabled = true
        //             // document.getElementById('entidad').disabled = true
        //             // document.getElementById('codigo_postal').disabled = true
        //             // document.getElementById('colonia').disabled = true
        //             // document.getElementById('calle').disabled = true
        //             // document.getElementById('numE').disabled = true
        //             // document.getElementById('numI').disabled = true
        //             // document.getElementById('municipio').disabled = true
        //             // document.getElementById('constancia').disabled = true
        //             // document.getElementById('colegio').required = false

        //             // document.getElementById('curp_container').classList.add('d-none')
        //             // document.getElementById('entidad_container').classList.add('d-none')
        //             // document.getElementById('codigo_container').classList.add('d-none')
        //             // document.getElementById('colonia_container').classList.add('d-none')
        //             // document.getElementById('calle_container').classList.add('d-none')
        //             // document.getElementById('colonia_container').classList.add('d-none')
        //             // document.getElementById('ext_container').classList.add('d-none')
        //             // document.getElementById('int_container').classList.add('d-none')
        //             // document.getElementById('muni_container').classList.add('d-none')
        //             // document.getElementById('const_container').classList.add('d-none')
        //             // document.getElementById('colegio_container').classList.add('d-none')
        //             // document.getElementById('content-asociado').classList.remove('d-none')
        //             document.getElementById('content-federado').classList.add('d-none')
        //             // if (checkConstancia.checked) {
        //             //     constancia.disabled = true
        //             // }
        //             // if (checkColegio.checked) {
        //             //     colegio.disabled = true
        //             // }

        //         } else {
        //             // document.getElementById('curp').disabled = false
        //             // document.getElementById('entidad').disabled = false
        //             // document.getElementById('codigo_postal').disabled = false
        //             // document.getElementById('colonia').disabled = false
        //             // document.getElementById('calle').disabled = false
        //             // document.getElementById('numE').disabled = false
        //             // document.getElementById('numI').disabled = false
        //             // document.getElementById('municipio').disabled = false
        //             // document.getElementById('constancia').disabled = false
        //             // document.getElementById('colegio').disabled = false
        //             // document.getElementById('colegio').required = true

        //             // document.getElementById('content-asociado').classList.add('d-none')
        //             // document.getElementById('curp_container').classList.remove('d-none')
        //             // document.getElementById('entidad_container').classList.remove('d-none')
        //             // document.getElementById('codigo_container').classList.remove('d-none')
        //             // document.getElementById('calle_container').classList.remove('d-none')
        //             // document.getElementById('colonia_container').classList.remove('d-none')
        //             // document.getElementById('ext_container').classList.remove('d-none')
        //             // document.getElementById('int_container').classList.remove('d-none')
        //             // document.getElementById('muni_container').classList.remove('d-none')
        //             // document.getElementById('const_container').classList.remove('d-none')
        //             // document.getElementById('colegio_container').classList.remove('d-none')
        //             document.getElementById('content-federado').classList.remove('d-none')
        //             // if (checkConstancia.checked) {
        //             //     constancia.disabled = true
        //             // }
        //             // if (checkColegio.checked) {
        //             //     colegio.disabled = true
        //             // }
        //         }
        //     })
        // })

        document.addEventListener("DOMContentLoaded", function() {
            const selectPais = document.getElementById('pais');
            const contentFederado = document.getElementById('content-federado');
            contentFederado.hidden = true;

            const isMexico = selectPais.options[selectPais.selectedIndex].text.includes('México');

            if (isMexico) {
                contentFederado.hidden = false;
            } else {
                contentFederado.hidden = true;
            }

            selectPais.addEventListener('change', function() {
                const isMexico = selectPais.options[selectPais.selectedIndex].text.includes('México');

                if (isMexico) {
                    contentFederado.hidden = false;
                } else {
                    contentFederado.hidden = true;
                }
            });
        });

        document.getElementById('form-register').addEventListener('submit', function(event) {
            event.preventDefault();

            const federadoSeleccionado = document.querySelector('input[name="federado"]:checked');

            if (federadoSeleccionado.value == 1) {
                const {
                    value: formValues
                } = Swal.fire({
                    title: "Por favor, verifica que eres federado",
                    html: `
                            <label>Correo</label><br>
                            <input id="swal-input1" class="swal2-input" type="email">
                            <label>Numero de Federado</label><br>
                            <input id="swal-input2" class="swal2-input" type="text">
                        `,
                    focusConfirm: false,
                    preConfirm: () => {
                        return [
                            document.getElementById("swal-input1").value,
                            document.getElementById("swal-input2").value
                        ];
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        const formValues = result.value;
                        var hiddenDataFederado = document.createElement("input");

                        hiddenDataFederado.type = "hidden";
                        hiddenDataFederado.name = "federadoData";
                        hiddenDataFederado.value = JSON.stringify(formValues);
                        document.getElementById('form-register').appendChild(hiddenDataFederado);

                        document.getElementById('form-register').submit();
                    }
                })
            } else {
                document.getElementById('form-register').submit();
            }


        })
    </script>
@endsection
