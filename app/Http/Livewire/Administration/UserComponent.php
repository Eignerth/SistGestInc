<?php

namespace App\Http\Livewire\Administration;

use App\Models\Personal;
use App\Models\User;
use App\Models\ModelRole;
use Spatie\Permission\Models\Role;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$personal,$usuario,$changepassword=1,$password,$password_confirmation,$role,$status=0;

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
        return view('livewire.administration.user-component',[
            'users'=>User::join('personals','users.idpersonals','=','personals.id')
                ->select('users.id','personals.name as personal','users.name','users.flgstatus')
                ->where('users.name','like','%'.$this->search.'%')
                ->orWhere('personals.name','like','%'.$this->search.'%')
                ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
                ->having('users.id','<>','Miauwaiilol17')
                ->paginate($this->porPagina),
            'personals'=>Personal::leftJoin('users','personals.id','=','users.idpersonals')->select('personals.id','personals.name')->whereNull('users.idpersonals')->get(),
            'personalsT'=>Personal::all(['id','name']),
            'roles'=>Role::having('name','<>','Miauwaiilol17')->get(['id','name']),
            
        ]);
    }

    public function updated($propertyName)
    {   
        $this->validateOnly($propertyName,[
            'role'=>'required', 
            'personal'=>'required|unique:App\Models\User,idpersonals,'.$this->codigo.',id',
            'usuario'=>'required|min:3|unique:App\Models\User,name,'.$this->codigo.',id',
            'password'=>['required_if:changepassword,1','exclude_if:changepassword,0','min:8',],
            'password_confirmation'=>['required_if:changepassword,1','exclude_if:changepassword,0','min:8','same:password',],
            'status'=>'required|boolean',
        ]);
    }

    public function edit($codigo)
    {
        $user = User::findOrFail($codigo);
        $this->codigo = $user->id;
        $this->usuario = $user->name;
        $this->status = $user->flgstatus;
        $this->personal = $user->idpersonals;
        try {
            $role = ModelRole::find($user->id);
            $this->role = $role->role_id;
        } catch (\Throwable $th) {
            $this->role = 0;
        }
        $this->changepassword=0;
    }

    public function store()
    {
        try {
            $user=User::create([
                'name'=>$this->usuario,
                'password'=>Hash::make($this->password),
                'lastactivity'=>Carbon::now(),
                'idpersonals'=>$this->personal,
                'flgstatus'=>$this->status
            ]);
            $role = Role::findById($this->role);
            $user->assignRole($role);
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
            $user = User::findOrFail($this->codigo);
            $user->update([
                'name'=>$this->usuario,
                'lastactivity'=>Carbon::now(),
                'flgstatus'=>$this->status,               
            ]);
            if ($this->changepassword == 1) {
                $user->update([
                    'password'=>Hash::make($this->password)
                ]);    
            }
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

    public function limpiar()
    {
        $this->search='';
        $this->codigo='';
        $this->personal='';
        $this->usuario='';
        $this->password='';
        $this->password_confirmation='';
        $this->personal='';
        $this->status=0;
        $this->role='';
        $this->changepassword=1;
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}
