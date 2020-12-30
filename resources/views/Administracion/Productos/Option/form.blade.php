<div>
    @include('includes.obligatorio')
    <div class="form-group">
        <label for="submenu">Opción</label><span id="ophelp" class="text-danger">*</span>
        <select wire:model="submenu" class="form-control" {{$mode == 'edit' ? 'disabled':''}} aria-describedby="ophelp">
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
        <label for="description">Descripción</label><span id="deshelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" wire:model="description" placeholder="Descripción">
        @error('description')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</div>
