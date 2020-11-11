<div class="form-group">
    <label for="producto">Producto</label>
    <select wire:model="producto" name="producto" class="form-control" {{$mode == 'edit' ? 'disabled':''}} >
        <option value="">Elige...</option>
        @foreach ($products as $product)
            <option value="{{$product->id}}">{{$product->abbreviation}}</option>
        @endforeach
    </select>
    @error('producto')
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