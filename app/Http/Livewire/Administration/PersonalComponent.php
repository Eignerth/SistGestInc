<?php

namespace App\Http\Livewire\Administration;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Kindidentification;
use App\Models\Personal;
use App\Models\Possition;
use Livewire\Component;
use Livewire\WithPagination;

class PersonalComponent extends Component
{
    use WithPagination, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;
    public $search='';
    public $codigo,$name,$idkindident,$kindident,$ruc,$telf,$cel,$ownemail,$email,$address,$dateborn,$idpossitions,$addnote;
    

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
        return view('livewire.administration.personal-component',[
            'personals'=>Personal::join('kindidentifications','personals.idkindident','=','kindidentifications.id')
            ->leftJoin('possitions','personals.idpossitions','=','possitions.id')
            ->select('personals.id','personals.name','kindidentifications.abbreviation as kindidentifications','personals.kindident','personals.cel','personals.ownemail','possitions.description as possitions')
            ->where('personals.name','like','%'.$this->search.'%')
            ->orWhere('personals.kindident','like','%'.$this->search.'%')
            ->orWhere('personals.ownemail','like','%'.$this->search.'%')
            ->orWhere('possitions.description','like','%'.$this->search.'%')
            ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
            ->having('personals.id','<>',1)
            ->paginate($this->porPagina),
            'idkindidents'=>Kindidentification::all(['id','description','ndigits']),
            'possitions'=>Possition::all(['id','description']),
        ]);
    }

    public function edit($codigo){
        $personal = Personal::findOrFail($codigo);
        $this->codigo=$personal->id;
        $this->name=$personal->name;
        $this->idkindident=$personal->idkindident;
        $this->kindident=$personal->kindident;
        $this->ruc=$personal->ruc;
        $this->telf=$personal->telf;
        $this->cel=$personal->cel;
        $this->ownemail=$personal->ownemail;
        $this->email=$personal->email;
        $this->address=$personal->address;
        $this->dateborn=$personal->dateborn;
        $this->idpossitions=$personal->idpossitions;
        $this->addnote=$personal->addnote;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'name' =>'required|max:200|string',
            'idkindident'=>'required',
            'kindident'=>'required|max:25|unique:App\Models\Personal,kindident,'.$this->codigo.',id',
            'ruc'=>'nullable|size:11|unique:App\Models\Personal,ruc,'.$this->codigo.'id',
            'telf'=>'nullable|max:15|string',
            'cel'=>'nullable|max:15|string',
            'ownemail'=>'required|nullable|email',
            'email'=>'email',
            'address'=>'nullable|max:500',
            'dateborn'=>'date|nullable',
            'addnote'=>'nullable|string',
            ]);
    }

    public function update(){
        try {
            $this->authorize('Editar Personal');
            $personal = Personal::findOrFail($this->codigo);        
            $personal->update([
                'name' =>$this->name,
                'idkindident'=>$this->idkindident,
                'kindident'=>$this->kindident,
                'ruc'=>$this->ruc,
                'telf'=>$this->telf,
                'cel'=>$this->cel,
                'ownemail'=>$this->ownemail,
                'email'=>$this->email,
                'address'=>$this->address,
                'dateborn'=>$this->dateborn,
                'idpossitions'=>$this->idpossitions,
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
    public function store(){
        
           try { 
            $this->authorize('Agregar Personal');
            $personal = Personal::create([
                'name' =>$this->name,
                'idkindident'=>$this->idkindident,
                'kindident'=>$this->kindident,
                'ruc'=>$this->ruc,
                'telf'=>$this->telf,
                'cel'=>$this->cel,
                'ownemail'=>$this->ownemail,
                'email'=>$this->email,
                'address'=>$this->address,
                'dateborn'=>$this->dateborn,
                'idpossitions'=>$this->idpossitions,
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

    public function delete($id){
        $this->codigo=$id;
    }
    public function destroy(){

        try {
            $this->authorize('Eliminar Personal');
            Personal::destroy($this->codigo);
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
        $this->name='';
        $this->idkindident='';
        $this->kindident='';
        $this->ruc='';
        $this->telf='';
        $this->cel='';
        $this->ownemail='';
        $this->email='';
        $this->address='';
        $this->dateborn='';
        $this->idpossitions='';
        $this->addnote='';
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }

}
