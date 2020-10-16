<div wire:ignore.self class="modal fade" id="storeidentidad" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="storeidentidadtittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="storeidentidadtittle">Crear Nuevo Cargo</h5>
        </div>
        <div class="modal-body">
            @include('Mantenimiento.Tipoidentificacion.form')
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" wire:click.prevent="store()" class="btn  btn-danger" data-dismiss="modal">Agregar</button>
        </div>
        </div>
    </div>
</div>