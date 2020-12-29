<div>
    @include('includes.obligatorio')
    <div class="form-group">
        <label for="descriptionl">Descripción</label><span id="deshelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" id="description" wire:model="description" placeholder="Descripción" aria-describedby="deshelp">
        @error('description')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>            
    <div class="form-group">
        <label for="levell">Nivel</label><span id="levelhelp" class="text-danger">*</span>
        <input type="number" id="levell" class="form-control {{$errors->has('level')?'is-invalid':''}}" wire:model="level"placeholder="Nivel" aria-describedby="levelhelp">
        @error('level')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>

    <div>
        <label for="colorl">Color</label><span id="colorhelp" class="text-danger">*</span>
        <input id="colorl" wire:model="color" type="color"class="form-control {{$errors->has('color')?'is-invalid':''}}" aria-describedby="colorhelp">
        @error('color')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</div> 