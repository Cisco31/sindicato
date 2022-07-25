<div>

    
    <div class="container cont-anuncio">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <input class="form-control" style="color: black;" wire:model="anuncio.titulo" type="text" id="comment"
                        placeholder="Titulo del anuncio" name="text">
                    @error('anuncio.titulo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <textarea class="form-control mt-1" wire:model="anuncio.contenido" type="text" placeholder="Especificaciones del anuncio"></textarea> <br>
                    @error('anuncio.contenido')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-2" id="input-file">
                        <p id="texto"><i class="fa fa-file-image"></i> Subir Imagen</p>
                        <input wire:model="url_img" type="file" id="imagen"
                            name="file">
                    </div>
                    <div>
                        @if ($url_img != null)
                            <img class="mx-auto d-block"
                                style="border-radius: 15px; width: 290px; height: 250px;"
                                src="{{ $url_img->temporaryUrl() }}" alt="">
                        @endif
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-sm">
                        <div class="form-group">
                            <a href="{{ route('admin.anuncios') }}" type="button"
                                class="float-left btn btn-dark">Registros</a>
                            <button wire:loading.attr="disabled" wire:target="url_img"
                                class="float-right btn btn-success"><i class="fa fa-save"></i>
                                Publicar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        jQuery('input[type=file]').change(function() {
            var filename = jQuery(this).val().split('\\').pop();
            var idname = jQuery(this).attr('id');
            console.log(jQuery(this));
            console.log(filename);
            console.log(idname);
            jQuery('span.' + idname).next().find('span').html(filename);
        });
    </script>
</div>
