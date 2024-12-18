@extends('layouts.app')

@section('content')
    <div role="main" class="main">
        <!-- IMAGEN HOME -->
        <!-- visible movil -->
        <div class=".d-none d-sm-block d-md-none">
            <img src="{{ asset('assets/img/slides/sliderVert.jpg') }}" class="img-fluid">
        </div>
        <!-- visible movil -->
        <!-- visible escritorio -->
        <div class="d-none d-sm-none d-md-block">
            <img src="{{ asset('assets/img/slides/slider1.jpg') }}" style="width: 100%" class="img-fluid">
        </div>
        <!-- visible escritorio -->
        <!-- IMAGEN HOME -->

        {{-- programa academico --}}
        <section id="programa" class="section section-height-3 bg-primary border-0 m-0 appear-animation"
            data-appear-animation="fadeIn">
            <div class="container my-3">
                <div class="row mb-5">
                    <div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        <h2 class="font-weight-bold text-color-light mb-2">PROGRAMA ACADÉMICO</h2>
                        <p class="text-color-light opacity-7">VIII DIPLOMADO TEÓRICO PRÁCTICO DE INTERVENCIONISMO EN DOLOR
                            AMETD 2025</p>
                    </div>
                </div>
                <div class="row mb-lg-4">
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                        data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-graduation text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">PRIMER MÓDULO</h4>
                                <p class="text-color-light opacity-7">GENERALIDADES DE INTERVENCIONISMO - 11 Y 12 DE ABRIL
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-graduation text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">SEGUNDO MÓDULO</h4>
                                <p class="text-color-light opacity-7">COLUMNA LUMBAR Y TORACICA - 16 Y 17 DE MAYO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter"
                        data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-graduation text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">TERCER MÓDULO</h4>
                                <p class="text-color-light opacity-7">INTERVENCIONISMO CRANEOFACIAL Y CERVICAL 13 Y 14 DE
                                    JUNIO</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter"
                        data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-graduation text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">CUARTO MÓDULO</h4>
                                <p class="text-color-light opacity-7">MODULO MUSCULOESQUELETICO( HOMBRO, CODO,
                                    RODILLA,CADERA, TOBILLO) 18-19 DE JULIO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-graduation text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">QUINTO MÓDULO</h4>
                                <p class="text-color-light opacity-7">MEDICINA REGENERATIVA 8-9 DE AGOSTO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter"
                        data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icons icon-graduation text-color-light"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-color-light text-4 mb-2">SEXTO MÓDULO</h4>
                                <p class="text-color-light opacity-7">INTERVENCIONISMO ONCOLOGICO 5-6 SEPTIEMBRE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>
        </section>

        <section class="section section-default mt-0 bg-color-dark border-top-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-0 text-color-light text-center">EVALUACIÓN FINAL 7 DE SEPTIEMBRE</h4>
                    </div>
                </div>
            </div>
        </section>
        {{-- profesores --}}
        <div id="profesores" class="container">
            <div class="row justify-content-center pt-5 mt-5">
                <div class="col-lg-9 text-center">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter">
                        <h4 class="font-weight-bold mb-2"><strong>PROFESOR TITULAR</strong></h4>
                        <h2 class="mb-4"><strong>DR. ALE ISMAEL GONZÁLEZ CAZÁRES</strong></h2>
                    </div>
                    <h4 class="pt-3 mt-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200"><strong>PROFESORES ADJUNTOS</strong></h4>


                    <p class="mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="300">DRA. KARLA MADRIGAL RENTERIA</p>

                    <p class="mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="400">DR. RAFAEL ORLANDO VALLEJO ESTRELLA</p>

                    <p class="mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="500">DRA. REYNA RAMOS NATAREN</p>

                    <p class="mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="600">DR. LUIS MIGUEL RUJANA GALAVIZ</p>

                    <p class="mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="700">DRA. MARIA DEL ROCIO GUILLEN NUÑEZ</p>

                    <p class="mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="800">DRA. CAROLINA BERENICE HERNANDEZ PORRAS</p>

                    <p class="mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="900">DR. ANGEL MANUEL JUAREZ LEMUS</p>

                    <p class="mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1000">DRA. JENNY ALEXANDRA GONZALEZ SANTANDER</p>

                    <p class="mb-2 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1100">DRA. ALEJANDRA CACHO RODRIGUEZ</p>

                </div>
            </div>
            <div class="row pb-5 mb-5">
                <div class="col">
                </div>
            </div>
        </div>

        {{-- info registro --}}
        <section id="registro" class="section section-height-3 border-0 my-0">
            <div class="container container-xl-custom">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="pe-5">
                            <span class="d-block font-weight-light negative-ls-1 text-5 mb-1"><em
                                    class="text-2 opacity-8">Dirigido a Algólogos</em></span>
                            <h2 class="font-weight-extra-bold text-color-dark negative-ls-3 line-height-1 text-7 mb-3">
                                <em>¡Regístrate ahora!</em>
                            </h2>
                            <p class="lead mb-4 pb-2">El <strong>VII Diplomado Teórico-Práctico de Intervencionismo en
                                    Dolor</strong> está diseñado para brindarte una formación integral, actualizada y
                                aplicada en el manejo del dolor mediante técnicas de intervencionismo.</p>
                            <p class="lead mb-4 pb-2"><strong>¿Por qué participar?</strong></p>
                            <div class="row mb-3">
                                <div class="col">
                                    <ul class="list list-icons list-style-none text-4 ps-none mb-2 pb-2 pe-3">
                                        <li class="text-1 text-color-primary mb-3"> <strong><i
                                                    class="fa fa-check text-primary text-4 me-1"></i> Formación teórica y
                                                práctica</strong> con los mejores expertos en el área.</li>
                                        <li class="text-1 text-color-primary mb-3"> <strong><i
                                                    class="fa fa-check text-primary text-4 me-1"></i> Aprendizaje de
                                                vanguardia:</strong> técnicas precisas y seguras para el tratamiento del
                                            dolor.</li>
                                        <li class="text-1 text-color-primary mb-0 mb-md-3"> <strong><i
                                                    class="fa fa-check text-primary text-4 me-1"></i> Práctica en
                                                escenarios reales</strong> con enfoque en la mejora de la calidad de vida de
                                            los pacientes.</li>
                                    </ul>
                                </div>
                            </div>

                            <button id="headerAccount"
                                class="prueba123 btn btn-gradient-primary btn-effect-4 font-weight-semi-bold px-4 btn-py-2 text-3">Regístrate
                                ahora <i class="fas fa-id-badge ms-1"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-6 fluid-col-lg-6" style="min-height: 33vw;">
                        <div class="fluid-col">
                            <img src="{{ asset('assets/img/banner-registro.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section bg-color-grey border-0 py-0 m-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Google Maps - Settings on footer -->
                        <div id="googlemaps" class="google-map h-100 m-0" style="min-height: 400px;"></div>
                    </div>
                    <div class="col-md-6 p-5 my-5">

                        <div class="px-4">
                            <h2 class="font-weight-bold line-height-1 mb-2">Contáctanos</h2>
                            <p class="text-3 mb-4">¿Dudas, comentarios?</p>
                            <a href="mailto:"
                                class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2">contacto@ametd.online</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section bg-primary border-0 m-0">
            <div class="container">
                <div class="row justify-content-center text-center text-lg-start py-4">
                    <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
                            <div class="feature-box-icon">
                                <i class="icon-clock icons text-color-light"></i>
                            </div>
                            <div class="feature-box-info ps-1">
                                <h5 class="font-weight-light text-color-light opacity-7 mb-0">HORARIOS</h5>
                                <p class="text-color-light font-weight-semibold mb-0">Lunes - Viernes 09:00 -19:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
                        data-appear-animation-delay="200">
                        <div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
                            <div class="feature-box-icon">
                                <i class="icon-call-out icons text-color-light"></i>
                            </div>
                            <div class="feature-box-info ps-1">
                                <h5 class="font-weight-light text-color-light opacity-7 mb-0">LLÁMANOS</h5>
                                <a href="tel:5630231151"
                                    class="text-color-light font-weight-semibold text-decoration-none">5630231151</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter"
                        data-appear-animation-delay="400">
                        <div class="feature-box feature-box-style-2 d-block d-lg-flex">
                            <div class="feature-box-icon">
                                <i class="icon-share icons text-color-light"></i>
                            </div>
                            <div class="feature-box-info ps-1">
                                <h5 class="font-weight-light text-color-light opacity-7 mb-0">SÍGUENOS</h5>
                                <p class="mb-0">
                                    <span class="social-icons-facebook"><a href="https://www.facebook.com/ametd.mexico"
                                            target="_blank" class="text-color-light font-weight-semibold"
                                            title="Facebook"><i class="me-1 fab fa-facebook-f"></i></a></span>
                                    <span class="social-icons-x ps-3"><a href="https://x.com/ametdmexico?lang=es"
                                            target="_blank" class="text-color-light font-weight-semibold"
                                            title="Twitter"><i class="me-1 fab fa-x-twitter"></i></a></span>
                                    <span class="social-icons-instagram ps-3"><a
                                            href="https://www.instagram.com/ametdac/?hl=es" target="_blank"
                                            class="text-color-light font-weight-semibold" title="Linkedin"><i
                                                class="me-1 fab fa-instagram"></i></a></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <!-- Google Maps -->
    <script>
        /* 
            			Map Markers:
            			- Get an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key
            			- Generate Map Id: https://console.cloud.google.com/google/maps-apis/studio/maps
            			- Use https://www.latlong.net/convert-address-to-lat-long.html to get Latitude and Longitude of a specific address
            			*/
        (g => {
            var h, a, k, p = "The Google Maps JavaScript API",
                c = "google",
                l = "importLibrary",
                q = "__ib__",
                m = document,
                b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}),
                r = new Set,
                e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() =>
                d[l](f, ...n))
        })
        ({
            key: "AIzaSyBAWXA8qemB0EvSV8DkuuTzIBjhl5U6nVQ",
            v: "weekly"
        });

        async function initMap() {
            const {
                Map,
                InfoWindow
            } = await google.maps.importLibrary("maps");
            const {
                AdvancedMarkerElement,
                PinElement
            } = await google.maps.importLibrary(
                "marker",
            );
            const map = new Map(document.getElementById("googlemaps"), {
                zoom: 12,
                center: {
                    lat: -99.2129727,
                    lng: 19.4409021
                },
                mapId: "AIzaSyBAWXA8qemB0EvSV8DkuuTzIBjhl5U6nVQ",
            });
            const markers = [{
                position: {
                    lat: -99.2109381,
                    lng: 19.438472
                },
                title: "AMETD<br>Av. Ejército Nacional Mexicano 613,<br> Polanco, Granada, Miguel Hidalgo, <brC.P.11510 Ciudad de México, CDMX",
            }];

            const infoWindow = new InfoWindow();

            markers.forEach(({
                position,
                title
            }, i) => {
                const pin = new PinElement({
                    background: "#e36159",
                    borderColor: "#e36159",
                    glyphColor: "#FFF",
                });
                const marker = new AdvancedMarkerElement({
                    position,
                    map,
                    title: `${title}`,
                    content: pin.element,
                });

                marker.addListener("click", ({
                    domEvent,
                    latLng
                }) => {
                    const {
                        target
                    } = domEvent;

                    infoWindow.close();
                    infoWindow.setContent(marker.title);
                    infoWindow.open(marker.map, marker);
                });
            });

        }

        initMap();

        
    </script>


