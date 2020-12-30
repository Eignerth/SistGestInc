<div>
    @include('includes.obligatorio')
    <div class="form-group">
        <label for="personal">Personal</label><span id="perhelp" class="text-danger">*</span>
        <select class="form-control" wire:model="personal" {{$mode=='edit'?'disabled':''}} aria-describedby="perhelp">
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
        <label for="usuario">Usuario</label><span id="userhelp" class="text-danger">*</span>
        <input type="text" class="form-control {{$errors->has('usuario')?'is-invalid':''}}" maxlength="20" wire:model="usuario" placeholder="Usuario" aria-describedby="userhelp">
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
        <input type="password" class="form-control {{$errors->has('password')?'is-invalid':''}}" wire:model="password" name="password" placeholder="Contraseña">
        @error('password')
                <div class="invalid-feedback"><strong>{{$message}}</strong> </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="rclave">Repetir Contraseña</label>
        <input type="password" class="form-control {{$errors->has('password_confirmation')?'is-invalid':''}}" wire:model="password_confirmation" name="password_confirmation" wire:model="password_confirmation" placeholder="Repita la Contraseña">
        @error('password_confirmation')
                <div class="invalid-feedback"><strong>{{$message}}</strong> </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="rol">Rol</label><span id="rolhelp" class="text-danger">*</span>
        <select id="rol" class="form-control" wire:model="role" aria-describedby="rolhelp">
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
</div>