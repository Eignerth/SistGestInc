<div>
    @include('includes.obligatorio')
    <form>                
        <div class="form-group">
            <label for="area">Área</label><span id="areahelp" class="text-danger">*</span>
            <select wire:model="area" id="area" class="form-control" {{$mode == 'edit' ? 'disabled':''}} aria-describedby="areahelp">
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
            <label for="serie">Serie</label><span id="seriehelp" class="text-danger">*</span>
            <input type="text" maxlength="3" class="form-control {{$errors->has('serie')?'is-invalid':''}}" wire:model="serie"placeholder="Serie" {{$mode == 'edit' ? 'disabled':''}} aria-describedby="seriehelp">
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
</div>