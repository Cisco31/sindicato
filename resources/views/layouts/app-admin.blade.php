<!DOCTYPE HTML>
<html>

<head>
    <title>SUTUTSLRC</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- CSS -->
    <link rel="icon" href="{{ asset('static/images/sututslrc.png') }}">
    <link rel="stylesheet" href="{{ asset('static/css/style.css') }}">

    <!-- Icono sidebar responsive -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Iconos sidebar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    @livewireStyles
</head>

<body class="landing is-preload">

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" style="color: #0c8461" class="btn btn-primary">
                </button>
            </div>

            <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
                <div class="user-logo">
                    <img class="img-fluid" src="{{ asset('static/images/sututslrc.png') }}" width="150"
                        height="150" alt="">
                    <h2><span style="color:#177c67">SUTUT</span><span style="color:grey">SLRC</span></h2>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="{{ route('admin.view') }}"><span class="fa fa-home mr-3"></span> Home</a>
                </li>
                <li>
                    <a href="{{ route('admin.usuarios') }}"><span class="fa fa-users mr-3 notif"></span>Usuarios</a>
                </li>
                <li>
                    <a href="{{ route('admin.anuncios') }}"><span class="fa fa-newspaper mr-3"></span> Anuncios</a>
                </li>
                <li>
                    <a href="{{ route('admin.solicitudes') }}"><span class="fa fa-tags mr-3"></span> Solicitudes</a>
                </li>
                <li>
                    <a href="{{ route('admin.descargas') }}"><span class="fa fa-download mr-3"></span> Descargas</a>
                </li>
                <li>
                    <a href="{{ route('admin.documentos-index') }}"><span class="fa fa-file mr-3"></span>
                        Documentos</a>
                </li>
                <li>
                    <div>
                        @livewire('iniciar-sesion.logout')
                    </div>
                </li>
            </ul>

        </nav>


        <div id="content" class="p-4 p-md-5 pt-5">

            {{ $slotAdmin }}


            <!-- Scripts -->
            <script src="{{ asset('static/js/jquery.min.js') }}"></script>
            <script src="{{ asset('static/js/jquery.dropotron.min.js') }}"></script>
            <script src="{{ asset('static/js/jquery.scrollex.min.js') }}"></script>
            <script src="{{ asset('static/js/browser.min.js') }}"></script>
            <script src="{{ asset('static/js/breakpoints.min.js') }}"></script>
            <script src="{{ asset('static/js/util.js') }}"></script>
            <script src="{{ asset('static/js/main.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

            <!--Librerias propias-->
            <script src="{{ asset('static/js/popper.js') }}"></script>
            <script src="{{ asset('static/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('static/js/main.js') }}"></script>





        </div>
    </div>



    @livewireScripts

    <script>
        //Usuarios
        livewire.on('alert-user-create', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 3000

            })
        })

        livewire.on('alert-docs-create', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 3000

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

        //Anuncios
        livewire.on('alert-anuncio-create', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 3000

            })
        })
        livewire.on('alert-anuncio-edit', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                timer: 3000

            })
        })

        livewire.on('alert-anuncio-delete', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                showConfirmButton: true
            })
        })


        livewire.on('alert-user-disabled', mensaje => {
            Swal.fire({
                icon: 'warning',
                position: 'center',
                title: mensaje,
                showConfirmButton: true
            })
        })

        livewire.on('alert-user-enable', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                showConfirmButton: true
            })
        })

        livewire.on('alert-request-denied', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                showConfirmButton: true
            })
        })

        livewire.on('alert-user-admin-create', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                showConfirmButton: true
            })
        })

        livewire.on('alert-documento-activar', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                showConfirmButton: true
            })
        })

        livewire.on('alert-documento-desactivar', mensaje => {
            Swal.fire({
                icon: 'success',
                position: 'center',
                title: mensaje,
                showConfirmButton: true
            })
        })

        
    </script>
</body>

</html>
