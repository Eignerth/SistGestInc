{{--Modal--}}
<div wire:ignore.self class="modal fade" id="deletestatus" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="deletestatustittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deletestatustittle">Eliminar Estado de Avance</h5>
        </div>
        <div class="modal-body">
            <h3>¿Desea Eliminar este Registro?</h3>
            <p>Este proceso no tiene reversión</p>
            <div>
              <small class="text-danger">Si la descripción es <strong>Terminado.</strong>No eliminar!
              </small>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" wire:click.prevent="destroy()" class="btn  btn-danger" data-dismiss="modal">Eliminar</button>
        </div>
      </div>
    </div>
  </div>