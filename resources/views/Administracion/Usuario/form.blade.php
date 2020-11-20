<div class="form-group">
    <label for="personal">Personal</label>
    <select class="form-control" name="personal" wire:model="personal" required {{$mode=='edit'?'disabled':''}}>
        <option value="" selected>--Escoger--</option>
        @if ($mode=='create')
            @foreach ($personals as $personal)
                <option value="{{$personal->id}}">{{$personal->name}}</option>
            @endforeach
        @endif
        @if ($mode=='edit')
            @foreach ($personalsT as $personal)
                <option value="{{$personal->id}}">{{$personal->name}}</option>
            @endforeach
        @endif
    </select>
    @error('personal')
            <div class="invalid-feedback"><strong>{{$message}}</strong> </div>
    @enderror
</div>
<div class="form-group">
    <label for="usuario">Usuario</label>
    <input type="text" class="form-control {{$errors->has('usuario')?'is-invalid':''}}" maxlength="20" name="usuario" wire:model="usuario" required placeholder="Usuario">
    @error('usuario')
            <div class="invalid-feedback"><strong>{{$message}}</strong> </div>
    @enderror
</div>
@if ($mode=='edit')
    <div class="form-group">
        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
        <input type="checkbox" class="custom-control-input" id="changepassword"  name="changepassword" wire:model="changepassword" >
            <label class="custom-control-label" for="changepassword">Cambiar Contraseña</label>
            @error('changepassword')
                <div class="invalid-feedback"><strong>{{$message}}</strong></div>
            @enderror
        </div>
    </div>    
@endif
<div class="form-group">
    <label for="clave">Contraseña</label>
    <input type="password" class="form-control {{$errors->has('password')?'is-invalid':''}}" wire:model="password" name="password" required placeholder="Contraseña">
    @error('password')
            <div class="invalid-feedback"><strong>{{$message}}</strong> </div>
    @enderror
</div>
<div class="form-group">
    <label for="rclave">Repetir Contraseña</label>
    <input type="password" class="form-control {{$errors->has('password_confirmation')?'is-invalid':''}}" wire:model="password_confirmation" name="password_confirmation" wire:model="password_confirmation" required placeholder="Repita la Contraseña">
    @error('password_confirmation')
            <div class="invalid-feedback"><strong>{{$message}}</strong> </div>
    @enderror
</div>
<div class="form-group">
    <label for="rol">Rol</label>
    <select id="rol" class="form-control" name="role" wire:model="role" required >
        <option value="" selected>--Escoger--</option>
        @foreach ($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
        @endforeach
    </select>
    @error('role')
            <div class="invalid-feedback"><strong>{{$message}}</strong> </div>
    @enderror
</div>

<div class="form-group">
    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
        <input type="checkbox" class="custom-control-input" id="status"  name="status" wire:model="status">
        <label class="custom-control-label" for="status">Activar Usuario</label>
        @error('status')
            <div class="invalid-feedback"><strong>{{$message}}</strong></div>
        @enderror
    </div>
</div>