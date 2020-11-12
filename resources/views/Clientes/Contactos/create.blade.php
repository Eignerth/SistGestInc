<div wire:ignore.self class="modal fade" id="storecontacto" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="storecontactotittle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="storecontactotittle">Crear Nuevo Contacto</h5>
      </div>
      <div class="modal-body">
          @include('Clientes.Contactos.form')
      </div>
      <div class="modal-footer">
          <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" wire:click.prevent="store()" class="btn  btn-primary" data-dismiss="modal">Agregar</button>
      </div>
    </div>
  </div>
</div>
