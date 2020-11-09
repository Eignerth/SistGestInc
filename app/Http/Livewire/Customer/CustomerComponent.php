<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class CustomerComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;    
    public $search = '';    
    public $codigo,$descripcion,$ruc,$address,$telf,$cel,$email,$sector,$addnote;

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
        return view('livewire.customer.customer-component',[
            'customers'=>Customer::search($this->search)
                ->orderBy($this->sortField,$this->sortAsc ? 'asc':'desc')
                ->paginate($this->porPagina),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'descripcion'=>'required|max:200|string',
            'ruc'=>'required|min:11|string|unique:App\Models\Customer,ruc,'.$this->codigo.',id',
            'address'=>'max:500|string',
            'telf'=>'max:15|numeric',
            'cel'=>'max:15|numeric',
            'email'=>'email|max:255',
            'sector'=>'string|max:100',
            'addnote'=>'nullable|string',
        ]);
    }

    public function store()
    {
        try {
            
            Customer::create([
                'descripcion'=>$this->descripcion,
                'ruc'=>$this->ruc,
                'address'=>$this->address,
                'telf'=>$this->telf,
                'cel'=>$this->cel,
                'email'=>$this->email,
                'sector'=>$this->sector,
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
                
    public function edit($codigo)
    {
        $customer = Customer::findOrFail($codigo);
        $this->codigo=$customer->id;
        $this->descripcion=$customer->descripcion;
        $this->ruc=$customer->ruc;
        $this->address=$customer->address;
        $this->telf=$customer->telf;
        $this->cel=$customer->cel;
        $this->email=$customer->email;
        $this->sector=$customer->sector;
        $this->addnote=$customer->addnote;
        
    }

    public function update()
    {
        try {
                        
            $customer = Customer::findOrFail($this->codigo);
            $customer->update([
                'descripcion'=>$this->descripcion,
                'ruc'=>$this->ruc,
                'address'=>$this->address,
                'telf'=>$this->telf,
                'cel'=>$this->cel,
                'email'=>$this->email,
                'sector'=>$this->sector,
                'addnote'=>$this->addnote,
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
    

    public function delete($id){
        $this->codigo=$id;
    }
    public function destroy(){

        try {
            Customer::destroy($this->codigo);
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
        $this->descripcion='';
        $this->ruc='';
        $this->address='';
        $this->telf='';
        $this->cel='';
        $this->email='';
        $this->addnote='';
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}
