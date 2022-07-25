<!DOCTYPE HTML>
<html>

<head>
    <title>SUTUTSLRC</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="icon" href="{{ asset('static/images/sututslrc.png') }}">
    <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <style>
        .dropdown-menu {
            left: auto;
            right: -1em;
            text-align: right;
        }
    </style>

    @livewireStyles
</head>

<body class="landing is-preload">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-center" href="{{ route('anuncios.index') }}">
                <img src="{{ asset('static/images/sututslrc.png') }}" width="50" height="50" alt="logo">

            </a>
            <h6 style="margin: 5px" href="{{ route('anuncios.index') }}"><span style="color:#177c67">SUTUT</span><span
                    style="color:grey">SLRC</span></h6>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('anuncios.index') }}">Anuncios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('requests.create') }}">Solicitud</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('documentos.index') }}">Documentos</a>
                    </li>
                    <li class="nav-item dropdown ml-auto">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><i
                                class="fa fa-cog" aria-hidden="true"></i> Opciones</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('usuario.edit-pwd') }}">Cambiar contraseña</a></li>
                            @livewire('iniciar-sesion.logout')
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        {{ $slotUser }}


        <!-- Scripts -->
        <script src="{{ asset('static/js/jquery.min.js') }}"></script>
        <script src="{{ asset('static/js/jquery.dropotron.min.js') }}"></script>
        <script src="{{ asset('static/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ asset('static/js/browser.min.js') }}"></script>
        <script src="{{ asset('static/js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('static/js/util.js') }}"></script>
        <script src="{{ asset('static/js/main.js') }}"></script>
        <script src="{{ asset('static/js/sideboot.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!--Librerias propias-->
        <script src="{{ asset('static/js/jquery.min.js') }}"></script>
        <script src="{{ asset('static/js/popper.js') }}"></script>
        <script src="{{ asset('static/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('static/js/main.js') }}"></script>
        <script type="application/javascript">
            jQuery('input[type=file]').change(function() {
                var filename = jQuery(this).val().split('\\').pop();
                var idname = jQuery(this).attr('id');
                console.log(jQuery(this));
                console.log(filename);
                console.log(idname);
                jQuery('span.' + idname).next().find('span').html(filename);
            });
        </script>

        <script>
            $(document).on('click', '#exampleModal', function() {
                $('#modal-ejemplo').modal('show');
            })
        </script>


    </div>



    @livewireScripts

    <script>
        livewire.on('alerta-request-create', mensaje => {
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: mensaje,
                showConfirmButton: true,
            })
        })

        livewire.on('edit-success', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 5000
            })
        })

        livewire.on('alert-user-edit', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 3000

            })
        })
    </script>
</body>

</html>
