<div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input type="text" class="form-control" wire:model="name" name="descripcion">
    </div>
    <label for="permisoWindows">Permisos de módulos</label>
    

    <div wire:ignore>
        <div class="accordion" id="accordionExample">
            {{--Soporte--}}
            <div class="card">
              <div class="card-header" id="headingOne">
                    <div class="row">
                        <div class="col-md-10 form-inline">                            
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <span class="h4">Soporte</span>
                            </button>                            
                        </div>                
                        <div class="col-md-2 mt-2">                 
                            <div class="form-check form-check-inline">
                                <input class=" align-middle form-check-input position-static" type="checkbox" aria-label="Soporte">
                            </div>
                        </div>
                    </div>                       
              </div>          
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            {{--KB--}}
            <div class="card">
              <div class="card-header" id="headingTwo">
                <div class="row">
                    <div class="col-md-10 form-inline">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span class="h4">KB</span>
                        </button>
                    </div>
                    <div class="col-md-2 mt-2">                 
                        <div class="form-check form-check-inline">
                            <input class=" align-middle form-check-input position-static" type="checkbox" wire:model="kb" aria-label="...">
                        </div>
                    </div>
                </div>                
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            {{--Clientes--}}
            <div class="card">
                <div class="card-header" id="headingThree">     
                    <div class="row">
                        <div class="col-md-10 form-inline">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="h4">Clientes</span>
                            </button> 
                        </div>
                        <div class="col-md-2 mt-2">                 
                            <div class="form-check form-check-inline">
                                <input class=" align-middle form-check-input position-static" type="checkbox" wire:model="clientes" aria-label="...">
                            </div>
                        </div>
                    </div>           
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
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
            {{--Informes--}}
            <div class="card">
                <div class="card-header" id="headingFour">
                    <div class="row">
                        <div class="col-md-10 form-inline">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="h4">Informes</span>
                            </button>
                        </div>
                        <div class="col-md-2 mt-2">                 
                            <div class="form-check form-check-inline">
                                <input class=" align-middle form-check-input position-static" type="checkbox" wire:model="informes" aria-label="...">
                            </div>
                        </div>                    
                    </div>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
            </div>
            {{--Administración--}}
            <div class="card">
                <div class="card-header" id="headingFive">
                    <div class="row">
                        <div class="col-md-10 form-inline">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="h4">Administración</span>
                            </button>
                        </div>
                        <div class="col-md-2 mt-2">                 
                            <div class="form-check form-check-inline">
                                <input class=" align-middle form-check-input position-static" type="checkbox" wire:model="administracion" aria-label="...">
                            </div>
                        </div> 
                    </div>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
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
            {{--Perfil--}}
            <div class="card">
                <div class="card-header" id="headingSix">
                    <div class="row">
                        <div class="col-md-10 form-inline">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <span class="h4">Perfil</span> 
                            </button>
                        </div>
                    </div>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
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
                                        <input class="custom-control-input" type="checkbox" wire:model="rbitacora" id="rbitacoral">
                                        <label class="custom-control-label" for="rbitacoral">
                                        Ver
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
                                        <input class="custom-control-input" type="checkbox" wire:model="rcambiarcontra" id="rcambiarcontral">
                                        <label class="custom-control-label" for="rcambiarcontral">
                                        Ver
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="ucambiarcontra" id="ucambiarcontral">
                                        <label class="custom-control-label" for="ucambiarcontral">
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
            {{--Mantenimiento de Tablas--}}
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <div class="row">
                        <div class="col-md-10 form-inline">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <span class="h4">Mantenimiento de Tablas</span>
                            </button>
                        </div>
                        <div class="col-md-2 mt-2">                 
                            <div class="form-check form-check-inline">
                                <input class=" align-middle form-check-input position-static" type="checkbox" wire:model="mantenimiento" aria-label="...">
                            </div>
                        </div>                        
                    </div>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                  <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Docs. Identidad</strong>
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="ridentidad" id="ridentidadl">
                                        <label class="custom-control-label" for="ridentidadl">
                                        Ver
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="cidentidad" id="cidentidadl">
                                        <label class="custom-control-label" for="cidentidadl">
                                        Crear
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="uidentidad" id="uidentidadl">
                                        <label class="custom-control-label" for="uidentidadl">
                                        Editar
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="didentidad" id="didentidadl">
                                        <label class="custom-control-label" for="didentidadl">
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
                                        <input class="custom-control-input" type="checkbox" wire:model="rcanal" id="rcanall">
                                        <label class="custom-control-label" for="rcanall">
                                        Ver
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="ccanal" id="ccanall">
                                        <label class="custom-control-label" for="ccanall">
                                        Crear
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="ucanal" id="ucanall">
                                        <label class="custom-control-label" for="ucanall">
                                        Editar
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="dcanal" id="dcanall">
                                        <label class="custom-control-label" for="dcanall">
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
                                        <input class="custom-control-input" type="checkbox" wire:model="rclasifinc" id="rclasifincl">
                                        <label class="custom-control-label" for="rclasifincl">
                                        Ver
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="cclasifinc" id="cclasifincl">
                                        <label class="custom-control-label" for="cclasifincl">
                                        Crear
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="uclasifinc" id="uclasifincl">
                                        <label class="custom-control-label" for="uclasifincl">
                                        Editar
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="dclasifinc" id="dclasifincl">
                                        <label class="custom-control-label" for="dclasifincl">
                                        Eliminar
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <strong>Estado de Prioridad</strong>
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="rprioridad" id="rprioridadl">
                                        <label class="custom-control-label" for="rprioridadl">
                                        Ver
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="cprioridad" id="cprioridadl">
                                        <label class="custom-control-label" for="cprioridadl">
                                        Crear
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="uprioridad" id="uprioridadl">
                                        <label class="custom-control-label" for="uprioridadl">
                                        Editar
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="dprioridad" id="dprioridadl">
                                        <label class="custom-control-label" for="dprioridadl">
                                        Eliminar
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <strong>Control de Serie</strong>
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="rconserie" id="rconseriel">
                                        <label class="custom-control-label" for="rconseriel">
                                        Ver
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="cconserie" id="cconseriel">
                                        <label class="custom-control-label" for="cconseriel">
                                        Crear
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="uconserie" id="uconseriel">
                                        <label class="custom-control-label" for="uconseriel">
                                        Editar
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="dconserie" id="dconseriel">
                                        <label class="custom-control-label" for="dconseriel">
                                        Eliminar
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <strong>Estado de Avance</strong>
                            <div class="form-row align-items-center">
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="rstatus" id="rstatusl">
                                        <label class="custom-control-label" for="rstatusl">
                                        Ver
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="cstatus" id="cstatusl">
                                        <label class="custom-control-label" for="cstatusl">
                                        Crear
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="ustatus" id="ustatusl">
                                        <label class="custom-control-label" for="ustatusl">
                                        Editar
                                        </label>
                                    </div>
                                </div>
                                <div class="col-auto my-1">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" wire:model="dstatus" id="dstatusl">
                                        <label class="custom-control-label" for="dstatusl">
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