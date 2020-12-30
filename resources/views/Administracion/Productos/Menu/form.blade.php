<div>
    @include('includes.obligatorio')
    <div class="form-group">
        <label for="producto">Producto</label><span id="prodhelp" class="text-danger">*</span>
        <select wire:model="producto" name="producto" class="form-control" {{$mode == 'edit' ? 'disabled':''}} aria-describedby="prodhelp">
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
        <label for="description">Descripción</label><span id="deshelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}}" wire:model="description" placeholder="Descripción" aria-describedby="deshelp">
        @error('description')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
</div>
