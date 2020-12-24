<?php

namespace App\Http\Livewire\Kb;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Knowledgebases;
use App\Models\Product;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Option;
use Livewire\Component;
use Livewire\WithPagination;

class KbComponent extends Component
{
    use WithPagination, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;    
    public $search = '';
    public $codigo,$subject,$message,$product,$menu,$submenu,$option;

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
        return view('livewire.kb.kb-component',[
            'kbs'=>Knowledgebases::join('menus','knowledgebases.idmenus','=','menus.id')
            ->join('products','knowledgebases.idproducts','=','products.id')
            ->select('knowledgebases.id','knowledgebases.subject','products.abbreviation as product','menus.description as menu','knowledgebases.created_at')
            ->where('knowledgebases.subject','like','%'.$this->search.'%')
            ->orWhere('products.abbreviation','like','%'.$this->search.'%')
            ->orWhere('products.description','like','%'.$this->search.'%')
            ->orWhere('menus.description','like','%'.$this->search.'%')
            ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
            ->paginate($this->porPagina),
            'products'=> Product::all(['id','description']),
            'menus'=>Menu::where('idproducts','=',$this->product)
                ->get(['id','description']),
            'submenus'=>SubMenu::where('idmenus','=',$this->menu)
                ->get(['id','description']),
            'options'=>Option::where('idsubmenus','=',$this->submenu)
                ->get(['id','description']),
        ]);
    }

    public function store()
    {
        Knowledgebases::create([            
            'subject'=>$this->subject,
            'message'=>$this->message,
            'idproducts'=>$this->product,
            'idmenus'=>$this->menu,
            'idsubmenus'=>$this->submenu,
            'idoptions'=>$this->option,
            'idpersonals'=>auth()->user()->idpersonals, 
        ]);
    }

    public function edit($id)
    {
        $kb = Knowledgebases::findOrFail($id);
        $this->codigo = $kb->id;
        $this->subject = $kb->subject;
        $this->message = $kb->message;
        $this->product = $kb->idproducts;
        $this->menu = $kb->idmenus;
        $this->submenu = $kb->idsubmenus;
        $this->option = $kb->idoptions;
    }

    public function update()
    {
        $kb = Knowledgebases::findOrFail($this->codigo);
        $kb->update([
            'subject'=>$this->subject,
            'message'=>$this->message,
            'idproducts'=>$this->product,
            'idmenus'=>$this->menu,
            'idsubmenus'=>$this->submenu,
            'idoptions'=>$this->option,
            'idpersonals'=>auth()->user()->idpersonals, 
        ]);
    }

    public function delete($id)
    {
        $this->codigo = $id;
    }
    public function destroy()
    {
        Knowledgebases::destroy($this->codigo);
    }

    public function limpiar()
    {
        $this->search='';
        $this->codigo='';
        $this->subject='';
        $this->message='';
        $this->product='';
        $this->menu='';
        $this->submenu='';
        $this->option='';
    }
    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}