<script>
    $('.prueba123').on('click', function(e) {
                // e.preventDefault();
                $('.header-nav-feature').addClass('signup').removeClass('signin').removeClass('recover');
                $('.header-nav-feature').find('.signup-form input:first').focus();
                if (!$('.header-nav-features-dropdown').hasClass('show')) {
                    console.log('prueba');
                    // document.getElementByClassName('header-nav-features-dropdown').classList.add('show');
                    
                  const $dropdo = $('.header-nav-features-dropdown');
                          $dropdo.className='header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right show'
                } else {
                    
                    const $dropdo = $('.header-nav-features-dropdown');
                        $dropdo.className='header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right'
                }
            });
</script>
    <script>
        $('.header-nav-features-toggle').on('click', function(e) {
                    // e.preventDefault();
                    // $('.header-nav-feature').addClass('signup').removeClass('signin').removeClass('recover');
                    // $('.header-nav-feature').find('.signup-form input:first').focus();
                    if (!$('.header-nav-features-dropdown').hasClass('show')) {
                        console.log('prueba');
                        // document.getElementByClassName('header-nav-features-dropdown').classList.add('show');
                        
                        const $dropdo = $('.header-nav-features-dropdown');
                          $dropdo.className='header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right show'
                    } else {
                        
                        const $dropdo = $('.header-nav-features-dropdown');
                        $dropdo.className='header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right'
                    }
                });
    </script>


@endsection
