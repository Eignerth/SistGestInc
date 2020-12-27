<div wire:ignore.self class="modal fade" id="updatekb" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="updatekbtittle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatekbtittle">Editar Conocimiento</h5>
                <div wire:ignore>
                    <button class="btn" data-toggle="tooltip" data-placement="bottom" title="Actualizar" wire:click="$refresh"><span style="color: green"><i class="fas fa-sync"></i></span></button>
                </div>
            </div>
            <div class="modal-body">
                @include('Kb.KbGeneral.form',['mode'=>'edit'])
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn  btn-primary" data-dismiss="modal">Actualizar</button>
            </div>
        </div>
    </div>
</div>