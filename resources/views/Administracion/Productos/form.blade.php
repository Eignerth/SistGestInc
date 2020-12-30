<form>
    @include('includes.obligatorio')
    <div class="form-group">
        <label for="abbreviation">Abreviatura</label><span id="abbrhelp" class="text-danger">*</span>
        <input type="text" maxlength="3" class="form-control {{$errors->has('abbreviation')?'is-invalid':''}}" wire:model="abbreviation" placeholder="Abreviatura" aria-describedby="abbrhelp">
        @error('abbreviation')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Descripción</label><span id="deshelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" wire:model="description" placeholder="Descripción" aria-describedby="deshelp">
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