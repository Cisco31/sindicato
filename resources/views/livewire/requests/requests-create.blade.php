<div>

    <div class="mt-2">
        <form wire:submit.prevent="crear">
            <div class="card request mx-auto w-50 ">
                <h5 class="card-header text-center bg-dark">
                    Solicitud Día Económico
                </h5>
                <div class="card-body col-6 mx-auto">
                    @include('livewire.requests.formulario')
                </div>
                <div class="card-footer text-center bg-dark">
                    <button type="submit" style="background-color: #0c8461"
                        class="btn btn-success btn-sm">Guardar</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        @if (count((array) $requests))
            <div class="div">
                <h2>Mis solicitudes realizadas</h2>
            </div>
            <table class="table table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <td scope="col">Fecha Solicitada</td>
                        <td scope="col">Dia en que se solicitó</td>
                        <td scope="col">Estado</td>
                        <td scope="col">Motivo</td>
                        <td>Opciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($requests as $request)
                        <tr>
                            <td>{{ $request->fecha }}</td>
                            <td>{{ $request->created_at }}</td>
                            @if ($request->estado == 0)
                                <td><span class="badge badge-pill badge-warning">Pendiente</span></td>
                            @elseif ($request->estado == 1)
                                <td><span style="background-color: #0c8461;"
                                        class="badge badge-pill badge-success">Aceptada</span></td>
                            @else
                                <td><span class="badge badge-pill badge-danger">Denegada</span></td>
                            @endif
                            <td>
                                {{ $request->motivo }}
                            </td>
                            <td>
                                @if ($request->estado == 0)
                                    <a href="{{ route('requests.delete', $request) }}" title="Eliminar Solicitud"
                                        class="btn btn-primary btn-sm" type="button"><i class="fa fa-edit"></i></a>
                                @elseif ($request->estado == 1 || $request->estado == 2)
                                    La solicitud ya no se puede modificar.
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endif
        <div>
            {{ $requests->links() }}
        </div>
    </div>

</div>




</div>
