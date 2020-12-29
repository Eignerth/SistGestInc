<div>
    @include('includes.obligatorio')
    <div class="form-group">
        <label for="descriptionl">Descripción</label><span id="descriptionhelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" id="descriptionl" wire:model="description" placeholder="Descripción" aria-describedby="descriptionhelp">
        @error('description')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>            
    <div>
        <label for="digits">Color</label>
        <input wire:model="color" type="color" name="color" class="form-control {{$errors->has('color')?'is-invalid':''}}">
        @error('color')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</div> 