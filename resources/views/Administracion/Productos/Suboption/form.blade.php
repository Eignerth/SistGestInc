<div>
    @include('includes.obligatorio')
    <div class="form-group">
        <label for="option">Sub-Opción</label><span id="subophelp" class="text-danger">*</span>
        <select wire:model="option" class="form-control" {{$mode == 'edit' ? 'disabled':''}} aria-describedby="subophelp">
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
        <label for="description">Descripción</label><span id="deshelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" wire:model="description" placeholder="Descripción" aria-describedby="deshelp">
        @error('description')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</div>
