<div>

    <head>

        <script src="https://kit.fontawesome.com/3ec3bebf86.js" crossorigin="anonymous"></script>
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"></script>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <!-- Nuestro css-->
        <link rel="stylesheet" type="text/css" href="{{ asset('static/css/login.css') }}" th:href="@{/css/index.css}">
    </head>

    <body>
        <div class="modal-dialog text-center">
            <div class="col-sm-12 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="{{ asset('static\images\sututslrc.png') }}" />
                    </div>
                    <form wire:submit.prevent="login" class="col-12">

                        <div class="form-group" id="user-group">
                            <input wire:model="email" type="email" class="form-control"
                                placeholder="Ingresa tu usuario" />
                            @error('email')
                                <b class="text-danger">{{ $message }}</b>
                            @enderror
                        </div>
                        <div class="form-group" id="password-group">
                            <input wire:model="password" type="password" class="form-control"
                                placeholder="Ingresa tu contraseña" />
                            @error('password')
                                <b class="text-danger">{{ $message }}</b>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Iniciar sesion</button>
                        <a href="{{ route('index') }}" class="btn btn-secondary"></i>Inicio</a>


                    </form>
                </div>
            </div>
        </div>
    </body>
</div>
