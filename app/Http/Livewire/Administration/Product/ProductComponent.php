<?php

namespace App\Http\Livewire\Administration\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$abbreviation,$description,$addnote;

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
        
        return view('livewire.administration.product.product-component',[
            'products'=>Product::search($this->search)
            ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
            ->paginate($this->porPagina),
            'producto'=>Product::where('id','=',$this->codigo)->get(),
        ]);
    }

    public function store()
    {
        try {
            Product::create([
                'abbreviation'=>$this->abbreviation,
                'description'=>$this->description,
                'addnote'=>$this->addnote,
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
            $this->emit('product:refresh');

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

    public function show($codigo)
    {
        $this->edit($codigo);
    }

    public function edit($codigo)
    {
        $producto = Product::findOrFail($codigo);
        $this->codigo = $producto->id;
        $this->abbreviation = $producto->abbreviation;
        $this->description = $producto->description;
        $this->addnote = $producto->addnote;
    }

    public function limpiar(){
        $this->search='';
        $this->codigo='';
        $this->abbreviation='';
        $this->description='';
        $this->addnote='';
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}