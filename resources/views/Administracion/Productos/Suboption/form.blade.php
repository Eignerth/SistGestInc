<div class="form-group">
    <label for="option">Sub-Opción</label>
    <select wire:model="option" name="option" class="form-control" {{$mode == 'edit' ? 'disabled':''}} >
        <option value="">Elige...</option>
        @foreach ($options as $option)
            <option value="{{$option->id}}">{{$option->product}} | {{$option->menu}} | {{$option->submenu}} | {{$option->description}}</option>
        @endforeach
    </select>
    @error('option')
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