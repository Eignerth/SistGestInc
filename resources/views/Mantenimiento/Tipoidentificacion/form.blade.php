<div>
    @include('includes.obligatorio')
    <form>                
        <div class="form-group">
            <label for="abbreviationl">Abreviatura</label><span id="abbrevhelp" class="text-danger">*</span>
            <input type="text" size="3" class="form-control {{$errors->has('abbreviation')?'is-invalid':''}}" id="abbreviationl" wire:model="abbreviation" placeholder="Abreviatura" aria-describedby="abbrevhelp">
            @error('abbreviation')
                <div class="invalid-feedback"> {{$message}} </div>                        
            @enderror
        </div>
        <div class="form-group">
            <label for="descriptionl">Descripción</label><span id="descriphelp" class="text-danger">*</span>
            <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" id="descriptionl" wire:model="description" placeholder="Descripción" aria-describedby="descriphelp">
            @error('description')
                <div class="invalid-feedback"> {{$message}} </div>                            
            @enderror
        </div>
        <div>
            <label for="digitsl">N° Digitos</label><span id="numhelp" class="text-danger">*</span>
            <input wire:model="digits" type="number" id="digitsl" class="form-control {{$errors->has('digits')?'is-invalid':''}}" aria-describedby="numhelp">
            @error('digits')
                <div class="invalid-feedback"> {{$message}} </div>                            
            @enderror
        </div>
    </form>
</div>
