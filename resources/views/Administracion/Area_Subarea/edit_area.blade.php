<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updatearea" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="updateareatittle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateareatittle">Actualizar Área</h5>
      </div>
      <div class="modal-body">
          @include('Administracion.Area_Subarea.form_area')
      </div>
      <div class="modal-footer">
          <button type="button" wire:click.prevent="cancel()" class="btn btnarea btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" wire:click.prevent="update()" class="btn btnarea btn-primary" data-dismiss="modal">Actualizar</button>
      </div>
    </div>
  </div>
</div>

