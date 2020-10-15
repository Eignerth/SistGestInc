<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updatecompany" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="updatecompanytittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updatecompanytittle">Actualizar Datos de la Empresa</h5>
        </div>
        <div class="modal-body">
            <form wire:submit.prevent="update">
                <div class="form-group">
                    <label for="address">Dirección</label>
                    <input type="text" class="form-control {{$errors->has('address')?'is-invalid':''}}" id="address" wire:model="address" name="address" placeholder="Dirección">
                    @error('address')
                        <div class="invalid-feedback"> {{$message}} </div>                        
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telf">Teléfono</label>
                    <input type="text" class="form-control {{$errors->has('telf')?'is-invalid':''}}" id="telf" wire:model="telf" name="telf" placeholder="Teléfono">
                    @error('telf')
                        <div class="invalid-feedback"> {{$message}} </div>                            
                    @enderror
                </div>
                <div class="form-group">
                    <label for="web">Sitio Web</label>
                    <input type="text" class="form-control {{$errors->has('web')?'is-invalid':''}}" id="web" wire:model="web" name="web" placeholder="Sitio Web">
                    @error('web')
                        <div class="invalid-feedback"> {{$message}} </div>                            
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}" id="email" wire:model="email" name="email" placeholder="Correo Electrónico">
                    @error('email')
                        <div class="invalid-feedback"> {{$message}} </div>
                    @enderror
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Actualizar</button>
        </div>
      </div>
    </div>
  </div>

