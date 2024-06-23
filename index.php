<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITSUP | Instituto Superior Tecnológico Portoviejo</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Font Google -->

    <!-- Site -->
    <link rel="stylesheet" href="public/css/site.css?v=1.1.5">
</head>

<body>
    <!-- Logo que carga antes que el contenido -->
    <div id="loader">
        <img src="public/img/logo/28_anos.png" alt="Cargando..." style="width: 25%;">
    </div>
    <!-- ./Logo que carga antes del contenido -->

    <!-- Linea superior naranja -->
    <div class="linea">
        <div class="brillo"></div>
    </div>
    <!-- ./Linea superior naranja -->

    <!-- Barra de Navegación -->
    <nav class="navbar navbar-light bg-light" style="background-color:#fff!Important;">
        <div class="container-fluid md-2">
            <button class="navbar-toggler navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="text-dark" href="index.html" style="font-size:2em;font-style:italic;margin-left:-4%; margin:auto"><span>#YOSOY<strong>ITSUP</strong></span></a>

            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasNavbar" data-bs-scroll="true" data-bs-backdrop="false" aria-labelledby="offcanvasNavbarLabel" style="background-color:#ec783a;height:80%;margin-top:70px;width:100%;">
                <div class="offcanvas-body">
                    <div class="row">
                        <div class="col-4">
                            <h5>Menú 1</h5>
                            <ul class="list-unstyled">
                                <li><a href="#submenu1-1" class="text-white">Submenú 1-1</a></li>
                                <li><a href="#submenu1-2" class="text-white">Submenú 1-2</a></li>
                                <li><a href="#submenu1-3" class="text-white">Submenú 1-3</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h5>Menú 2</h5>
                            <ul class="list-unstyled">
                                <li><a href="#submenu2-1" class="text-white">Submenú 2-1</a></li>
                                <li><a href="#submenu2-2" class="text-white">Submenú 2-2</a></li>
                                <li><a href="#submenu2-3" class="text-white">Submenú 2-3</a></li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <h5>Menú 3</h5>
                            <ul class="list-unstyled">
                                <li><a href="#submenu3-1" class="text-white">Submenú 3-1</a></li>
                                <li><a href="#submenu3-2" class="text-white">Submenú 3-2</a></li>
                                <li><a href="#submenu3-3" class="text-white">Submenú 3-3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ./Barra de Navegación -->

    <!-- Banner -->
    <section style="position: relative; width: 100%;">
        <div id="div-fondo" class="row">
            <div class="col-6 p-0">
                <img id="img1" src="public/img/fotos/11.jpg" class="img-banner" alt="itsup-banner2" style="width: 100%;">
            </div>
            <div class="col-6 p-0">
                <img id="img2" src="public/img/fotos/04.jpg" class="img-banner" alt="itsup-banner1" style="width: 100%;">
            </div>
        </div>
        <img id="logo" class="position-absolute top-50 start-50 translate-middle glowing-image" src="public/img/logo/logo_itsup_2022_redondo.png" alt="itsup-logo">
    </section>
    <!-- ./Banner -->

    <!-- Año Fundación -->
    <section class="fondo-gradiente text-center">
        <h1 class="exo-2-texto">\&nbsp;&nbsp;&nbsp;&nbsp;1996&nbsp;&nbsp;&nbsp;&nbsp;/</h1>
    </section>
    <!-- ./Año Fundación -->

    <!-- Misión, Visión -->
    <section class="mt-0 p-3" style="background-image:url('public/img/banner/banner-degradado02.jpg');">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-xs-12 animate-on-scroll" style="margin: auto;">
                <div class="card-group">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="card-body border border-white border-4 p-4 h-100" style="background-color:#aed6f1;">
                            <p class="mt-2">¿POR QUÉ <br><strong>ESTUDIAR EN EL ITSUP?</strong></p>
                            <p style="text-align:justify;">El ITSUP ofrece una educación superior tecnológica de calidad, con enfoque práctico, acceso a recursos de vanguardia, vínculos con la comunidad y buenas
                                perspectivas laborales, todo a un costo accesible. Es una excelente opción para prepararte en carreras demandadas y destacarte en el campo tecnológico.
                            </p>
                        </div>
                    </div>
                    <div class="col-img col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <img class="img-fluid w-100 h-100" src="public/img/images/01.png" alt="itsup-mision-vision" style="margin:auto;">
                    </div>
                    <div class="col-img col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <img class="img-fluid w-100 h-100" src="public/img/images/02.png" alt="itsup-mision-vision" style="margin:auto;">
                    </div>
                    <div class="col-img col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <img class="img-fluid w-100 h-100" src="public/img/images/03.png" alt="itsup-mision-vision" style="margin:auto;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <ul class="nav nav-pills nav-justified bg-white" role="tablist">
                <li class="nav-item" role="mision">
                    <a id="mision-tab" class="nav-link active active-tab" data-bs-toggle="tab" data-bs-target="#mision-tab-pane" role="tab" aria-controls="mision-tab-pane" aria-selected="true" href="javascript:;" onclick="activeTab(this.id)">Misión</a>
                </li>
                <li class="nav-item" role="vision">
                    <a id="vision-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#vision-tab-pane" role="tab" aria-controls="vision-tab-pane" aria-selected="true" href="javascript:;" onclick="activeTab(this.id)">Visión</a>
                </li>
                <li class="nav-item" role="filosofia">
                    <a id="filosofia-tab" class="nav-link" data-bs-toggle="tab" data-bs-target="#filosofia-tab-pane" role="tab" aria-controls="filosofia-tab-pane" aria-selected="true" href="javascript:;" onclick="activeTab(this.id)">Filosofía</a>
                </li>
            </ul>
            <div class="tab-content bg-white p-5" id="myTabContent">
                <div class="tab-pane fade p-2 active show" id="mision-tab-pane" role="tabpanel" aria-labelledby="mision-tab" tabindex="0">
                    <blockquote class="">
                        <p style="text-align:center;font-style:italic">
                            Somos un Instituto reconocido por el sistema de educación superior de Ecuador, que forma profesionales competitivos en el nivel técnico y tecnológico con pedagogía crítica e inclusiva,
                            orientado a la solución de problemas sociales, a través de la gestión académica, investigativa y vinculación con la sociedad, comprometidos con el bienestar social.
                        </p>
                    </blockquote>
                </div>
                <div class="tab-pane fade p-2" id="vision-tab-pane" role="tabpanel" aria-labelledby="vision-tab" tabindex="0">
                    <blockquote class="">
                        <p style="text-align:center;font-style:italic;">
                            Ser una institución caracterizada por su alto compromiso de transformación social, internacionalización y acceso universal, <br> la concreción de la docencia, la investigación y la vinculación con la sociedad.
                        </p>
                    </blockquote>
                </div>
                <div class="tab-pane fade p-2" id="filosofia-tab-pane" role="tabpanel" aria-labelledby="filosofia-tab" tabindex="0">
                    <blockquote class="">
                        <p style="text-align:center;font-style:italic;">
                            La formación integral del estudiante a través de la actividad educativa, fomentando la práctica permanente de principios y valores humanos, normas del buen vivir, cultivando y desarrollando la creatividad,
                            innovación y proactividad, con actitud propositiva en el campo de la investigación científica, la tecnología, el arte, el deporte y la cultura, emocionalmente inteligente, permitiendo la autosuperación
                            constante.
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!-- ./Misión, Visión -->

    <!-- Oferta Académica -->
    <section>
        <div class="row text-center">
            <h1 class="display-4 fw-bold">Oferta Académica</h1>
            <p><em>Revisa la Oferta Académica para que seas parte del ITSUP con carreras presenciales y virtuales que ponemos a tu disposición.</em></p>
        </div>
    </section>
    <section style="background-image: url('public/img/fondos/estudiante.jpg');background-repeat:no-repeat,repeat;background-size:cover;">
        <div class="row fondo">
            <div class="row  background-image" style="background:hsl(218, 71%, 39%, .3);padding:8em;width:100%;margin:auto">
                <div class="col-4 overlay-content ml-auto animate-on-scroll">
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Electrónica</a></h3>
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Desarrollo de Software</a></h3>
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Enfermería</a></h3>
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Rehabilitación Física</a></h3>
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Emergencias Médicas</a></h3>
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Administración del Sistema de Salud</a></h3>
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Asistencia en Farmacias</a></h3>
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Criminalística</a></h3>
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Gestión de Riesgos y Desastres</a></h3>
                    <h3 style="font-size:1.5vw;"><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Educación Inclusiva</a></h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Oferta Académica -->

    <!-- Miscelanius -->
    <section>
        <div class="row text-center" style="background-color:#1d50ad;">
            <h4 class="display-5 fw-bold text-white">ADN ITSUP</h1>
                <p class="text-white mt-0" style="font-size:x-large;"><em>Construyendo conocimiento, creando futuros</em></p>
        </div>
        <div class="row mt-0 p-4" style="background-image:url('public/img/banner/banner-degradado02.jpg');">
            <div class="col-md-8" style="margin: auto;">
                <div class="row row-cols-1 row-cols-md-3 g-4 animate-on-scroll">
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-img-top">
                                <img src="public/img/miscelanius/02.jpg" class="card-img-top" alt="Investigación_ITSUP">
                                <h5 class="card-title mb-3 fondo-texto">Investigación</h5>
                            </div>
                            <div class="card-body">
                                <p class="mt-3 mb-0">Revistas <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Editorial <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Plan de Investigación <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Oficina de Transferencia de Tecnología <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Modelo de Investigación <i class="fas fa-caret-right float-end"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-img-top">
                                <img src="public/img/miscelanius/03.jpg" class="card-img-top" alt="Vinculación_ITSUP">
                                <h5 class="card-title mb-3 fondo-texto">Vinculación</h5>
                            </div>
                            <div class="card-body mt-3">
                                <p class="mt-0 mb-0">Proyecto Zona Protegida Plaza Central <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Proyecto Centro Médico Comunitario <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Plataforma Tecnológica de Asistencia al Usuario <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Proyecto ITSUP Cultural <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Proyecto Centro de Soluciones Electrónicas <i class="fas fa-caret-right float-end"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-img-top">
                                <img src="public/img/miscelanius/05.jpg" class="card-img-top" alt="Transparencia_ITSUP">
                                <h5 class="card-title mb-3 fondo-texto">Transparencia</h5>
                            </div>
                            <div class="card-body mt-3">
                                <p class="mt-0 mb-0">Reglamentos <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Rendición de Cuentas <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Resoluciones de Aprobaciones de Carrera <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Informe PI - PII 2022 Autoevaluación Interna <i class="fas fa-caret-right float-end"></i></p>
                                <hr class="mt-0 mb-0">
                                <p class="mt-0 mb-0">Informe PI - PII 2023 Autoevaluación Interna <i class="fas fa-caret-right float-end"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./Miscelanius -->

    <!-- Nuestros Graduados -->
    <section>
        <div class="row text-center">
            <h1 class="display-5 fw-bold" style="color: #ec783a;">Momentos ITSUP</h1>
        </div>
        <div class="row image-container">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0 animate-on-scroll">
                <img src="public/img/momentos/01.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                <img src="public/img/momentos/02.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0 animate-on-scroll">
                <img src="public/img/momentos/03.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

                <img src="public/img/momentos/04.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0 animate-on-scroll">
                <img src="public/img/momentos/05.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                <img src="public/img/momentos/06.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
            </div>
        </div>
    </section>
    <!-- ./Nuestros graduados -->

    <!-- Logos -->
    <section>
        <div class="container image-container">
            <div class="row">
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/appit.png" alt="itsup_aplicativo">
                        <p style="font-size:0.8em">Aplicativo Institucional</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/entorno_virtual.png" alt="entorno_virtual">
                        <p style="font-size:0.8em">Entorno Virtual de Aprendizaje</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/seguimiento_graduados.png" alt="seguimiento_graduados">
                        <p style="font-size:0.8em">Seguimiento a Graduados</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/rimis.png" alt="rimis">
                        <p style="font-size:0.8em">Red de Investigación Multidisciplinaria Independiente Scio.</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/evaluacion_docente.png" alt="evaluacion_docente">
                        <p style="font-size:0.8em">Evaluación Docente</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/sinapsis_revista.png" alt="sinapsis_revista">
                        <p style="font-size:0.8em">Revista Sinapsis</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/directorio_docente.png" alt="directorio_docente">
                        <p style="font-size:0.8em">Directorio de Profesores</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/sinapsis_editorial.png" alt="sinapsis_editorial">
                        <p style="font-size:0.8em">Editorial Sinapsis</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/biblioteca_virtual.png" alt="biblioteca_virtual">
                        <p style="font-size:0.8em">Biblioteca Virtual</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/correo_institucional.png" alt="correo_institucional">
                        <p style="font-size:0.8em">Correo institucional</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/itsup_tv.png" alt="itsup_tv">
                        <p style="font-size:0.8em">ITSUPTv</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/postulacion_becas.png" alt="postulacion_becas">
                        <p style="font-size:0.8em">Postulación a Becas</p>
                    </a>
                </div>
            </div>
            <div class="row">
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/revista_higia.png" alt="revista_higia">
                        <p style="font-size:0.8em">Revista Higia</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/ceish.png" alt="ceish">
                        <p style="font-size:0.8em">Comité de Ética de Investigación en Seres Humanos</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/sisgec.png" alt="sisgec">
                        <p style="font-size:0.8em">Sistema para la Gestión de Calidad</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/repositorio.png" alt="repositorio">
                        <p style="font-size:0.8em">Repositorio Digital ITSUP</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/postulaciones.png" alt="postulaciones">
                        <p style="font-size:0.8em">Postulaciones Ayudantía de Cátedra e investigación PII-2023</p>
                    </a>
                </div>
                <div style="vertical-align:middle" class="col-md-2 col-sm-6 col-xs-6 text-center">
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark animate-on-scroll-visible" href="javascript:;">
                        <img class="w-80" src="public/img/logos/asistencia.png" alt="asistencia">
                        <p style="font-size:0.8em">Asistencia Virtual</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- ./Logos -->

    <!-- JQuery JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="functions/site.js?v=1.1.7"></script>
</body>

</html>