<div>

    <!-- Page Content  -->
    <div>
        <div class="card text-center ">
            <div class="card-header text-center">
                <h2 class="info">Información completa del usuario</H2>
            </div>

            <div class="card-body">
                <div class="row mb-4 g-3">
                    <div class="col">
                        <label style="color: black;">Nombre</label>
                        <input class="form-control" type="text" value="{{ $usuario->nombre }}" disabled>
                    </div>
                    <div class="col">
                        <label style="color: black;">Apellido</label>
                        <input class="form-control" type="text" value="{{ $usuario->apellido }}" disabled>
                    </div>
                    <div class="col">
                        <label style="color: black;">Correo</label>
                        <input class="form-control" type="text" value="{{ $usuario->email }}" disabled>
                    </div>
                </div>
                <div class="row mb-4 g-3">
                    <div class="col">
                        <label style="color: black;">Puesto</label>
                        <input class="form-control" type="text" value="{{ $usuario->puesto }}" disabled>
                    </div>
                    <div class="col">
                        <label style="color: black;">Departamento</label>
                        <input class="form-control" type="text" value="{{ $usuario->departamento }}" disabled>
                    </div>
                    <div class="col">
                        <label style="color: black;">Teléfono</label>
                        <input class="form-control" type="text" value="{{ $usuario->telefono }}" disabled>
                    </div>
                </div>
                <div class="row mb-4 g-3">
                    <div class="col">
                        <label style="color: black;">CURP</label>
                        <input class="form-control" type="text" value="{{ $usuario->curp }}" disabled>
                    </div>
                    <div class="col">
                        <label style="color: black;">RFC</label>
                        <input class="form-control" type="text" value="{{ $usuario->rfc }}" disabled>
                    </div>
                    <div class="col">
                        <label style="color: black;">Clave de Elector</label>
                        <input class="form-control" type="text" value="{{ $usuario->ine }}" disabled>
                    </div>
                </div>
                <div class="row mb-4 g-2">
                    <div class="col">
                        <label style="color: black;">Fecha de afiliación</label>
                        <input class="form-control" type="text" value="{{ $usuario->fecha_afiliacion }}" disabled>
                    </div>
                    <div class="col">
                        <label style="color: black;">Fecha de ingreso</label>
                        <input class="form-control" type="text" value="{{ $usuario->fecha_ingreso }}" disabled>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <a href="{{ route('admin.usuarios') }}" class="btn btn-sm btn-dark float-left"><i
                        class="fa fa-arrow-circle-left   "></i> Regresar</a>
                <a href="{{ route('admin.user-edit', $usuario) }}" class="btn btn-sm btn-info float-right"><i
                        class="fa fa-edit"></i> Editar información</a>
            </div>
        </div>
    </div>
</div>
