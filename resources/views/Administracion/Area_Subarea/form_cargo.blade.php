<div>
    @include('includes.obligatorio')        
    <div class="form-group">
        <label for="areal">Área</label><span id="areahelp" class="text-danger">*</span>
        <select wire:model="area" class="form-control" id="areal" aria-describedby="seriehelp">
            <option>Elige...</option>
            @foreach ($areass as $aarea)
                <option value="{{$aarea->id}}">{{$aarea->description}}</option>                
            @endforeach
        </select>

        @error('area')
            <div class="invalid-feedback"> {{$message}} </div>                        
        @enderror
    </div>
    <div class="form-group">
        <label for="descripcionl">Descripción</label><span id="descriphelp" class="text-danger">*</span>
        <input wire:model="descripcion" type="text" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" id="descripcionl" placeholder="Descripción" aria-describedby="descriphelp">
        @error('descripcion')
            <div class="invalid-feedback"> {{$message}} </div>                            
        @enderror
    </div>
    <div>
        <label for="nivell">Nivel</label>
        <input wire:model="nivel" type="number" id="nivell" class="form-control {{$errors->has('nivel')?'is-invalid':''}}">
    </div>
    <div class="form-group">
        <label for="notasl">Notas Adicionales</label>
        <textarea wire:model="notas" id="notasl" class="form-control"rows="3" placeholder="Notas Adicionales"></textarea>
    </div>
</div>
