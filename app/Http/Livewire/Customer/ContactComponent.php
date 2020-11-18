<?php

namespace App\Http\Livewire\Customer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Contact;
use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class ContactComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$customer,$name,$email,$cel,$telf,$possition,$addnote;


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
        return view('livewire.customer.contact-component',[
            'contacts'=>Contact::join('customers','contacts.idcustomers','=','customers.id')
                ->select('contacts.id','customers.descripcion as customer','contacts.name','contacts.cel','contacts.email')
                ->where('customers.descripcion','like','%'.$this->search.'%')
                ->orWhere('contacts.name','like','%'.$this->search.'%')
                ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
                ->paginate($this->porPagina),
                'customers'=>Customer::all(),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'customer'=>'required',
            'name'=>'required',
            'email'=>'email|nullable',
            'cel'=>'numeric|nullable',
            'telf'=>'numeric|nullable',
            'possition'=>'string|nullable|max:50',
            'addnote'=>'string|nullable'
        ]);
    }

    public function store()
    {
        try {
            $this->authorize('Ver Contactos');
            Contact::create([
                'idcustomers'=>$this->customer,
                'name'=>$this->name,
                'email'=>$this->email,
                'telf'=>$this->telf,
                'cel'=>$this->cel,
                'possition'=>$this->possition,
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
        $contact = Contact::findOrFail($codigo);
        $this->codigo=$contact->id;
        $this->customer=$contact->idcustomers;
        $this->name=$contact->name;
        $this->email=$contact->email;
        $this->telf=$contact->telf;
        $this->cel=$contact->cel;
        $this->possition=$contact->possition;
        $this->addnote=$contact->addnote;
        
    }

    public function update()
    {
        try {
            $this->authorize('Editar Contactos');
            $contact = Contact::findOrFail($this->codigo);
            $contact->update([
                'idcustomers'=>$this->customer,
                'name'=>$this->name,
                'email'=>$this->email,
                'telf'=>$this->telf,
                'cel'=>$this->cel,
                'possition'=>$this->possition,
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
            $this->authorize('Eliminar Contactos');
            Contact::destroy($this->codigo);
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
    public function limpiar()
    {
        $this->search='';
        $this->codigo='';
        $this->customer='';
        $this->name='';
        $this->cel='';
        $this->telf='';
        $this->possition='';
        $this->addnote='';
    }
    public function cancel()
    {
        $this->limpiar();
        $this->resetValidation();
    }

}
