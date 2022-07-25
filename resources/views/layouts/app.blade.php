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

    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">



    @livewireStyles
</head>

<body class="landing is-preload">

    <div class="">
        {{ $slot }}


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
    </div>



    @livewireScripts

    <script>
        livewire.on('alert-login', mensaje => {
            Swal.fire({
                position: 'top-center',
                icon: 'error',
                title: mensaje,
                showConfirmButton: true,
            })
        })

        livewire.on('alert-login-0', mensaje => {
            Swal.fire({
                icon: 'error',
                position: 'center',
                title: mensaje,
                showConfirmButton: true

            })
        })
    </script>

</body>

</html>
