@extends('layouts.app2')




@section('content')
    <section>
        {{-- personalizacion de perfil --}}
        <div class="container my-4">
            @if (session('success') || session('error'))
                @push('js')
                    <script>
                        Swal.fire({
                            icon: "{{ session('success') ? 'success' : 'error' }}",
                            showCancelButton: false,
                            confirmButtonText: "Perfecto!",
                            // cancelButtonText: "Cancelar",
                            text: "{{ session('success') ?? session('error') }}"
                        });
                    </script>
                @endpush
            @endif
            {{-- @if ($errors->all())
                <div class="row">
                    <div class="col">
                        <div class="alert alert-danger">
                            <p>Porfavor verifica los mensajes de error</p>
                            <p>{{ $errors->first('password') }}</p>
                        </div>
                    </div>
                </div>
            @endif --}}
            {{-- acordion de datos personales --}}
            <div class="row" style="padding:0px;">
                <div class="col">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingOne">
                                <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Datos personales
                                </button>
                            </h6>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div class="row my-3">
                                            <h4 class="col">
                                                {{ $perfil->nombre }} {{ $perfil->paterno }} {{ $perfil->materno }}
                                            </h4>
                                        </div>
                                        <div class="row my-1">
                                            <div class="col-md-6 col-xl-3 col-12 my-2">
                                                <h5 class="mb-1"><b>Fecha de nacimiento: </b></h5>
                                                {{ $perfil->fechaNacimiento }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-6 my-2">
                                                <h5 class="mb-1"><b>Edad: </b></h5>
                                                {{ $perfil->edad }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-6 my-2">
                                                <h5 class="text-capitalize mb-1"><b>Género: </b></h5>
                                                {{ $perfil->genero }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-6 my-2">
                                                <h5 class="text-capitalize mb-1"><b>País: </b></h5>
                                                {{ $perfil->pais }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-6 my-2">
                                                <h5 class="mb-1"><b>Teléfono: </b></h5>
                                                {{ $perfil->telefono ?? 'Sin telefono' }}
                                            </div>
                                            <div class="col-md-6 col-xl-3 col-12 my-2">
                                                <h5 class="mb-1"><b>Especialidad: </b></h5>
                                                {{ $perfil->especialidad }}
                                            </div>
                                        </div>
                                        @if ($perfil->cat_paises_id == 1)
                                            <div class="col-12 col-xl-5 col-lg-5 my-2">
                                                <h5>Constancia de situación fiscal:</h5>
                                                @if (file_exists(base_path() . 'public_html/files/pdf/cfi/CFI_' . $perfil->id . '.pdf'))
                                                    <a href="{{ asset('files/pdf/cfi/CFI_' . $perfil->id . '.pdf') }}"
                                                        class="btn btn-info mt-1 text-decoration-none" target="_BLANK">
                                                        Descargar <i class="fa fa-file-pdf" aria-hidden="true"></i>
                                                    </a>
                                                @else
                                                    {{ 'Sin constancia de situación fiscal' }}
                                                @endif
                                            </div>
                                        @endif
                                        <div class="row my-2">
                                            <div class="col">
                                                <div class="button-group float-end">
                                                    <button type="button" class="btn btn-gradient-primary"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                                                        Actualizar datos
                                                    </button>
                                                    <button type="button" class="btn btn-gradient-primary"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                                                        Cambiar contraseña
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @if (isset($diplomadoPagado))
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Historial de compras
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <table class="table table-striped align-middle">
                                        <thead>
                                            <tr>
                                                <th>Orden</th>
                                                <th>Monto</th>
                                                <th>Recibo</th>
                                                <th>Estatus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    {{ $diplomadoPagado->paquete }},
                                                    {{ $perfil->cat_categoria_id == 1 ? 'Residente de Anestesiología' : ($afiliado == 1 ? 'Anestesiologo Federado' : 'Anestesiología No Federado') }}
                                                </td>
                                                <td>
                                                    {{ $diplomadoPagado->monto }}
                                                    {{ $perfil->cat_paises_id == 1 ? 'MXN' : 'USD' }}
                                                </td>
                                                <td>
                                                    @if ($diplomadoPagado->estatus_pago != 2)
                                                        @if (file_exists(base_path() . '/public_html/files/pdf/ordenes/' . $diplomadoPagado->folio . '.pdf'))
                                                            <a class="btn btn-success btn-sm" target="_BLANK"
                                                                href="{{ asset('files/pdf/ordenes/' . $recibo->folio . '.pdf') }}">{{ $recibo->folio }}</a>
                                                        @else
                                                            S/R
                                                        @endif
                                                    @else
                                                        S/R
                                                    @endif
                                                </td>
                                                <td>
                                                    <span
                                                        class="text-dark badge bg-{{ $diplomadoPagado->estatus_pago == 1 ? 'success' : ($diplomadoPagado->estatus_pago == 0 ? 'danger' : 'warning') }} fs-6">
                                                        {{ $diplomadoPagado->estatus_pago == 1 ? 'Pagado' : ($diplomadoPagado->estatus_pago == 0 ? 'Cancelado' : 'Revisión') }}
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif --}}
                    </div>
                </div>
            </div>
            {{-- pagos del diplomado --}}
            <div id="diplomado" class="card my-3">
                <div class="card-header bg-dark text-white">
                    <h4 class="card-title m-auto">Compra el VIII Diplomado</h4>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-lg-3 justify-content-center">
                        @isset($diplomados)
                            @foreach ($diplomados as $diplomado)
                                <div class="col my-2">
                                    <div class="card">
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col">
                                                    <p class="fw-bold fs-3 my-3 fst-italic">{{ $diplomado->nombre }}
                                                    </p>
                                                    <h4 class="mb-3">
                                                        {{ $diplomado->descripcion }}
                                                    </h4>
                                                    <p class="text-center m-0 p-0">
                                                        <span class="fs-4">MXN$ </span>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                                        <span class="display-6"> {{ $diplomado->precio_mx }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col text-center d-grid gap-2">
                                                    <button type="button" class="btn btn-gradient-primary button-option"
                                                        onclick="pago(2, {{ $diplomado->id }})">
                                                        Paypal
                                                    </button>
                                                    <button type="button" class="btn btn-gradient-primary button-option"
                                                        onclick="pago(1, {{ $diplomado->id }})">
                                                        Tranferencia
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal editar datos-->
    <div class="modal fade popup" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edita tus datos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('perfil.edit') }}" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        @method('PUT')
                        <div class="row my-3">

                            <div class="col-12 col-xl-3 col-lg-4 col-md-12">
                                <label for="nombre" class="col-form-label">Nombre(s) <i
                                        class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                <input id="nombre" type="text"
                                    class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                    value="{{ old('nombre', $perfil->nombre) }}" required autocomplete="nombre"
                                    autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="paterno" class="col-form-label">Apellido paterno
                                    <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                </label>
                                <input id="paterno" type="text"
                                    class="form-control @error('paterno') is-invalid @enderror" name="paterno"
                                    value="{{ old('paterno', $perfil->paterno) }}" required autocomplete="paterno">

                                @error('paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="materno" class="col-form-label">Apellido materno
                                    <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                </label>
                                <input id="materno" type="text"
                                    class="form-control @error('materno') is-invalid @enderror" name="materno"
                                    value="{{ old('materno', $perfil->materno) }}" required autocomplete="materno">

                                @error('materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="fecha_nacimiento" class="col-form-label">Fecha de nacimiento
                                    <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                </label>
                                <input id="fecha_nacimiento" type="date" required
                                    class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                                    name="fecha_nacimiento" value="{{ old('fecha_nacimiento', $perfil->fecha_nac) }}"
                                    autocomplete="fecha_nacimiento">
                                @error('fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="pais" class="col-md-4 col-form-label">País <i
                                        class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                <select id="pais"
                                    class="form-control form-select @error('pais') is-invalid @enderror" name="pais"
                                    required>
                                    <option value="" selected>Seleccione</option>
                                    <hr>
                                    @foreach ($paises as $pais)
                                        <option value="{{ $pais->id }}"
                                            {{ old('pais', $perfil->cat_pais_id) === $pais->id ? 'selected' : '' }}>
                                            {{ $pais->pais }} |
                                            {{ $pais->codigo }}</option>
                                    @endforeach
                                </select>

                                @error('pais')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="telefono" class="col-form-label">Telefono
                                    <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                </label>
                                <input id="telefono" type="number"
                                    class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                    value="{{ old('telefono', $perfil->telefono) }}" autocomplete="telefono">

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="email" class="col-form-label">Correo eléctronico <i
                                        class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email', $perfil->correo) }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="genero" class="col-md-4 col-form-label">Género
                                    <i class="fa-solid fa-asterisk fa-2xs text-danger"></i>
                                </label>
                                <select id="genero" class="form-control form-select" name="genero"
                                    autocomplete="genero" required>
                                    <option value="" selected>
                                        Seleccionar
                                    </option>
                                    <hr>
                                    @foreach ($generos as $genero)
                                        <option value="{{ $genero->id }}"
                                            {{ old('genero', $perfil->cat_genero_id) === $genero->id ? 'selected' : '' }}>
                                            {{ $genero->genero }}</option>
                                    @endforeach
                                </select>
                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12 col-xl-3 col-lg-4 col-md-6">
                                <label for="especialidad" class="col-form-label">Especialidad </label>
                                <select id="especialidad"
                                    class="form-control form-select @error('especialidad') is-invalid @enderror"
                                    name="especialidad" required autocomplete="especialidad">
                                    <option value="" selected>Seleccionar
                                    </option>
                                    <hr>
                                    @foreach ($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id }}"
                                            {{ old('especialidad', $perfil->cat_especialidad_id) == $especialidad->id ? 'selected' : '' }}>
                                            {{ $especialidad->especialidad }}</option>
                                    @endforeach
                                </select>
                                @error('especialidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-12 col-xl-3 col-lg-4 col-md-6" id="entidad_container">
                                <label for="entidad" class="col-form-label">Estado <i
                                        class="fa-solid fa-asterisk fa-2xs text-danger"></i></label>
                                <select id="entidad" type="text"
                                    class="form-control form-select @error('entidad') is-invalid @enderror" name="entidad"
                                    autocomplete="entidad">
                                    <option value="">Seleccionar</option>
                                    <hr>
                                    @foreach ($estados as $estado)
                                        <option value="{{ $estado->id }}"
                                            {{ $perfil->cat_estados_id == $estado->id ? 'selected' : '' }}>
                                            {{ $estado->estado }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('entidad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <div class="row float-end my-3">
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal cambiar contraseña --}}
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cambiar tu contraseña</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" action="{{ route('perfil.editPassword') }}">
                    <div class="modal-body text-center">
                        @csrf
                        @method('PUT')
                        <div class="row my-3">
                            <div class="col-12">
                                <label for="password_old" class="col-form-label">Anterior Contraseña<i
                                        class="fa-solid fa-asterisk fa-2xs" style="color: #003cff;"></i></label>
                                <input id="password_old" type="password"
                                    class="form-control @error('password_old') is-invalid @enderror text-capitalize"
                                    name="password_old" value="{{ old('password_old') }}" required
                                    autocomplete="password_old" autofocus>
                                @error('password_old')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="password" class="col-form-label">Nueva Contraseña<i
                                        class="fa-solid fa-asterisk fa-2xs" style="color: #003cff;"></i></label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror text-capitalize"
                                    name="password" value="{{ old('password') }}" required autocomplete="password"
                                    autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="password_confirmation" class="col-form-label">Confirmar Nueva
                                    Contraseña
                                    <i class="fa-solid fa-asterisk fa-2xs" style="color: #003cff;"></i>
                                </label>
                                <input id="password_confirmation" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror text-capitalize"
                                    name="password_confirmation" value="{{ old('password_confirmation') }}" required
                                    autocomplete="password_confirmation">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn  btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <div class="row ">
                            <div class="col-3">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal de trasnferencia --}}
    <div class="modal fade" id="transferencia-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="transferenciaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="transferenciaLabel">Forma de pago: TRANSFERENCIA</h1>
                    <button type="button" class="btn-close b1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-transferencia" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 fs-5 text-center">
                                    <p class="my-2">BBVA</p>
                                    <p class="my-2">FEDERACION MEXICANA DE COLEGIOS DE ANESTESIOLOGIA AC</p>
                                    <p class="my-2">N° Cuenta: 0110928267</p>
                                    <p class="my-2">SUCURSAL : 1709 CENTRO PYME ROMA</p>
                                    <p class="my-2">CLABE: 012180001109282678</p>
                                    <p class="my-2">Al completar la transferencia de fondos le solicitamos enviar su
                                        comprobante con su nombre completo al
                                        correo: inscripciones@fmcaac.mx o al WhatsApp 5591974810.</p>
                                </div>
                                <div class="col-12 col-lg-6 my-lg-auto my-3">
                                    <label class="fs-4 form-label">Subir comprobante</label>
                                    <input type="file" class="form-control" name="comprobante" required>
                                    <span id="content-cfi" class="d-none">
                                        <label class="fs-4 form-label mt-2">Subir CFI</label>
                                        <input type="file" class="form-control" name="cfi">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Subir comprobante</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- modal de opciones --}}
    <div class="modal fade" id="transferencia-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="transferenciaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="transferenciaLabel">Forma de pago: TRANSFERENCIA</h1>
                    <button type="button" class="btn-close b1" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

            </div>
        </div>
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
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#nombre').on('input', function() {
                this.value = this.value.split(' ').map(function(word) {
                    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                }).join(' ');
            });
            $('#paterno').on('input', function() {
                this.value = this.value.split(' ').map(function(word) {
                    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                }).join(' ');
            });
            $('#paterno').on('input', function() {
                this.value = this.value.split(' ').map(function(word) {
                    return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
                }).join(' ');
            });
            $('#telefono').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });

            const selectPais = document.getElementById('pais');
            const isMexico = selectPais.options[selectPais.selectedIndex].text.includes('México');
            if (isMexico) {
                document.getElementById('entidad_container').classList.remove('d-none');
            } else {
                document.getElementById('entidad_container').classList.add('d-none');
            }

            selectPais.addEventListener('change', function() {
                const isMexico = selectPais.options[selectPais.selectedIndex].text.includes('México');

                if (isMexico) {
                    document.getElementById('entidad_container').classList.remove('d-none');
                } else {
                    document.getElementById('entidad_container').classList.add('d-none');
                }
            });

            $('.prueba1234').on('click', function(e) {
                e.preventDefault();
                $('.header-nav-feature').addClass('signin').removeClass('signup').removeClass('recover');
                $('.header-nav-feature').find('.signin-form input:first').focus();
                if (!$('.header-nav-features-dropdown').hasClass('show')) {
                    console.log('prueba');
                    document.querySelector('.header-nav-features-dropdown').classList.add('show');
                } else {

                    document.querySelector('.header-nav-features-dropdown').classList.remove('show');
                }
            });

            $('.cerrarmodal').on('click', function(e) {
                e.preventDefault();
                if (!$('.header-nav-features-dropdown').hasClass('show')) {
                    console.log('prueba');
                    document.querySelector('.header-nav-features-dropdown').classList.add('show');
                } else {

                    document.querySelector('.header-nav-features-dropdown').classList.remove('show');
                }
            });

            document.getElementById("diplomado").scrollIntoView({
                behavior: "smooth"
            });

            pago = (forma, idDiplomado) => {
                var buttonOptions = document.querySelectorAll('.button-option');
                buttonOptions.forEach(function(button) {
                    button.disabled = true;
                });

                // datos de la orden
                var pago = {
                    'forma': forma,
                    'orden': idDiplomado,
                };

                var personaId = "{{ auth()->user()->persona_id }}"


                swal.fire({
                    title: '¿Requiere factura?',
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: "SI",
                    cancelButtonText: "Cancelar",
                    denyButtonText: "NO",
                    customClass: {
                        popup: "b1"
                    }
                }).then((result) => {
                    if (result.isDismissed) {
                        buttonOptions.forEach(function(button) {
                            button.disabled = false;
                        });
                    } else {
                        if (forma == 2 && result) {
                            if (result.isConfirmed) {
                                pago.factura = 1;
                            } else if (result.isDenied) {
                                pago.factura = 0;
                            }

                            if (idDiplomado == 1) {
                                // url = url.replace('personaId', personaId);

                                var form = document.createElement("form");
                                form.method = "POST";
                                // form.action = url;

                                // Crear un campo oculto para enviar los datos
                                var hiddenPago = document.createElement("input");
                                hiddenPago.type = "hidden";
                                hiddenPago.name = "pago";
                                hiddenPago.value = JSON.stringify(pago);
                                form.appendChild(hiddenPago);

                                // Agregar CSRF token (para solicitudes POST en Laravel)
                                var csrfToken = document.createElement("input");
                                csrfToken.type = "hidden";
                                csrfToken.name = "_token";
                                csrfToken.value = "{{ csrf_token() }}";
                                form.appendChild(csrfToken);

                                // Enviar el formulario
                                document.body.appendChild(form);
                                // form.submit();
                            } else if (idDiplomado == 2) {
                                console.log(pago);
                            }
                        } else if (forma == 1 && result) {
                            if (result.isConfirmed) {
                                pago.factura = 1;
                            } else if (result.isDenied) {
                                pago.factura = 0;
                            }

                            if (idDiplomado == 1) {
                                // urlSend = urlSend.replace('personaId', personaId);
                                // fetch(urlSend, {
                                //         method: 'POST', // O 'GET' si solo estás obteniendo datos
                                //         headers: {
                                //             'Content-Type': 'application/json', // Si estás enviando JSON
                                //             'Accept': 'application/json', // Si esperas una respuesta JSON
                                //             'X-CSRF-TOKEN': "{{ csrf_token() }}",
                                //         },
                                //         body: JSON.stringify(pago)
                                //     }).then(response => response.status == 200 ? response.json() :
                                //         console
                                //         .error(response.message))
                                //     .then(res => {
                                //         console.log(res);
                                //     });

                                var form = document.getElementById('form-transferencia');
                                // url = url.replace('personaId', personaId);

                                if (pago.factura == 1) {
                                    document.getElementById('content-cfi').classList.remove('d-none');
                                } else {
                                    document.getElementById('content-cfi').classList.add('d-none');
                                }

                                // form.action = url;

                                var hiddenPago = document.createElement("input");
                                hiddenPago.type = "hidden";
                                hiddenPago.name = "pago";
                                hiddenPago.value = JSON.stringify(pago);
                                form.appendChild(hiddenPago);

                                $('#transferencia-modal').modal('show');
                            } else if (idDiplomado == 2) {
                                console.log(pago);
                            }

                        }
                    }
                });
            }
        })
    </script>
@endsection
