<div wire:ignore.self class="modal fade" id="referTksupport" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="referTksupporttittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="referTksupporttittle">Referenciar Tickets</h5>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                    <label for="tk">Ticket</label><span id="tkhelp" class="text-danger">*</span>
                    <input type="text" maxlength="14" class="form-control {{$errors->has('ticket')?'is-invalid':''}}" wire:model="ticket" placeholder="Ticket" aria-describedby="tkhelp">
                    @error('ticket')
                        <div class="text-danger"> {{$message}} </div>                        
                    @enderror
                </div>
            </form>
        </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="storeTk()" class="btn btn-success" data-dismiss="modal">Agregar</button>
            </div>
        </div>
    </div>
</div>
  
  