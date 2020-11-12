<?php

namespace App\Http\Livewire\Administration\Product;

use App\Models\Option;
use App\Models\SubOption;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class SuboptionComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=5;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$option,$description;

    protected $listeners = [
        'option:refresh' => '$refresh',
        'submenu:refresh' => '$refresh',
        'menu:refresh' => '$refresh',
        'product:refresh' => '$refresh',
    ];

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
        return view('livewire.administration.product.suboption-component',[
            'suboptions'=>SubOption::join('options','suboptions.idoptions','=','options.id')
                ->join('submenus','options.idsubmenus','=','submenus.id')
                ->join('menus','submenus.idmenus','=','menus.id')
                ->join('products','menus.idproducts','=','products.id')
                ->select('suboptions.id','products.abbreviation as products','menus.description as menus','submenus.description as submenus','options.description as options','suboptions.description')
                ->where('products.abbreviation','like','%'.$this->search.'%')
                ->orWhere('menus.description','like','%'.$this->search.'%')
                ->orWhere('submenus.description','like','%'.$this->search.'%')
                ->orWhere('options.description','like','%'.$this->search.'%')
                ->orWhere('suboptions.description','like','%'.$this->search.'%')
                ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
                ->paginate($this->porPagina),
            'options'=>Option::join('submenus','options.idsubmenus','=','submenus.id')
                ->join('menus','submenus.idmenus','=','menus.id')
                ->join('products','menus.idproducts','=','products.id')
                ->get(['options.id','products.abbreviation as product','menus.description as menu','submenus.description as submenu','options.description'])
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'option'=>'required',
            'description'=>[
                'required','string','min:1',
                Rule::unique('suboptions')->where(function($query){
                    return $query->where('idoptions',$this->option);
                })->ignore($this->codigo,'id'),
            ]
        ]);
    }

    public function store()
    {
        try {
            SubOption::create([
                'idoptions'=>$this->option,
                'description'=>$this->description,
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
        $suboption=SubOption::findOrFail($codigo);
        $this->codigo = $suboption->id;
        $this->option = $suboption->idoptions;
        $this->description = $suboption->description;
    }

    public function update()
    {
        try {
            $suboption = SubOption::findOrFail($this->codigo);
            $suboption->update([
                'description'=>$this->description,
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

    public function limpiar()
    {
        $this->description='';
        $this->option='';
        $this->search='';
        $this->codigo='';
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
            SubOption::destroy($this->codigo);
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
}