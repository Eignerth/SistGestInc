<div wire:ignore.self class="modal fade" id="createticket" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="createtickettittle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="createtickettittle">Crear Nuevo Ticket</h5>
            <div wire:ignore>
                <button class="btn" data-toggle="tooltip" data-placement="bottom" title="Actualizar" wire:click="$refresh"><span style="color: green"><i class="fas fa-sync"></i></span></button>
            </div>
        </div>
        <div class="modal-body">
            @include('Soporte.Tickets.form',['mode'=>'create'])
            
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" wire:click.prevent="store()" class="btn  btn-primary" data-dismiss="modal">Agregar</button>
        </div>
        </div>
    </div>
</div>