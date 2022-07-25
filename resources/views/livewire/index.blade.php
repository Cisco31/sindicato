<div>
    <div id="page-wrapper">
        <!-- Header -->
        <header id="header" class="alt">
            <h1>SUTUTSLRC</h1>
            <link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
            <link rel="stylesheet" href="{{ asset('static/css/responsivo.css') }}">
            <nav id="nav">
                <ul>
                    <li><a href="{{ route('index') }}">Inicio</a></li>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">Conócenos</a>
                        <ul>
                            <li><a href="{{ route('conocenos.mision') }}">Misión</a></li>
                            <li><a href="{{ route('conocenos.vision') }}">Visión</a></li>
                            <li><a href="{{ route('conocenos.valores') }}">Valores</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('login') }}" class="button">Iniciar sesión</a></li>
                </ul>
            </nav>
        </header>

        <section id="banner">
            <img src="{{ asset('static/images/sututslrc.png') }}" alt="">
            <p class="text-center" style="font-size: 30px">Sindicato Único de Trabajadores de la Universidad Tecnológica
                de San Luis Río Colorado.</p>
            <ul class="actions special">
                <!-- <li><a href="#" class="button primary">Sign Up</a></li>
                    <li><a href="#" class="button">Learn More</a></li> -->
            </ul>
        </section>

        <section id="main" class="container">

            <section class="box special">
                <header class="major">
                    <h2>UNIDOS POR EL PROGRESO</h2>
                    <p class="text-center">Trabajar en conjunto y en el mismo camino hacia la mejor estabilidad laboral
                        en cooperación con
                        la institución, así como promover, defender y representar de manera libre, democrática,
                        responsable, realista y solidaria los derechos de los agremiados.</p>
                </header>
                <span class="image featured"><img class="unite" src="{{ asset('static\images\school.jpg') }}"
                        alt="hola" /></span>
            </section>


            <div class="row">
                <div class="col-6 col-12-narrower">
                    <section class="box special">
                        <span class="image featured"><img class="imagen1 img-fluid"
                                src="{{ asset('static\images\instalacion.jpg') }}"
                                alt=""height="286 px" /></span>
                        <h3>Objetivo</h3>
                        <p class="text-center">Estudiar, mejorar y defender constantemente las condiciones económicas,
                            sociales, políticas y
                            culturales de sus agremiados.</p>
                        <ul class="actions special">
                        </ul>
                    </section>
                </div>

                <div class="col-6 col-12-narrower">
                    <section class="box special">
                        <span class="image featured"><img class="imagen2 img-fluid"
                                src="{{ asset('static\images\event.jpg') }}" alt="" height="286 px" /></span>
                        <h3>Instalaciones</h3>
                        <p class="text-center">El domicilio social del Sindicato se encuentra ubicado por la Avenida
                            Jalisco y calle 59,
                            Colonia. Progreso C.P. 83458, San Luis Río Colorado, Sonora.</p>
                        <ul class="actions special">

                        </ul>
                    </section>
                </div>
                <div class="col-6 col-12-narrower">
                    <section class="box special">
                        <span class="image featured"><img class="imagen3 img-fluid" src="{{ asset('static\images\UT.png') }}"
                                alt="" height="286 px" /></span>
                        <h3>Forma parte del sindicato</h3>
                        <p class="text-center">A. Llena la solicitud de ingreso, proporcionando los datos que se pidan
                            en las formas
                            correspondientes, por conducto del Comité Ejecutivo.</p>
                        <p>B. Acreditar con los documentos respectivos los requisitos establecidos en el Artículo 6.</p>
                        <ul class="actions special">
                        </ul>
                    </section>
                </div>

                <div class="col-6 col-12-narrower">
                    <section class="box special">
                        <span class="image featured"><img class="imagen4 img-fluid"
                                src="{{ asset('static\images\UTSLRC.jfif') }}" alt=""
                                height="286 px" /></span>
                        <h3>Elecciones</h3>
                        <p class="text-center">Los integrantes del Comité Ejecutivo, Comisión de Vigilancia, Honor y
                            Justicia y Comisión de
                            Honor y Justicia, los representantes de los PTC, PA y ADMINISTRATIVOS serán electos por dos
                            años. Sin embargo, continuarán en su gestión y representación sindical en tanto no se halla
                            electos a los sustitutos.</p>
                        <ul class="actions special">
                        </ul>
                    </section>

                </div>
            </div>

        </section>

        <!-- Footer -->
        <footer id="footer">
            <!-- <ul class="icons">
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
                </ul> -->
            <ul class="copyright">
                <li>&copy; Sindicato Único de Trabajadores de la Universidad Tecnológica de San Luis Río Colorado. All
                    rights reserved.</li>
            </ul>
        </footer>

    </div>
</div>
