<div wire:ignore.self class="modal fade" id="commentkb" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="commentkbtittle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="commentkbtittle">Comentar</h5>
        </div>
        <div class="modal-body">
            <form id="commentform">
                <div class="form-group">
                    <label for="men">Comentario</label>
                    <textarea id="men" class="form-control overflow-auto" wire:model="mensaje" rows="10" placeholder="Escribe un comentario..." style="resize: none" required></textarea>
                    @error('mensaje')
                        <div class="text-danger"> {{$message}} </div>                        
                    @enderror
                </div>
            </form>
        </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn  btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="comment()" type="submit" form="commetnform" class="btn  btn-success" data-dismiss="modal">Publicar</button>
            </div>
        </div>
    </div>
</div>
  
  