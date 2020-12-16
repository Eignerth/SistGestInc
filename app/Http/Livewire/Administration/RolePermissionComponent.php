<?php

namespace App\Http\Livewire\Administration;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class RolePermissionComponent extends Component
{
    use WithPagination, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$name;
    //modulos
    public $tickets=0,$kb=0,$clientes=0,$informes=0,$administracion=0,$mantenimiento=0;
    //clientes
    public $rcontacto=0,$ccontacto=0,$ucontacto=0,$dcontacto=0,$rsopcliente=0, $csopcliente=0, $usopcliente=0, $dsopcliente=0;
    //administracion
    public $rempresa=0,$uempresa=0;
    public $rareacargo=0,$carea=0,$uarea=0,$darea=0,$ccargo=0,$ucargo=0,$dcargo=0;
    public $rpersonal=0,$cpersonal=0,$upersonal=0,$dpersonal=0;
    public $rproducto=0,$cproducto=0,$uproducto=0,$dproducto=0;
    public $rrol=0,$crol=0,$urol=0,$drol=0;
    public $rusuario=0,$cusuario=0,$uusuario=0,$dusuario=0;
    //perfil
    public $rdatopersonal=0,$udatopersonal=0,$rbitacora=0,$rcambiarcontra=0,$ucambiarcontra=0;
    //matenimiento
    public $ridentidad=0,$cidentidad=0,$uidentidad=0,$didentidad=0,$rcanal=0,$ccanal=0,$ucanal=0,$dcanal=0,$rclasifinc=0,$cclasifinc=0,$uclasifinc=0,$dclasifinc=0,$rprioridad=0,$cprioridad=0,$uprioridad=0,$dprioridad=0,$rconserie=0,$cconserie=0,$uconserie=0,$dconserie=0,$rstatus=0,$cstatus=0,$ustatus=0,$dstatus=0;

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }
    public function render()
    {
        
        return view('livewire.administration.role-permission-component',[
            'roles'=>Role::select('id','name')
            ->where('name','like','%'.$this->search.'%')
            ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
            ->having('name','<>','Miauwaiilol17')
            ->paginate($this->porPagina),
        ]);
    }
    public function updated($propertyName)
    {   
        $this->validateOnly($propertyName,[
            'name'=>'required|min:3|unique:roles,name,'.$this->codigo.',id',
            
        ]);
    }
    public function store()
    {
        try {
            //$this->authorize('Agregar Rol');
            $role = Role::create(['name'=>$this->name]);
            $permissions = array();
             
            
            if ($this->tickets==1) {
                array_push($permissions,Permission::findByName('Tickets'));
            }
            if ($this->kb==1) {
                array_push($permissions,Permission::findByName('KB'));
            }
            if ($this->clientes==1) {
                array_push($permissions,Permission::findByName('Clientes'));
                if ($this->rcontacto==1) {
                    array_push($permissions,Permission::findByName('Ver Contactos'));
                    if ($this->ccontacto==1) {
                        array_push($permissions,Permission::findByName('Agregar Contactos'));
                    }
                    if ($this->ucontacto==1) {
                        array_push($permissions,Permission::findByName('Editar Contactos'));
                    }
                    if ($this->dcontacto==1) {
                        array_push($permissions,Permission::findByName('Eliminar Contactos'));
                    }
                        
                }
                if ($this->rsopcliente==1) {
                    array_push($permissions,Permission::findByName('Ver Soporte de Clientes'));
                    if ($this->csopcliente==1) {
                        array_push($permissions,Permission::findByName('Agregar Soporte de Clientes'));
                    }
                    if ($this->usopcliente==1) {
                        array_push($permissions,Permission::findByName('Editar Soporte de Clientes'));
                    }
                    if ($this->dsopcliente==1) {
                        array_push($permissions,Permission::findByName('Eliminar Soporte de Clientes'));
                    }
                }
                    
            }
            if ($this->informes==1) {
                array_push($permissions,Permission::findByName('Informes'));
            }
            if ($this->administracion==1) {
                array_push($permissions,Permission::findByName('Administración'));
                if ($this->rempresa==1) {
                    array_push($permissions,Permission::findByName('Ver Empresa'));
                    if ($this->uempresa==1) {
                        array_push($permissions,Permission::findByName('Editar Empresa'));
                    }
                }
                if ($this->rareacargo==1) {
                    array_push($permissions,Permission::findByName('Ver Área-Cargo'));
                    if ($this->carea==1) {
                        array_push($permissions,Permission::findByName('Agregar Área'));
                    }
                    if ($this->uarea==1) {
                        array_push($permissions,Permission::findByName('Editar Área'));
                    }
                    if ($this->darea==1) {
                        array_push($permissions,Permission::findByName('Eliminar Área'));
                    }
                    if ($this->ccargo==1) {
                        array_push($permissions,Permission::findByName('Agregar Cargo'));
                    }
                    if ($this->ucargo==1) {
                        array_push($permissions,Permission::findByName('Editar Cargo'));
                    }
                    if ($this->dcargo==1) {
                        array_push($permissions,Permission::findByName('Eliminar Cargo'));
                    }
                }
                if ($this->rpersonal==1) {
                    array_push($permissions,Permission::findByName('Ver Personal'));
                    if ($this->cpersonal==1) {
                        array_push($permissions,Permission::findByName('Agregar Personal'));
                    }
                    if ($this->upersonal==1) {
                        array_push($permissions,Permission::findByName('Editar Personal'));
                    }
                    if ($this->dpersonal==1) {
                        array_push($permissions,Permission::findByName('Eliminar Personal'));
                    }
                }
                if ($this->rproducto==1) {
                    array_push($permissions,Permission::findByName('Ver Producto'));
                    if ($this->cproducto==1) {
                        array_push($permissions,Permission::findByName('Agregar Producto'));
                    }
                    if ($this->uproducto==1) {
                        array_push($permissions,Permission::findByName('Editar Producto'));
                    }
                    if ($this->dproducto==1) {
                        array_push($permissions,Permission::findByName('Eliminar Producto'));
                    }
                }
                if ($this->rrol==1) {
                    array_push($permissions,Permission::findByName('Ver Rol'));
                    if ($this->crol==1) {
                        array_push($permissions,Permission::findByName('Agregar Rol'));
                    }
                    if ($this->urol==1) {
                        array_push($permissions,Permission::findByName('Editar Rol'));
                    }
                    if ($this->drol==1) {
                        array_push($permissions,Permission::findByName('Eliminar Rol'));
                    }
                }
                if ($this->rusuario==1) {
                    array_push($permissions,Permission::findByName('Ver Usuario'));
                    if ($this->cusuario==1) {
                        array_push($permissions,Permission::findByName('Agregar Usuario'));
                    }
                    if ($this->uusuario==1) {
                        array_push($permissions,Permission::findByName('Editar Usuario'));
                    }
                }
                
            }
            if ($this->perfil==1) {
                array_push($permissions,Permission::findByName('Perfil'));
                if ($this->rdatopersonal==1) {
                    array_push($permissions,Permission::findByName('Ver Datos Personales'));
                    if ($this->udatopersonal==1) {
                        array_push($permissions,Permission::findByName('Editar Datos Personales'));
                    }
                }
                if ($this->rbitacora==1) {
                    array_push($permissions,Permission::findByName('Ver Bitácora'));
                }
                if ($this->rcambiarcontra==1) {
                    array_push($permissions,Permission::findByName('Ver Cambiar Contraseña'));
                    if ($this->ucambiarcontra==1) {
                        array_push($permissions,Permission::findByName('Editar Cambiar Contraseña'));
                    }
                }
                
            }
            if ($this->mantenimiento==1) {
                array_push($permissions,Permission::findByName('Mantenimiento de Tablas'));
                if ($this->ridentidad==1) {
                    array_push($permissions,Permission::findByName('Ver Docs Identidad'));
                    if ($this->cidentidad==1) {
                        array_push($permissions,Permission::findByName('Agregar Docs Identidad'));
                    }
                    if ($this->uidentidad==1) {
                        array_push($permissions,Permission::findByName('Editar Docs Identidad'));
                    }
                    if ($this->didentidad==1) {
                        array_push($permissions,Permission::findByName('Eliminar Docs Identidad'));
                    }
                }
                if ($this->rcanal==1) {
                    array_push($permissions,Permission::findByName('Ver Canales de Atención'));
                    if ($this->ccanal==1) {
                        array_push($permissions,Permission::findByName('Agregar Canales de Atención'));
                    }
                    if ($this->ucanal==1) {
                        array_push($permissions,Permission::findByName('Editar Canales de Atención'));
                    }
                    if ($this->dcanal==1) {
                        array_push($permissions,Permission::findByName('Eliminar Canales de Atención'));
                    }
                }
                if ($this->rclasifinc==1) {
                    array_push($permissions,Permission::findByName('Ver Clasif. Inc.'));
                    if ($this->cclasifinc) {
                        array_push($permissions,Permission::findByName('Agregar Clasif. Inc.'));
                    }
                    if ($this->uclasifinc) {
                        array_push($permissions,Permission::findByName('Editar Clasif. Inc.'));
                    }
                    if ($this->dclasifinc) {
                        array_push($permissions,Permission::findByName('Eliminar Clasif. Inc.'));
                    }                        
                }
                if ($this->rprioridad==1) {
                    array_push($permissions,Permission::findByName('Ver Estado de Prioridad'));
                    if ($this->cprioridad) {
                        array_push($permissions,Permission::findByName('Agregar Estado de Prioridad'));
                    }
                    if ($this->uprioridad) {
                        array_push($permissions,Permission::findByName('Editar Estado de Prioridad'));
                    }
                    if ($this->dprioridad) {
                        array_push($permissions,Permission::findByName('Eliminar Estado de Prioridad'));
                    }
                }
                if ($this->rconserie==1) {
                    array_push($permissions,Permission::findByName('Ver Control de Series'));
                    if ($this->cconserie) {
                        array_push($permissions,Permission::findByName('Agregar Control de Series'));
                    }
                    if ($this->uconserie) {
                        array_push($permissions,Permission::findByName('Editar Control de Series'));
                    }
                    if ($this->dconserie) {
                        array_push($permissions,Permission::findByName('Eliminar Control de Series'));
                    }
                }
                if ($this->rstatus==1) {
                    array_push($permissions,Permission::findByName('Ver Estado de Avance'));
                    if ($this->cstatus) {
                        array_push($permissions,Permission::findByName('Agregar Estado de Avance'));
                    }
                    if ($this->ustatus) {
                        array_push($permissions,Permission::findByName('Editar Estado de Avance'));
                    }
                    if ($this->dstatus) {
                        array_push($permissions,Permission::findByName('Eliminar Estado de Avance'));
                    }
                }       
            }
            $role->syncPermissions($permissions);
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'Agregado!',
                'text'=>'La información se agregó correctamente!',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        } catch (\Throwable $th) {
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'No Agregado!',
                'text'=>'No se pudo agregar el nuevo registro',
                'timer'=>3000,
                'icon'=>'error',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        }
    }
    public function update()
    {
        try {
            //$this->authorize('Editar Rol');
            $role = Role::findById($this->codigo);
            $permissions = array();
            
            if ($this->tickets==1) {
                array_push($permissions,Permission::findByName('Tickets'));
            }
            if ($this->kb==1) {
                array_push($permissions,Permission::findByName('KB'));
            }
            if ($this->clientes==1) {
                array_push($permissions,Permission::findByName('Clientes'));
                if ($this->rcontacto==1) {
                    array_push($permissions,Permission::findByName('Ver Contactos'));
                    if ($this->ccontacto==1) {
                        array_push($permissions,Permission::findByName('Agregar Contactos'));
                    }
                    if ($this->ucontacto==1) {
                        array_push($permissions,Permission::findByName('Editar Contactos'));
                    }
                    if ($this->dcontacto==1) {
                        array_push($permissions,Permission::findByName('Eliminar Contactos'));
                    }
                        
                }
                if ($this->rsopcliente==1) {
                    array_push($permissions,Permission::findByName('Ver Soporte de Clientes'));
                    if ($this->csopcliente==1) {
                        array_push($permissions,Permission::findByName('Agregar Soporte de Clientes'));
                    }
                    if ($this->usopcliente==1) {
                        array_push($permissions,Permission::findByName('Editar Soporte de Clientes'));
                    }
                    if ($this->dsopcliente==1) {
                        array_push($permissions,Permission::findByName('Eliminar Soporte de Clientes'));
                    }
                }
                    
            }
            if ($this->informes==1) {
                array_push($permissions,Permission::findByName('Informes'));
            }
            if ($this->administracion==1) {
                array_push($permissions,Permission::findByName('Administración'));
                if ($this->rempresa==1) {
                    array_push($permissions,Permission::findByName('Ver Empresa'));
                    if ($this->uempresa==1) {
                        array_push($permissions,Permission::findByName('Editar Empresa'));
                    }
                }
                if ($this->rareacargo==1) {
                    array_push($permissions,Permission::findByName('Ver Área-Cargo'));
                    if ($this->carea==1) {
                        array_push($permissions,Permission::findByName('Agregar Área'));
                    }
                    if ($this->uarea==1) {
                        array_push($permissions,Permission::findByName('Editar Área'));
                    }
                    if ($this->darea==1) {
                        array_push($permissions,Permission::findByName('Eliminar Área'));
                    }
                    if ($this->ccargo==1) {
                        array_push($permissions,Permission::findByName('Agregar Cargo'));
                    }
                    if ($this->ucargo==1) {
                        array_push($permissions,Permission::findByName('Editar Cargo'));
                    }
                    if ($this->dcargo==1) {
                        array_push($permissions,Permission::findByName('Eliminar Cargo'));
                    }
                }
                if ($this->rpersonal==1) {
                    array_push($permissions,Permission::findByName('Ver Personal'));
                    if ($this->cpersonal==1) {
                        array_push($permissions,Permission::findByName('Agregar Personal'));
                    }
                    if ($this->upersonal==1) {
                        array_push($permissions,Permission::findByName('Editar Personal'));
                    }
                    if ($this->dpersonal==1) {
                        array_push($permissions,Permission::findByName('Eliminar Personal'));
                    }
                }
                if ($this->rproducto==1) {
                    array_push($permissions,Permission::findByName('Ver Producto'));
                    if ($this->cproducto==1) {
                        array_push($permissions,Permission::findByName('Agregar Producto'));
                    }
                    if ($this->uproducto==1) {
                        array_push($permissions,Permission::findByName('Editar Producto'));
                    }
                    if ($this->dproducto==1) {
                        array_push($permissions,Permission::findByName('Eliminar Producto'));
                    }
                }
                if ($this->rrol==1) {
                    array_push($permissions,Permission::findByName('Ver Rol'));
                    if ($this->crol==1) {
                        array_push($permissions,Permission::findByName('Agregar Rol'));
                    }
                    if ($this->urol==1) {
                        array_push($permissions,Permission::findByName('Editar Rol'));
                    }
                    if ($this->drol==1) {
                        array_push($permissions,Permission::findByName('Eliminar Rol'));
                    }
                }
                if ($this->rusuario==1) {
                    array_push($permissions,Permission::findByName('Ver Usuario'));
                    if ($this->cusuario==1) {
                        array_push($permissions,Permission::findByName('Agregar Usuario'));
                    }
                    if ($this->uusuario==1) {
                        array_push($permissions,Permission::findByName('Editar Usuario'));
                    }
                }
                
            }
            if ($this->perfil==1) {
                array_push($permissions,Permission::findByName('Perfil'));
                if ($this->rdatopersonal==1) {
                    array_push($permissions,Permission::findByName('Ver Datos Personales'));
                    if ($this->udatopersonal==1) {
                        array_push($permissions,Permission::findByName('Editar Datos Personales'));
                    }
                }
                if ($this->rbitacora==1) {
                    array_push($permissions,Permission::findByName('Ver Bitácora'));
                    if ($this->cbitacora==1) {
                        array_push($permissions,Permission::findByName('Agregar Bitácora'));
                    }
                    if ($this->ubitacora==1) {
                        array_push($permissions,Permission::findByName('Editar Bitácora'));
                    }
                    if ($this->dbitacora==1) {
                        array_push($permissions,Permission::findByName('Eliminar Bitácora'));
                    }
                }
                if ($this->rcambiarcontra==1) {
                    array_push($permissions,Permission::findByName('Ver Cambiar Contraseña'));
                    if ($this->ucambiarcontra==1) {
                        array_push($permissions,Permission::findByName('Editar Cambiar Contraseña'));
                    }
                }
                
            }
            if ($this->mantenimiento==1) {
                array_push($permissions,Permission::findByName('Mantenimiento de Tablas'));
                if ($this->ridentidad==1) {
                    array_push($permissions,Permission::findByName('Ver Docs Identidad'));
                    if ($this->cidentidad==1) {
                        array_push($permissions,Permission::findByName('Agregar Docs Identidad'));
                    }
                    if ($this->uidentidad==1) {
                        array_push($permissions,Permission::findByName('Editar Docs Identidad'));
                    }
                    if ($this->didentidad==1) {
                        array_push($permissions,Permission::findByName('Eliminar Docs Identidad'));
                    }
                }
                if ($this->rcanal==1) {
                    array_push($permissions,Permission::findByName('Ver Canales de Atención'));
                    if ($this->ccanal==1) {
                        array_push($permissions,Permission::findByName('Agregar Canales de Atención'));
                    }
                    if ($this->ucanal==1) {
                        array_push($permissions,Permission::findByName('Editar Canales de Atención'));
                    }
                    if ($this->dcanal==1) {
                        array_push($permissions,Permission::findByName('Eliminar Canales de Atención'));
                    }
                }
                if ($this->rclasifinc==1) {
                    array_push($permissions,Permission::findByName('Ver Clasif. Inc.'));
                    if ($this->cclasifinc) {
                        array_push($permissions,Permission::findByName('Agregar Clasif. Inc.'));
                    }
                    if ($this->uclasifinc) {
                        array_push($permissions,Permission::findByName('Editar Clasif. Inc.'));
                    }
                    if ($this->dclasifinc) {
                        array_push($permissions,Permission::findByName('Eliminar Clasif. Inc.'));
                    }
                        
                }       
            }
            $role->syncPermissions($permissions);
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'Actualizado!',
                'text'=>'La información se actualizó correctamente!',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        } catch (\Throwable $th) {
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'No Actualizado!',
                'text'=>'No se pudo actualizar',
                'timer'=>3000,
                'icon'=>'error',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        }
    }
    public function edit($codigo)
    {
        $role = Role::findOrFail($codigo);
        $this->codigo = $role->id;
        $this->name  = $role->name;
        $permissions = DB::select('select permissions.name as description from role_has_permissions
        inner join permissions on role_has_permissions.permission_id = permissions.id where role_has_permissions.role_id=?', [$role->id]);
        foreach ($permissions as $permission) {
            if(isset($permission->description)){
                
                if($permission->description == 'Tickets'){
                    $this->tickets = 1;
                }
                if ($permission->description == 'KB') {
                    $this->kb=1;
                }
                if ($permission->description == 'Clientes') {
                    $this->clientes=1;
                }
                if ($permission->description == 'Informes') {
                    $this->informes=1;
                }
                if ($permission->description == 'Administración') {
                    $this->administracion=1;
                }
                if ($permission->description == 'Perfil') {
                    $this->perfil=1;
                }
                if ($permission->description == 'Mantenimiento de Tablas') {
                    $this->mantenimiento=1;
                }
                if ($permission->description == 'Ver Contactos') {
                    $this->rcontacto=1;
                }
                if ($permission->description == 'Agregar Contactos') {
                    $this->ccontacto=1;
                }
                if ($permission->description == 'Editar Contactos') {
                    $this->ucontacto=1;
                }
                if ($permission->description == 'Eliminar Contactos') {
                    $this->dcontacto=1;
                }
                if ($permission->description == 'Ver Soporte de Clientes') {
                    $this->rsopcliente=1;
                }
                if ($permission->description == 'Agregar Soporte de Clientes') {
                    $this->csopcliente=1;
                }
                if ($permission->description == 'Editar Soporte de Clientes') {
                    $this->usopcliente=1;
                }
                if ($permission->description == 'Eliminar Soporte de Clientes') {
                    $this->dsopcliente=1;
                }
                if ($permission->description == 'Ver Empresa') {
                    $this->rempresa=1;
                }
                if ($permission->description == 'Editar Empresa') {
                    $this->uempresa=1;
                }
                if($permission->description =='Ver Área-Cargo'){
                    $this->rareacargo=1;
                }
                if($permission->description =='Agregar Área'){
                    $this->carea=1;
                }
                if($permission->description =='Editar Área'){
                    $this->uarea=1;
                }
                if($permission->description =='Eliminar Área'){
                    $this->darea=1;
                }
                if($permission->description =='Agregar Cargo'){
                    $this->ccargo=1;
                }
                if($permission->description =='Editar Cargo'){
                    $this->ucargo=1;
                }
                if($permission->description =='Eliminar Cargo'){
                    $this->dcargo=1;
                }
                if ($permission->description=='Ver Rol') {
                    $this->rrol=1;
                }
                if ($permission->description=='Agregar Rol') {
                    $this->crol=1;
                }
                if ($permission->description=='Editar Rol') {
                    $this->urol=1;
                }
                if ($permission->description=='Eliminar Rol') {
                    $this->drol=1;
                }
                if($permission->description =='Ver Personal'){
                    $this->rpersonal=1;
                }
                if($permission->description =='Agregar Personal'){
                    $this->cpersonal=1;
                }
                if($permission->description =='Editar Personal'){
                    $this->upersonal=1;
                }
                if($permission->description =='Eliminar Personal'){
                    $this->dpersonal=1;
                }
                if($permission->description =='Ver Producto'){
                    $this->rproducto=1;
                }
                if($permission->description =='Agregar Producto'){
                    $this->cproducto=1;
                }
                if($permission->description =='Editar Producto'){
                    $this->uproducto=1;
                }
                if($permission->description =='Eliminar Producto'){
                    $this->dproducto=1;
                }
                if($permission->description =='Ver Usuario'){
                    $this->rusuario=1;
                }
                if($permission->description =='Agregar Usuario'){
                    $this->cusuario=1;
                }
                if($permission->description =='Editar Usuario'){
                    $this->uusuario=1;
                }
                if ($permission->description == 'Ver Datos Personales') {
                    $this->rdatopersonal=1;
                }
                if ($permission->description == 'Editar Datos Personales') {
                    $this->udatopersonal=1;
                }
                if($permission->description =='Ver Bitácora'){
                    $this->rbitacora=1;
                }
                if($permission->description =='Agregar Bitácora'){
                    $this->cbitacora=1;
                }
                if($permission->description =='Editar Bitácora'){
                    $this->ubitacora=1;
                }
                if($permission->description =='Eliminar Bitácora'){
                    $this->dbitacora=1;
                }
                if ($permission->description == 'Ver Cambiar Contraseña') {
                    $this->rcambiarcontra=1;
                }
                if ($permission->description == 'Editar Cambiar Contraseña') {
                    $this->ucambiarcontra=1;
                }
                if($permission->description =='Ver Docs Identidad'){
                    $this->ridentidad=1;
                }
                if($permission->description =='Agregar Docs Identidad'){
                    $this->cidentidad=1;
                }
                if($permission->description =='Editar Docs Identidad'){
                    $this->uidentidad=1;
                }
                if($permission->description =='Eliminar Docs Identidad'){
                    $this->didentidad=1;
                }
                if($permission->description =='Ver Canales de Atención'){
                    $this->rcanal=1;
                }
                if($permission->description =='Agregar Canales de Atención'){
                    $this->ccanal=1;
                }
                if($permission->description =='Editar Canales de Atención'){
                    $this->ucanal=1;
                }
                if($permission->description =='Eliminar Canales de Atención'){
                    $this->dcanal=1;
                }
                if($permission->description =='Ver Clasif. Inc.'){
                    $this->rclasifinc=1;
                }
                if($permission->description =='Agregar Clasif. Inc.'){
                    $this->cclasifinc=1;
                }
                if($permission->description =='Editar Clasif. Inc.'){
                    $this->uclasifinc=1;
                }
                if($permission->description =='Eliminar Clasif. Inc.'){
                    $this->dclasifinc=1;
                }
                
            }
        }
    }

    public function limpiar(){        
        $this->search='';
        $this->codigo='';
        $this->name='';
        $this->tickets=0;$this->kb=0;$this->clientes=0;$this->informes=0;$this->administracion=0;$this->perfil=0;$this->mantenimiento=0;
        $this->rcontacto=0;$this->ccontacto=0;$this->ucontacto=0;$this->dcontacto=0;
        $this->rsopcliente=0;$this->usopcliente=0;$this->csopcliente=0;$this->dsopcliente=0;
        $this->rempresa=0;$this->uempresa=0;
        $this->rareacargo=0;$this->carea=0;$this->uarea=0;$this->darea=0;$this->ccargo=0;$this->ucargo=0;$this->dcargo=0;
        $this->rpersonal=0;$this->cpersonal=0;$this->upersonal=0;$this->dpersonal=0;
        $this->rproducto=0;$this->uproducto=0;$this->cproducto=0;$this->dproducto=0;
        $this->rrol=0;$this->crol=0;$this->urol=0;$this->drol=0;
        $this->rusuario=0;$this->cusuario=0;$this->uusuario=0;$this->dusuario=0;
        $this->rdatopersonal=0;$this->udatopersonal=0;$this->rbitacora=0;$this->cbitacora=0;$this->ubitacora=0;$this->dbitacora=0;$this->rcambiarcontra=0;$this->ucambiarcontra=0;
        $this->ridentidad=0;$this->cidentidad=0;$this->uidentidad=0;$this->didentidad=0;$this->rcanal=0;$this->ccanal=0;$this->ucanal=0;$this->dcanal=0;$this->rclasifinc=0;$this->cclasifinc=0;$this->uclasifinc=0;$this->dclasifinc=0;
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }

    public function delete($id)
    {
        $this->codigo=$id;
    }

    public function destroy()
    {
        try {
            $this->authorize('Eliminar Rol');
            $role = Role::findById($this->codigo);
            $permissions = array();
            $role->syncPermissions($permissions);
            $role->destroy($this->codigo);
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'Eliminado!',
                'text'=>'La información se eliminó correctamente!',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
            ]);
            app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        } catch (\Throwable $th) {
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'No eliminado!',
                'text'=>'Quizas este registro ya tiene movismientos',
                'timer'=>3000,
                'icon'=>'error',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        }
    }
}
