<div wire:ignore.self class="modal fade" id="storeusuario" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="storeusuariotittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="storeusuariotittle">Crear Usuario</h5>
        </div>
        <div class="modal-body">
            @include('Administracion.Usuario.form',['mode'=>'create'])
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" wire:click.prevent="store()" class="btn  btn-success" data-dismiss="modal">Agregar</button>
        </div>
        </div>
    </div>
</div>