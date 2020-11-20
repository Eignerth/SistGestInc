<?php

namespace App\Http\Livewire\Administration\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Menu;
use App\Models\SubMenu;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class SubmenuComponent extends Component
{
    use WithPagination, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=5;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$menu,$description;

    protected $listeners = [
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
        return view('livewire.administration.product.submenu-component',[
            'submenus'=>SubMenu::join('menus','submenus.idmenus','=','menus.id')
                ->join('products','menus.idproducts','=','products.id')
                ->select('submenus.id','products.abbreviation as products','menus.description as menus','submenus.description')
                ->where('menus.description','like','%'.$this->search.'%')
                ->orWhere('products.abbreviation','like','%'.$this->search.'%')
                ->orWhere('submenus.description','like','%'.$this->search.'%')
                ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
                ->paginate($this->porPagina),
            'menus'=>Menu::join('products','menus.idproducts','=','products.id')
                ->get(['menus.id as id','products.abbreviation as product','menus.description'])
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'menu'=>'required',
            'description'=>[
                'required','string','min:1',
                Rule::unique('submenus')->where(function($query){
                    return $query->where('idmenus',$this->menu);
                })->ignore($this->codigo,'id'),
            ]
        ]);
    }

    public function store()
    {
        try {
            $this->authorize('Agregar Producto');
            SubMenu::create([
                'idmenus'=>$this->menu,
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
            $this->emit('submenu:refresh');
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
        $submenu = SubMenu::findOrFail($codigo);
        $this->codigo = $submenu->id;
        $this->menu = $submenu->idmenus;
        $this->description = $submenu->description;
    }

    public function update()
    {
        try {
            $this->authorize('Editar Producto');
            $submenu = SubMenu::findOrFail($this->codigo);
            $submenu->update([
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
            $this->emit('submenu:refresh');
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
        $this->menu='';
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
            SubMenu::destroy($this->codigo);
            $this->limpiar();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'Eliminado!',
                'text'=>'La información se eliminó correctamente!',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
            ]);
            $this->emit('submenu:refresh');
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
