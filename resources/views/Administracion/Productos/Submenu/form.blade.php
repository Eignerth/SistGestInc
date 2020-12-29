<div>
    @include('includes.obligatorio')
    <div class="form-group">
        <label for="menu">Menú</label>
        <select wire:model="menu" name="menu" class="form-control" {{$mode == 'edit' ? 'disabled':''}} >
            <option value="">Elige...</option>
            @foreach ($menus as $menu)
                <option value="{{$menu->id}}">{{$menu->product}} | {{$menu->description}}</option>
            @endforeach
        </select>
        @error('menu')
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
</div>
