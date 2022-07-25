<div class="container">

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>
    <form class="form">
        <div class="row g-3">
            <div class="col">
                <label style="color: black" for="">Nombre</label>
                <input class="form-control" wire:model="usuario.nombre" type="text" placeholder="Nombre">
                @error('usuario.nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">Apellidos</label>
                <input class="form-control" wire:model="usuario.apellido" placeholder="Apellido" type="text">
                @error('usuario.apellido')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">Correo</label>
                <input class="form-control" wire:model="usuario.email" type="text"
                    placeholder="Correo: ejemplo@hotmail.com" disabled>
                @error('usuario.email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>

        <div class="row g-2 mt-2">
            <div class="col">
                <label style="color: black" for="">Departamento</label>
                <select wire:model="usuario.departamento" type="button" name="departamento">
                    <option>Departamento</option>
                    <option value="Tecnologias de la información">Tecnologias de la infomación</option>
                    <option value="Operaciones comerciales">Operaciones comerciales internacionales</option>
                    <option value="Mecatrónica">Mecatrónica</option>
                    <option value="Desarrollo de negocios">Desarrollo de negocios</option>
                </select>
                @error('usuario.departamento')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">Puesto</label>
                <select wire:model="usuario.puesto" type="button" name="puesto">
                    <option>Puesto</option>
                    <option value="Administrativo">Administrativo</option>
                    <option value="Docente">Docente</option>
                </select>
                @error('usuario.puesto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row g-3 mt-2">
            <div class="col">
                <label style="color: black" for="">Telefono</label>
                <input class="form-control" wire:model="usuario.telefono" type="text" class="form-control"
                    placeholder="Telefono, Ejemplo: 6531506589">
                @error('usuario.telefono')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <label style="color: black" for="">CURP</label>
                <input class="form-control" wire:model="usuario.curp" type="text" class="form-control"
                    placeholder=" CURP, Ejemplo: MAAA991217HSRRML06">
                @error('usuario.curp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">RFC</label>
                <input class="form-control" wire:model="usuario.rfc" type="text" class="form-control"
                    placeholder="RFC, Ejemplo: MAAA991217HSRRML06">
                @error('usuario.rfc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row g-3 mt-2">
            <div class="col">
                <label style="color: black" for="">Clave de Elector</label>
                <input class="form-control" wire:model="usuario.ine" type="text" class="form-control"
                    placeholder="INE(Codigo)">
                @error('usuario.ine')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">Fecha de Ingreso</label>
                <input class="form-control" wire:model="usuario.fecha_ingreso" type="date" class="form-control"
                    placeholder=" Fecha de Ingreso Ejemplo: 05/05/2020">
                @error('usuario.fecha_ingreso')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">Fecha de Afiliación</label>
                <input class="form-control" wire:model="usuario.fecha_afiliacion" type="date"
                    class="form-control" placeholder=" Fecha de Afiliacion Ejemplo: 20/05/2020">
                @error('usuario.fecha_afiliacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-3">
                <label style="color: black" for="">Restablecer contraseña</label>
                <div style="color: black" class="form-check mb-3">
                    <label class="form-check-label">
                        <input wire:model="password" class="form-check-input" value="sindicatout" type="checkbox"
                            name="remember"> Restablecer contraseña
                    </label>
                </div>
            </div>
        </div>
    </form>



</div>
