<?php

namespace App\Http\Livewire\Administration;

use App\Models\Personal;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$personal,$usuario,$password;

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
                ->paginate($this->porPagina)
        ]);
    }

    public function edit($codigo)
    {
        try {
            $user = User::where();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
