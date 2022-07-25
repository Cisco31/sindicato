<div class="container">
    {{-- <img src="{{ asset('static/images/sututslrc.png') }}" width="150" height="150" alt=""> --}}
    <h1><span style="color:#177c67">SUTUT</span><span style="color:grey">SLRC</span></h1>

    <h2>Lista de solicitudes</h2>
</div>

<table class="table text-center table-striped">
    <thead class="table-dark">
        <tr>
            <td scope="col">Id</td>
            <td scope="col">Nombre</td>
            <td scope="col">Estado</td>
            <td scope="col">Fecha en que se Solicito</td>
            <td scope="col">Motivo</td>
        </tr>
    </thead>
    @foreach ($requests as $request)
        <tbody>
            <tr>
                <!--ID-->
                <td scope="row">{{ $request->id }}</td>
                <!--Nombre-->
                <td>{{ $request->id_usuario }}</td>
                <!--Estado-->
                @if ($request->estado == 0)
                    <td><span class="badge badge-pill badge-warning">Pendiente</span></td>
                @elseif ($request->estado == 1)
                    <td><span class="badge badge-pill badge-success">Aceptada</span></td>
                @elseif ($request->estado == 2)
                    <td><span class="badge badge-pill badge-danger">Denegada</span></td>
                @endif
                <!--Fecha-->
                <td>{{ $request->created_at }}</td>
                <!--Motivo-->
                @if ($request->motivo != null)
                    <td>{{ $request->motivo }}</td>
                @elseif ($request->estado == 0)
                @else
                    <td>Cumplio con los requisitos</td>
                @endif
            </tr>

        </tbody>
    @endforeach
</table>
