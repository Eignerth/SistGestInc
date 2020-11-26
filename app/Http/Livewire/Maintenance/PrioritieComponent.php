<?php

namespace App\Http\Livewire\Maintenance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Prioritie;
use Livewire\Component;
use Livewire\WithPagination;

class PrioritieComponent extends Component
{
    use WithPagination, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $search='';
    public $sortField='id';
    public $sortAsc=true;
    public $codigo,$color,$description,$level;

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
            'description'=>'required|max:30|unique:App\Models\Prioritie,description,'.$this->codigo.',id',
            'color'=>'required|starts_with:#|max:7|unique:App\Models\Prioritie,color,'.$this->codigo.',id',
            'level'=>'required|unique:App\Models\Prioritie,level,'.$this->codigo.',id',
        ]);
    }

    public function render()
    {
        return view('livewire.maintenance.prioritie-component',[
            'priorities'=>Prioritie::search($this->search)
                ->orderBy($this->sortField,$this->sortAsc ? 'asc':'desc')
                ->paginate($this->porPagina),
        ]);
    }

    public function store()
    {
        try {
            Prioritie::create([
                'description'=>$this->description,
                'color'=>$this->color,
                'level'=>$this->level,
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
        $priority = Prioritie::findOrFail($codigo);
        $this->codigo=$priority->id;
        $this->description = $priority->description;
        $this->level=$priority->level;
        $this->color=$priority->color;
    }

    public function update()
    {
        try {
            $priority = Prioritie::findOrFail($this->codigo);
            $priority->update([
                'description'=>$this->description,
                'level'=>$this->level,
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
            Prioritie::destroy($this->codigo);
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
        $this->level='';
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}
