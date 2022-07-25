<div class="container">
    {{-- <img src="{{ asset('static/images/sututslrc.png') }}" width="150" height="150" alt=""> --}}
    <h1><span style="color:#177c67">SUTUT</span><span style="color:grey">SLRC</span></h1>

    <h2>Lista de usuarios</h2>
</div>

<table class="table text-center table-striped">
    <thead class="table-dark">
        <tr>
            <td scope="col"><b>Nombre</b></td>
            <td scope="col"><b>Apellido</b></td>
            <td scope="col"><b>Puesto</b></td>
            <td scope="col"><b>Departamento</b></td>
            <td scope="col"><b>Estado</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td scope="row">{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellido }}</td>
                <td>{{ $usuario->puesto }}</td>
                <td>{{ $usuario->departamento }}</td>
                @if ($usuario->estado == 1)
                    <td><span class="badge badge-pill badge-success">Activo</span></td>
                @elseif ($usuario->estado == 0)
                    <td><span class="badge badge-pill badge-danger">Inactivo</span></td>
                @endif

            </tr>
        @endforeach
    </tbody>
</table>

