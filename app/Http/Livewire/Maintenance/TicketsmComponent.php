<?php
namespace App\Http\Livewire\Maintenance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Ticketsm;
use App\Models\Area;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class TicketsmComponent extends Component
{
    use WithPagination, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $search='';
    public $sortField='id';
    public $sortAsc=true;
    public $codigo,$area,$serie,$status=0;

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
        return view('livewire.maintenance.ticketsm-component',[
            'series'=>Ticketsm::join('areas','ticketsm.idareas','=','areas.id')
                ->select('ticketsm.id','areas.abbreviation as areas','ticketsm.serie','ticketsm.num','ticketsm.flgstatus')
                ->where('areas.description','like','%'.$this->search.'%')
                ->orWhere('ticketsm.serie','like','%'.$this->search.'%')
                ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
                ->paginate($this->porPagina),
            'areas'=>Area::all(['id','abbreviation','description']),
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'area'=>'required',
            'serie'=>[
                'required','string','size:3','string','alpha',
                Rule::unique('ticketsm')->where(function ($query){
                    return $query->where('idareas',$this->area);                   
                })->ignore($this->codigo,'id'),
            ]
        ]);
    }
    public function store()
    {
        try {
            $this->authorize('Agregar Control de Series');
            Ticketsm::create([
                'idareas'=>$this->area,
                'serie'=>Str::upper($this->serie),
                'flgstatus'=>$this->status,
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

    public function edit($id)
    {
        $serie = Ticketsm::findOrFail($id);
        $this->codigo = $serie->id;
        $this->area = $serie->idareas;
        $this->serie = $serie->serie;
        $this->status = $serie->flgstatus;
    }

    public function update()
    {
        try {
            $this->authorize('Editar Control de Series');
            $serie = Ticketsm::findOrFail($this->codigo);
            $serie->update([
                'flgstatus'=>$this->status,
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

    public function delete($id)
    {
        $this->codigo=$id;
    }

    public function destroy()
    {
        try {
            $this->authorize('Eliminar Control de Series');
            $serie = Ticketsm::find($this->codigo);
            if ($serie->num == 0) {
                Ticketsm::destroy($this->codigo);
                $this->limpiar();
                $this->dispatchBrowserEvent('swal',[
                'title'=>'Eliminado!',
                'text'=>'La información se eliminó correctamente!',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
                ]);
            }else{
                throw new Exception();
            }
            
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
        $this->codigo='';
        $this->area='';
        $this->serie='';       
        $this->status=0;
    }
    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}