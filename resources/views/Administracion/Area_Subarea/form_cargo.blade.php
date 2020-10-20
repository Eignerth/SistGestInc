<form wire:submit.prevent="update">                
    <div wire:ignore class="form-group">
        <label for="area">Área</label>
        <select wire:model="area" id="area" class="form-control" name="area">
            @foreach ($areas as $aarea)
                <option value="{{$aarea->id}}">{{$aarea->description}}</option>                
            @endforeach
        </select>

        @error('area')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input wire:model="descripcion" type="text" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" id="descripcion" name="descripcion" placeholder="Descripción">
        @error('descripcion')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
    <div>
        <label for="nivel">Nivel</label>
        <input wire:model="nivel" type="number" name="nivel" id="nivel" class="form-control {{$errors->has('nivel')?'is-invalid':''}}">
    </div>
    <div class="form-group">
        <label for="notas">Notas Adicionales</label>
        <textarea wire:model="notas" id="notas" class="form-control" name="notas" rows="3" placeholder="Notas Adicionales"></textarea>
    </div>
</form>