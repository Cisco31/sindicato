<div>
    <link rel="stylesheet" href="{{ asset('static/css/main.css') }}">
    <div id="page-wrapper">
        <br><br><br><br><br><br><br><br><br>
        <!-- Header -->
        <header id="header">
            <h1><a href="index.html">SUTUTSLRC</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="{{ route('index') }}">Inicio</a></li>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">Conocenos</a>
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



        <!-- Main -->
        <section id="main" class="container">
            <header>
                <h2>Nuestra Misión</h2>
            </header>
            <div class="box">
                <p style="color: black;">Nos constituimos en Sindicato para la defensa de los intereses laborales, académicos, culturales,
                    políticos y económicos de sus miembros. En sus filas, pueden militar activamente, en igualdad de
                    circunstancias, en lo que se refiere a derechos y obligaciones, sin importar posturas filosóficas,
                    económicas, ideológicas y religiosas, todas las personas que conforme a los presentes Estatutos,
                    lleguen a constituir la base gremial del mismo.</p>
                <div class="row">
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
