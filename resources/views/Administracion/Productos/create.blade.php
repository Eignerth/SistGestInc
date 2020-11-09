<div wire:ignore.self class="modal fade" id="storeproducto" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="storeproductotittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="storeproductotittle">Crear Nuevo Producto - Servicio</h5>
        </div>
        <div class="modal-body">
            <form>  
                <div class="form-group">
                    <label for="abbreviation">Abreviatura</label>
                    <input type="text" maxlength="3" class="form-control {{$errors->has('abbreviation')?'is-invalid':''}}" wire:model="abbreviation" name="abbreviation" placeholder="Abreviatura">
                    @error('abbreviation')
                        <div class="invalid-feedback"> {{$message}} </div>                            
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" wire:model="description" name="description" placeholder="Descripción">
                    @error('description')
                        <div class="invalid-feedback"> {{$message}} </div>                        
                    @enderror
                </div>
                <div class="form-group">
                    <label for="addnote">Datos Adicionales</label>
                    <textarea name="addnote" class="form-control {{$errors->has('addnote')?'is-invalid':''}}" wire:model="addnote" id="addnote" cols="30" rows="4" placeholder="Datos Adicionales"></textarea>
                    @error('addnote')
                        <div class="invalid-feedback"> {{$message}} </div>                        
                    @enderror
                </div>
            </form>
            
            
            
        </div>
        <div class="modal-footer">
            <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" wire:click.prevent="store()" class="btn  btn-primary" data-dismiss="modal">Agregar</button>
        </div>
      </div>
    </div>
  </div>

