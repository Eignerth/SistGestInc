<div wire:ignore.self class="modal fade" id="storecanal" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="storecanaltittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="storecanaltittle">Crear Nuevo Canal de Atención</h5>
        </div>
        <div class="modal-body">
            @include('Mantenimiento.Canal.form')
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" wire:click.prevent="store()" class="btn  btn-success" data-dismiss="modal">Agregar</button>
        </div>
        </div>
    </div>
</div>