<?php

namespace App\Http\Livewire\Administration\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Option;
use App\Models\SubMenu;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class OptionComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=5;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$submenu,$description;

    protected $listeners = [
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
        return view('livewire.administration.product.option-component',[
            'options'=>Option::join('submenus','options.idsubmenus','=','submenus.id')
                ->join('menus','submenus.idmenus','=','menus.id')
                ->join('products','menus.idproducts','=','products.id')
                ->select('options.id','products.abbreviation as products','menus.description as menus','submenus.description as submenus','options.description')
                ->where('products.abbreviation','like','%'.$this->search.'%')
                ->orWhere('menus.description','like','%'.$this->search.'%')
                ->orWhere('submenus.description','like','%'.$this->search.'%')
                ->orWhere('options.description','like','%'.$this->search.'%')
                ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
                ->paginate($this->porPagina),
            'submenus'=>SubMenu::join('menus','submenus.idmenus','=','menus.id')
                ->join('products','menus.idproducts','=','products.id')
                ->get(['submenus.id','products.abbreviation as product','menus.description as menu','submenus.description'])
        ]);
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'submenu'=>'required',
            'description'=>[
                'required','string','min:1',
                Rule::unique('options')->where(function($query){
                    return $query->where('idsubmenus',$this->submenu);
                })->ignore($this->codigo,'id'),
            ]
        ]);
    }

    public function store()
    {
        try {
            $this->authorize('Agregar Producto');
            Option::create([
                'idsubmenus'=>$this->submenu,
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
            $this->emit('option:refresh');
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
        $option=Option::findOrFail($codigo);
        $this->codigo = $option->id;
        $this->submenu = $option->idsubmenus;
        $this->description = $option->description;
    }

    public function update()
    {
        try {
            $this->authorize('Editar Producto');
            $option = Option::findOrFail($this->codigo);
            $option->update([
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
            $this->emit('option:refresh');
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
        $this->submenu='';
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
            $this->authorize('Eliminar Producto');
            Option::destroy($this->codigo);
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'Eliminado!',
                'text'=>'La información se eliminó correctamente!',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
            ]);
            $this->emit('option:refresh');
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
