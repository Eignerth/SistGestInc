<div wire:ignore.self class="modal fade" id="updateclasificacion" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="updateclasificaciontittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateclasificaciontittle">Editar Clasificación de Incidencias</h5>
            </div>
            <div class="modal-body">
                @include('Mantenimiento.ClasificacionInc.form')
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
            </div>
        </div>
    </div>
</div>