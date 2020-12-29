<div>
    @include('includes.obligatorio')
    <form>                
        <div class="form-group">
            <label for="abbrevl">Abreviatura</label><span id="abrevhelp" class="text-danger">*</span>
            <input type="text" size="3" class="form-control {{$errors->has('abbrev')?'is-invalid':''}}" id="abbrevl" wire:model="abbrev" placeholder="Abreviatura" aria-describedby="abrevhelp">
            @error('abbrev')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group">
            <label for="descripl">Descripción</label><span id="descriphelp" class="text-danger">*</span>
            <input type="text" class="form-control {{$errors->has('descrip')?'is-invalid':''}}" id="descripl" wire:model="descrip" placeholder="Descripción" aria-describedby="descriphelp">
            @error('descrip')
                <div class="invalid-feedback"> {{$message}} </div>                            
            @enderror
        </div>
    </form>
</div>