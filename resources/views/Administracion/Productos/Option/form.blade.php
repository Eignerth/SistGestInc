<div class="form-group">
    <label for="submenu">Opción</label>
    <select wire:model="submenu" name="submenu" class="form-control" {{$mode == 'edit' ? 'disabled':''}} >
        <option value="">Elige...</option>
        @foreach ($submenus as $submenu)
            <option value="{{$submenu->id}}">{{$submenu->product}} | {{$submenu->menu}} | {{$submenu->description}}</option>
        @endforeach
    </select>
    @error('submenu')
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