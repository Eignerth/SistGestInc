<?php

namespace App\Http\Livewire\Maintenance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Classification;
use Livewire\Component;
use Livewire\WithPagination;

class ClassificationComponent extends Component
{
    use WithPagination, AuthorizesRequests;
    public $porPagina=10;
    public $search='';
    public $sortField='id';
    public $sortAsc=true;
    public $codigo,$abbrev,$descrip;

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
        return view('livewire.maintenance.classification-component',[
            'classifications'=>Classification::search($this->search)
                ->orderBy($this->sortField,$this->sortAsc ? 'asc':'desc')
                ->paginate($this->porPagina),
        ]);
    }
    public function edit($codigo){
        $classification = Classification::findOrFail($codigo);
        $this->codigo=$classification->id;
        $this->abbrev = $classification->abbreviation;
        $this->descrip=$classification->description;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'abbrev' =>'required|size:3|string|unique:App\Models\Classification,abbreviation,'.$this->codigo.',id',
            'descrip'=>'required|string|max:100|unique:App\Models\Classification,description,'.$this->codigo.',id',
        ]);
    }

    public function update(){    
        try {
            $this->authorize('Editar Clasif. Inc.');
            $classification = Classification::findOrFail($this->codigo);        
            $classification->update([
                'abbreviation'=>$this->abbrev,
                'description'=>$this->descrip,
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

    public function store(){
        try {
            $this->authorize('Agregar Clasif. Inc.');
            Classification::create([
                'abbreviation'=>$this->abbrev,
                'description'=>$this->descrip,
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

    public function delete($id){
        $this->codigo=$id;
    }
    public function destroy(){
        try {
            $this->authorize('Eliminar Clasif. Inc.');
            Classification::destroy($this->codigo);
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
    
    public function limpiar(){
        $this->search='';
        $this->abbrev='';
        $this->descrip='';
        $this->codigo='';
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}
