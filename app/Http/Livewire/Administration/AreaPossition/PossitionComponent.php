<?php

namespace App\Http\Livewire\Administration\AreaPossition;
use App\Models\Possition;
use App\Models\Area;
use Livewire\Component;
use Livewire\WithPagination;

class PossitionComponent extends Component
{
    use WithPagination;
    public $codigo,$area,$descripcion,$notas,$nivel;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
    //No se empleo search en model porq usa inner join y select personalizado
    public function render()
    {
        return view('livewire.administration.area-possition.possition-component',[
            'possitions'=>Possition::join('areas','possitions.idareas','=','areas.id')
            ->select('possitions.id','areas.description as area','possitions.description','possitions.level')
            ->where('areas.description','like','%'.$this->search.'%')
            ->orWhere('possitions.description','like','%'.$this->search.'%')
            ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
            ->paginate($this->porPagina),
            'areas'=>Area::all(['id','description'])
        ]);
        
       
    }

    public function edit($codigo){
        $possition = Possition::findOrFail($codigo);
        $this->codigo = $possition->id;
        $this->area = $possition->idareas;
        $this->descripcion = $possition->description;
        $this->notas = $possition->addnote;
        $this->nivel = $possition->level;
    }
    public function updated($propertyName){
        $this->validateOnly($propertyName,[
            'descripcion'=>'required|max:200|string|unique:App\Models\Possition,description,'.$this->codigo.',id',
            'area'=>'required|numeric',
            'notas'=>'nullable|string',
            'nivel'=>'required|numeric|between:1,9'
        ]);
    }
    public function update()
    {
        $possition = Possition::findOrFail($this->codigo);        
        $possition->update([
            'idareas'=>$this->area,
            'description'=>$this->descripcion,
            'addnote'=>$this->notas,
            'level'=>$this->nivel,
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
        try {
            Possition::create([
                'idareas'=>$this->area,
                'description'=>$this->descripcion,
                'addnote'=>$this->notas,
                'level'=>$this->nivel,
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
            Possition::destroy($this->codigo);
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
         $this->codigo='';
         $this->area='';
         $this->descripcion='';
         $this->notas='';
         $this->nivel='';        
    }
    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }

}
