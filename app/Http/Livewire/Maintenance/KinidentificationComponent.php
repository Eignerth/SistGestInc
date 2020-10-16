<?php

namespace App\Http\Livewire\Maintenance;
use App\Models\Kindidentification;
use Livewire\Component;
use Livewire\WithPagination;

class KinidentificationComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $search='';
    public $sortField='id';
    public $sortAsc=true;
    public $codigo,$abbreviation,$description,$digits;

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
            'abbreviation' =>'required|size:3|string|unique:App\Models\Kindidentification,abbreviation,'.$this->codigo.',id',
            'description'=>'required|string|max:100|unique:App\Models\Kindidentification,description,'.$this->codigo.',id',
            'digits'=>'required|numeric|between:1,30'
        ]);
    }

    public function render()
    {
        return view('livewire.maintenance.kinidentification-component',[
            'identifications'=>Kindidentification::search($this->search)
                ->orderBy($this->sortField,$this->sortAsc ? 'asc':'desc')
                ->paginate($this->porPagina),
        ]);
    }

    public function edit($codigo){
        $docidentity = Kindidentification::findOrFail($codigo);
        $this->codigo=$docidentity->id;
        $this->abbreviation = $docidentity->abbreviation;
        $this->description=$docidentity->description;
        $this->digits=$docidentity->ndigits;
    }

    public function update()
    {
        $docidentity = Kindidentification::findOrFail($this->codigo);        
        $docidentity->update([
            'abbreviation'=>Str::upper($this->abbreviation),
            'description'=>$this->description,
            'ndigits'=>$this->digits,
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
    }

    public function store()
    {
        Kindidentification::create([
            'abbreviation'=>Str::upper($this->abbreviation),
            'description'=>$this->description,
            'ndigits'=>$this->digits,
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
    }

    public function destroy(){

        try {
            Kindidentification::destroy($this->codigo);
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

    public function delete($id){
        $this->codigo=$id;
    }
    public function limpiar(){
        $this->search='';
        $this->codigo='';
        $this->abbreviation='';
        $this->description='';
        $this->digits='';
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}
