<div>

    <head>
        <link rel="stylesheet" href="{{ asset('static/css/anuncio-create.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <div>
        <div>
            <form action="{{ route('fileUpload') }}" method="post" enctype="multipart/form-data">

                @csrf
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center">Subir Documentos</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!--<div class="col justify-content-start">
                                <p id="texto"><i class="fa fa-file-image"></i> Seleccionar archivo</p>
                                <input type="file" name="file">
                            </div>-->

                            <div class="input-group mb-3">
                                <input type="file" name="file" class="form-control" id="inputGroupFile01">
                              </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col justify-content-start">
                                <button type="submit" name="submit" style="background-color: #0c8461;" class="btn  btn-secondary">
                                    Subir Documento
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

</div>
