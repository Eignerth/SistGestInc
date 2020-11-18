<?php

namespace App\Http\Livewire\Administration\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Menu;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;
class MenuComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=5;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$producto,$description;

    protected $listeners = [
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
        return view('livewire.administration.product.menu-component',[
            'menus'=>Menu::join('products','menus.idproducts','=','products.id')
                ->select('menus.id','products.abbreviation as product','menus.description')
                ->where('menus.description','like','%'.$this->search.'%')
                ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
                ->paginate($this->porPagina),
            'products'=>Product::all(['id','abbreviation']),

        ]);
    }

    public function updated($propertyName)
    {   
        $this->validateOnly($propertyName,[
            'producto'=>'required',
            'description'=>[
                'required',
                'string',
                'min:1',
                Rule::unique('menus')->where(function ($query){
                    return $query->where('idproducts',$this->producto);
                })->ignore($this->codigo,'id'),
            ]
        ]);
    }

    public function store()
    {
        try {
            $this->authorize('Agregar Producto');
            Menu::create([
                'idproducts'=>$this->producto,
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
            $this->emit('menu:refresh');
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
        $menu = Menu::findOrFail($codigo);
        $this->codigo = $menu->id;
        $this->producto = $menu->idproducts;
        $this->description = $menu->description;
    }

    public function update()
    {
        try {
            $this->authorize('Editar Producto');
            $menu = Menu::findOrFail($this->codigo);
            $menu->update([
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
            $this->emit('menu:refresh');
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
        $this->producto='';
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
            Menu::destroy($this->codigo);
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'Eliminado!',
                'text'=>'La información se eliminó correctamente!',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
            ]);
            $this->emit('menu:refresh');
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
