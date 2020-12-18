<form>                
    <div class="form-group">
        <label for="area">Área</label>
        <select wire:model="area" name="area" id="area" class="form-control" {{$mode == 'edit' ? 'disabled':''}}>
            <option value="">Elige...</option>
            @foreach ($areas as $area)
                <option value="{{$area->id}}">{{$area->abbreviation}}&nbsp;|&nbsp;{{$area->description}}</option>
            @endforeach
        </select>
        @error('area')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="serie">Serie</label>
        <input type="text" maxlength="3" class="form-control {{$errors->has('serie')?'is-invalid':''}}" id="serie" wire:model="serie" name="serie" placeholder="Serie" {{$mode == 'edit' ? 'disabled':''}}>
        @error('serie')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
    <div class="form-group">
        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
            <input type="checkbox" class="custom-control-input" id="status"  name="status" wire:model="status">
            <label class="custom-control-label" for="status">Activar Serie</label>
            @error('status')
                <div class="invalid-feedback"><strong>{{$message}}</strong></div>
            @enderror
        </div>
    </div>

</form>