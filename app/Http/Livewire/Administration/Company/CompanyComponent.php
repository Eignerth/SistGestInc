<?php

namespace App\Http\Livewire\Administration\Company;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Company;
use Livewire\Component;

class CompanyComponent extends Component
{
    public $address,$telf,$web,$email;

    protected $rules = [
        'address' =>'required|max:255|string',
        'telf'=>'required|numeric',
        'email'=>'required|email',
        'web'=>'nullable'
    ]; 
    
    public function render()
    {        
        return view('livewire.administration.company.company-component',['company'=>Company::findOrFail(1)]);
    }

    public function edit(){
        $company = Company::findOrFail(1);
        $this->address = $company->address;
        $this->telf = $company->telf;
        $this->web = $company->web;
        $this->email = $company->email;
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }

    public function limpiar(){
        $this->address='';
        $this->telf='';
        $this->web='';
        $this->email='';
    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update(){
        try {
            $this->authorize('Editar Empresa');        
            $validatedData =  $this->validate();
            $company = Company::findOrFail(1);        
            $company->update([
                'address'=>$this->address,
                'telf'=>$this->telf,
                'web'=>$this->web,
                'email'=>$this->email,
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
}
