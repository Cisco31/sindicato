<div>

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/inputs.css') }}">
    </head>
    <form action="">
        <div class="row g-2">
            <div class="col">
                <label style="color: black" for="">Nombre</label>
                <input class="form-control" wire:model="usuario.nombre" type="text" placeholder="Nombre" disabled>
                @error('usuario.nombre')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">Apellidos</label>
                <input class="form-control" wire:model="usuario.apellido" placeholder="Apellido" type="text"
                    disabled>
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
                <select style="color: black" wire:model="usuario.departamento" type="button" name="departamento" disabled>
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
                <select style="color: black" wire:model="usuario.puesto" type="button" name="puesto" disabled>
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
                    placeholder="Telefono, Ejemplo: 6531506589" disabled>
                @error('usuario.telefono')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <label style="color: black" for="">CURP</label>
                <input class="form-control" wire:model="usuario.curp" type="text" class="form-control"
                    placeholder=" CURP, Ejemplo: MAAA991217HSRRML06" disabled>
                @error('usuario.curp')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">RFC</label>
                <input class="form-control" wire:model="usuario.rfc" type="text" class="form-control"
                    placeholder="RFC, Ejemplo: MAAA991217HSRRML06" disabled>
                @error('usuario.rfc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row g-3 mt-2">
            <div class="col">
                <label style="color: black" for="">Clave de Elector</label>
                <input class="form-control" wire:model="usuario.ine" type="text" class="form-control"
                    placeholder="INE(Codigo)" disabled>
                @error('usuario.ine')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">Fecha de Ingreso</label>
                <input class="form-control" wire:model="usuario.fecha_ingreso" type="date" class="form-control"
                    placeholder=" Fecha de Ingreso Ejemplo: 05/05/2020" disabled>
                @error('usuario.fecha_ingreso')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">Fecha de Afiliación</label>
                <input class="form-control" wire:model="usuario.fecha_afiliacion" type="date" class="form-control"
                    placeholder=" Fecha de Afiliacion Ejemplo: 20/05/2020" disabled>
                @error('usuario.fecha_afiliacion')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row mt-3 g-2">

            <div class="col">
                <label style="color: black" for="">Nueva Contraseña</label>
                <input  wire:model="password" type="password" placeholder="Contraseña"
                    class="form-control">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col">
                <label style="color: black" for="">Confirmar Contraseña</label>
                <input c wire:model="confirm_password" type="password" placeholder="Confirmar Contraseña"
                    class="form-control">
                @error('confirm_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </form>
</div>
