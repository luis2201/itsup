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
    <!-- Site -->
    <link rel="stylesheet" href="public/css/site.css?v=1.0.8">
</head>

<body>
    <!-- Logo que carga antes que el contenido -->
    <!-- <div id="loader">
        <img src="public/img/logo/28_anos.png" alt="Cargando..." style="width: 25%;">
    </div> -->
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
            <div class="col-md-8 mt-5 animate-on-scroll" style="margin: auto;">
                <div class="card-group">
                    <div class="card">
                        <div class="card-body border border-white border-4 p-4 h-100" style="background-color:#aed6f1;">
                            <p class="mt-2">¿POR QUÉ <br><strong>ESTUDIAR EN EL ITSUP?</strong></p>
                            <p style="text-align:justify; font-size: 1.1em;">El ITSUP ofrece una educación superior tecnológica de calidad, con enfoque práctico, acceso a recursos de vanguardia, vínculos con la comunidad y buenas
                                perspectivas laborales, todo a un costo accesible. Es una excelente opción para prepararte en carreras demandadas y destacarte en el campo tecnológico.
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid w-100 h-100" src="public/img/images/01.png" alt="itsup-mision-vision" style="margin:auto;">
                    </div>
                    <div class="card">
                        <img class="img-fluid w-100 h-100" src="public/img/images/02.png" alt="itsup-mision-vision" style="margin:auto;">
                    </div>
                    <div class="card">
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
                    <blockquote class="blockquote">
                        <p style="text-align:center;font-style:italic">
                            Somos un Instituto reconocido por el sistema de educación superior de Ecuador, que forma profesionales competitivos en el nivel técnico y tecnológico con pedagogía crítica e inclusiva,
                            orientado a la solución de problemas sociales, a través de la gestión académica, investigativa y vinculación con la sociedad, comprometidos con el bienestar social.
                        </p>
                    </blockquote>
                </div>
                <div class="tab-pane fade p-2" id="vision-tab-pane" role="tabpanel" aria-labelledby="vision-tab" tabindex="0">
                    <blockquote class="blockquote">
                        <p style="text-align:center;font-style:italic;">
                            Ser una institución caracterizada por su alto compromiso de transformación social, internacionalización y acceso universal, <br> la concreción de la docencia, la investigación y la vinculación con la sociedad.
                        </p>
                    </blockquote>
                </div>
                <div class="tab-pane fade p-2" id="filosofia-tab-pane" role="tabpanel" aria-labelledby="filosofia-tab" tabindex="0">
                    <blockquote class="blockquote">
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
        <div class="row fondo" style="background-image: url('public/img/fondos/estudiante.jpg');background-repeat:no-repeat,repeat;width:100%;">
            <div class="row  background-image" style="background:hsl(218, 71%, 39%, .3);padding:8em;width:100%;margin:auto">
                <div class="col-4 overlay-content ml-auto animate-on-scroll">
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Electrónica</a></h3>
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Desarrollo de Software</a></h3>
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Enfermería</a></h3>
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Rehabilitación Física</a></h3>
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Emergencias Médicas</a></h3>
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Administración del Sistema de Salud</a></h3>
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Asistencia en Farmacias</a></h3>
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Criminalística</a></h3>
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Gestión de Riesgos y Desastres</a></h3>
                    <h3><a href="javascript:;" class="text-white link-offset-2 link-underline link-underline-opacity-0 link-hover-effect">Educación Inclusiva</a></h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Oferta Académica -->

    <!-- Matrículas -->
    <div class="row mt-0 p-4">
        <div class="col-md-8" style="margin: auto;">
            <div class="row row-cols-1 row-cols-md-3 g-4 animate-on-scroll">
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Investigación</h5>
                            <p class="mt-0 mb-0">Revistas</p>
                            <hr class="mt-0 mb-0">
                            <p class="mt-0 mb-0">Editorial</p>
                            <hr class="mt-0 mb-0">
                            <p class="mt-0 mb-0">Plan de Investigación</p>
                            <hr class="mt-0 mb-0">
                            <p class="mt-0 mb-0">Oficina de Transferencia de Tecnología</p>
                            <hr class="mt-0 mb-0">
                            <p class="mt-0 mb-0">Modelo de Investigación</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Vinculación</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Transparencia</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Matrículas -->

    <!-- JQuery JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="functions/site.js?v=1.1.6"></script>
</body>

</html>