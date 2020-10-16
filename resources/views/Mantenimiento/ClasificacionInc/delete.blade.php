<div wire:ignore.self class="modal fade" id="deleteclasificacion" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="deleteclasificaciontittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteclasificaciontittle">Eliminar Canal de Atención</h5>
        </div>
        <div class="modal-body">
            <h3>¿Desea Eliminar este Registro?</h3>
            <p>Este proceso no tiene reversión</p>
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" wire:click.prevent="destroy()" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>