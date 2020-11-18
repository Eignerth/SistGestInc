<div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" wire:model="name" name="descripcion">
    </div>
    <label for="permisoWindows">Permisos de módulos</label>
    <div class="form-row align-items-center">
        <div wire:ignore class="col-auto my-3">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="dashboard" wire:model="dashboard" name="dashboard">
                <label class="custom-control-label user-select-none" for="dashboard">
                  Dashboard
                </label>
            </div>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="tickets" wire:model="tickets" name="tickets">
                <label class="custom-control-label user-select-none" for="tickets">
                  Tickets
                </label>
            </div>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="actividades" wire:model="actividades" name="actividades">
                <label class="custom-control-label user-select-none" for="actividades">
                  Actividades
                </label>
            </div>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="kb" wire:model="kb" name="kb">
                <label class="custom-control-label user-select-none" for="kb">
                  KB
                </label>
            </div>
        </div>
        <div wire:ignore class="col-auto my-3">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="equipo" wire:model="equipo" name="equipo">
                <label class="custom-control-label user-select-none" for="equipo">
                  Equipo
                </label>
            </div>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="clientes" wire:model="clientes" name="clientes">
                <label class="custom-control-label user-select-none" for="clientes">
                  Clientes
                </label>
            </div>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="informes" wire:model="informes" name="informes">
                <label class="custom-control-label user-select-none" for="informes">
                  Informes
                </label>
            </div>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="administracion" wire:model="administracion" name="administracion">
                <label class="custom-control-label user-select-none" for="administracion">
                  Administración
                </label>
            </div>
        </div>
        <div wire:ignore class="col-auto my-3">

            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="perfil" wire:model="perfil" name="perfil">
                <label class="custom-control-label user-select-none" for="perfil">
                  Perfil
                </label>
            </div>
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox"  id="mantenimiento" wire:model="mantenimiento" name="mantenimiento">
                <label class="custom-control-label user-select-none" for="mantenimiento">
                  Mantenimiento de Tablas
                </label>
            </div>
        </div>
    </div>
    <br><br>
    <div>
        {{--Dashboard--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Dashboard</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
        {{--Tickets--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tickets</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>
        {{--Actividades--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Actividades</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>
        {{--KB--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">KB</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>
        {{--Equipo--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Equipo</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>
        {{--Clientes--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Clientes</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Contactos</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rcontacto" id="rcontacto" name="rcontacto">
                                            <label class="custom-control-label" for="rcontacto">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="ccontacto" id="ccontacto" name="ccontacto">
                                            <label class="custom-control-label" for="ccontacto">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="ucontacto" id="ucontacto" name="ucontacto">
                                            <label class="custom-control-label" for="ucontacto">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="dcontacto" id="dcontacto" name="dcontacto">
                                            <label class="custom-control-label" for="dcontacto">
                                            Eliminar
                                            </label>
                                        </div>
                                    </div>                 
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Soporte de Clientes</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rsopcliente" id="rsopcliente" name="rsopcliente">
                                            <label class="custom-control-label" for="rsopcliente">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="csopcliente" id="csopcliente" name="csopcliente">
                                            <label class="custom-control-label" for="csopcliente">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="usopcliente" id="usopcliente" name="usopcliente">
                                            <label class="custom-control-label" for="usopcliente">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="dsopcliente" id="dsopcliente" name="dsopcliente">
                                            <label class="custom-control-label" for="dsopcliente">
                                            Eliminar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{--Informes--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Informes</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        The body of the card
                    </div>
                </div>
            </div>
        </div>
        {{--Administracion--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Administración</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Empresa</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"  wire:model="rempresa" id="rempresa" name="rempresa">
                                            <label class="custom-control-label" for="rempresa">
                                                Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="uempresa" id="uempresa" name="uempresa">
                                            <label class="custom-control-label" for="uempresa">
                                                Editar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Áreas y Cargos</strong>
                                <div class="form-row align-items-left">
                                    <div class="col-md-4">
                                        <strong>Área-Cargo</strong>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rareacargo" id="rareacargo" name="rareacargo">
                                            <label class="custom-control-label" for="rareacargo">
                                            Ver
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-row align-items-center">
                                        <div class="col-auto my-1">
                                            <strong>Áreas</strong>
                                        </div>
                                        <div class="col-auto my-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" wire:model="carea" id="carea" name="carea">
                                                <label class="custom-control-label" for="carea">
                                                Crear
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto my-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" wire:model="uarea" id="uarea" name="uarea">
                                                <label class="custom-control-label" for="uarea">
                                                Editar
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-auto my-1">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" wire:model="darea" id="darea" name="darea">
                                                <label class="custom-control-label" for="darea">
                                                Eliminar
                                                </label>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <strong>Cargos</strong>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="ccargo" id="ccargo" name="ccargo">
                                            <label class="custom-control-label" for="ccargo">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="ucargo" id="ucargo" name="ucargo">
                                            <label class="custom-control-label" for="ucargo">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="dcargo" id="dcargo" name="dcargo">
                                            <label class="custom-control-label" for="dcargo">
                                            Eliminar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Personal</strong>
                                <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="rpersonal" id="rpersonal" name="rpersonal">
                                        <label class="custom-control-label" for="rpersonal">
                                        Ver
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="cpersonal" id="cpersonal" name="cpersonal">
                                        <label class="custom-control-label" for="cpersonal">
                                        Crear
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="upersonal" id="upersonal" name="upersonal">
                                        <label class="custom-control-label" for="upersonal">
                                        Editar
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="dpersonal" id="dpersonal" name="dpersonal">
                                        <label class="custom-control-label" for="dpersonal">
                                        Eliminar
                                        </label>
                                    </div>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Productos y Servicios</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rproducto" id="rproducto" name="rproducto">
                                            <label class="custom-control-label" for="rproducto">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="cproducto" id="cproducto" name="cproducto">
                                            <label class="custom-control-label" for="cproducto">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="uproducto" id="uproducto" name="uproducto">
                                            <label class="custom-control-label" for="uproducto">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="dproducto" id="dproducto" name="dproducto">
                                            <label class="custom-control-label" for="dproducto">
                                            Eliminar
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Roles y Permisos</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rrol" id="rrol" name="rrol">
                                            <label class="custom-control-label" for="rrol">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="crol" id="crol" name="crol">
                                            <label class="custom-control-label" for="crol">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="urol" id="urol" name="urol">
                                            <label class="custom-control-label" for="urol">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="drol" id="drol" name="drol">
                                            <label class="custom-control-label" for="drol">
                                            Eliminar
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Usuarios</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rusuario" id="rusuario" name="rusuario">
                                            <label class="custom-control-label" for="rusuario">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="cusuario" id="cusuario" name="cusuario">
                                            <label class="custom-control-label" for="cusuario">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="uusuario" id="uusuario" name="uusuario">
                                            <label class="custom-control-label" for="uusuario">
                                            Editar
                                            </label>
                                        </div>
                                    </div>                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{--Perfil--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Perfil</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Datos Personales</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rdatopersonal" id="rdatopersonal" name="rdatopersonal">
                                            <label class="custom-control-label" for="rdatopersonal">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="udatopersonal" id="udatopersonal" name="udatopersonal">
                                            <label class="custom-control-label" for="udatopersonal">
                                            Editar
                                            </label>
                                        </div>
                                    </div>                                
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Bitácora</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rbitacora" id="rbitacora" name="rbitacora">
                                            <label class="custom-control-label" for="rbitacora">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="cbitacora" id="cbitacora" name="cbitacora">
                                            <label class="custom-control-label" for="cbitacora">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="ubitacora" id="ubitacora" name="ubitacora">
                                            <label class="custom-control-label" for="ubitacora">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="dbitacora" id="dbitacora" name="dbitacora">
                                            <label class="custom-control-label" for="dbitacora">
                                            Eliminar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Cambiar Contraseña</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rcambiarcontra" id="rcambiarcontra" name="rcambiarcontra">
                                            <label class="custom-control-label" for="rcambiarcontra">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="ucambiarcontra" id="ucambiarcontra" name="ucambiarcontra">
                                            <label class="custom-control-label" for="ucambiarcontra">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{--Mantenimiento de Tablas--}}
        <div wire:ignore class="row">
            <div class="col">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Mantenimiento de Tablas</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Docs. Identidad</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="ridentidad" id="ridentidad" name="ridentidad">
                                            <label class="custom-control-label" for="ridentidad">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="cidentidad" id="cidentidad" name="cidentidad">
                                            <label class="custom-control-label" for="cidentidad">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="uidentidad" id="uidentidad" name="uidentidad">
                                            <label class="custom-control-label" for="uidentidad">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="didentidad" id="didentidad" name="didentidad">
                                            <label class="custom-control-label" for="didentidad">
                                            Eliminar
                                            </label>
                                        </div>
                                    </div>                 
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Canales de Atención</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rcanal" id="rcanal" name="rcanal">
                                            <label class="custom-control-label" for="rcanal">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="ccanal" id="ccanal" name="ccanal">
                                            <label class="custom-control-label" for="ccanal">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="ucanal" id="ucanal" name="ucanal">
                                            <label class="custom-control-label" for="ucanal">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="dcanal" id="dcanal" name="dcanal">
                                            <label class="custom-control-label" for="dcanal">
                                            Eliminar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <strong>Clasificación de INC</strong>
                                <div class="form-row align-items-center">
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="rclasifinc" id="rclasifinc" name="rclasifinc">
                                            <label class="custom-control-label" for="rclasifinc">
                                            Ver
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="cclasifinc" id="cclasifinc" name="cclasifinc">
                                            <label class="custom-control-label" for="cclasifinc">
                                            Crear
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="uclasifinc" id="uclasifinc" name="uclasifinc">
                                            <label class="custom-control-label" for="uclasifinc">
                                            Editar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-auto my-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" wire:model="dclasifinc" id="dclasifinc" name="dclasifinc">
                                            <label class="custom-control-label" for="dclasifinc">
                                            Eliminar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>