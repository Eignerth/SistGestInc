<!-- Modal -->
<div wire:ignore.self class="modal fade" id="deletearea" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="deleteareatittle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteareatittle">Eliminar Área</h5>
      </div>
      <div class="modal-body">
          <h3>¿Desea Eliminar este Registro?</h3>
          <p>Este proceso no tiene reversión</p>
      </div>
      <div class="modal-footer">
          <button type="button" wire:click.prevent="cancel()" class="btn btnarea btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" wire:click.prevent="destroy()" class="btn btnarea btn-danger" data-dismiss="modal">Eliminar</button>
      </div>
    </div>
  </div>
</div>