<?php

namespace App\Http\Livewire\Maintenance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Tkstatus;
use Livewire\Component;
use Livewire\WithPagination;

class TkstatusComponent extends Component
{
    use WithPagination, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $search='';
    public $sortField='id';
    public $sortAsc=true;
    public $codigo,$color,$description;

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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'description'=>'required|max:30|unique:App\Models\Tkstatus,description,'.$this->codigo.',id',
            'color'=>'required|starts_with:#|max:7|unique:App\Models\Tkstatus,color,'.$this->codigo.',id',
        ]);
    }

    public function render()
    {
        return view('livewire.maintenance.tkstatus-component',[
            'tkstatus'=>Tkstatus::search($this->search)
                ->orderBy($this->sortField,$this->sortAsc ? 'asc':'desc')
                ->paginate($this->porPagina),
        ]);
    }

    public function store()
    {
        try {
            Tkstatus::create([
                'description'=>$this->description,
                'color'=>$this->color,
            ]);
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

    public function edit($codigo)
    {
        $priority = Tkstatus::findOrFail($codigo);
        $this->codigo=$priority->id;
        $this->description = $priority->description;
        $this->color=$priority->color;
    }

    public function update()
    {
        try {
            $priority = Tkstatus::findOrFail($this->codigo);
            $priority->update([
                'description'=>$this->description,
                'color'=>$this->color,
            ]);
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

    public function destroy()
    {   
        try {
            Tkstatus::destroy($this->codigo);
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'Eliminado!',
                'text'=>'La información se eliminó correctamente!',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        } catch (\Throwable $th) {
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'No eliminado!',
                'text'=>'Quizas este registro ya tiene movimientos',
                'timer'=>3000,
                'icon'=>'error',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        }
    }

    public function delete($id)
    {
        $this->codigo=$id;
    }

    public function limpiar(){
        $this->search='';
        $this->codigo='';
        $this->description='';
        $this->color='';
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}
