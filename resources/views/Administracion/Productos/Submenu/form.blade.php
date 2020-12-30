<div>
    @include('includes.obligatorio')
    <div class="form-group">
        <label for="menu">Menú</label><span id="menuhelp" class="text-danger">*</span>
        <select wire:model="menu" name="menu" class="form-control" {{$mode == 'edit' ? 'disabled':''}} aria-describedby="menuhelp">
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
        <label for="description">Descripción</label><span id="deshelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" wire:model="description" placeholder="Descripción" aria-describedby="deshelp">
        @error('description')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</div>
