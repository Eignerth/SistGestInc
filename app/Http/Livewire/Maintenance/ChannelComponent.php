<?php

namespace App\Http\Livewire\Maintenance;

use App\Models\Channel;
use Livewire\Component;
use Livewire\WithPagination;

class ChannelComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $search='';
    public $sortField='id';
    public $sortAsc=true;
    public $codigo,$description;

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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'description'=>'required|string|max:100|unique:App\Models\Channel,description,'.$this->codigo.',id',
        ]);
    }

    public function edit($codigo){
        $channel = Channel::findOrFail($codigo);
        $this->description=$channel->description;
    }

    public function render()
    {
        return view('livewire.maintenance.channel-component',[
            'channels'=>Channel::search($this->search)
            ->orderBy($this->sortField,$this->sortAsc ? 'asc':'desc')
            ->paginate($this->porPagina),
        ]);
    }

    public function update()
    {
        $channel = Channel::findOrFail($this->codigo);        
        $channel->update([
            'description'=>$this->description
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
    }

    public function store()
    {
        Channel::create([
            'description'=>$this->description
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
    }

    public function destroy(){

        try {
            Channel::destroy($this->codigo);
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

    public function delete($id){
        $this->codigo=$id;
    }
    public function limpiar(){
        $this->search='';
        $this->codigo='';
        $this->description='';
    }
    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}
