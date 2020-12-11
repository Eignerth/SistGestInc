<?php

namespace App\Http\Livewire\Support;
use Livewire\Component;
use App\Models\Tksupportd;
use App\Models\Supportfile;
use App\Models\Listtksupport;
use Illuminate\Support\Str;

class TicketdetailComponent extends Component
{
    public $codigo;
    public $mensaje='';
    public function mount($ticket)
    {
        $this->codigo = $ticket->id;
        $this->mensaje='';
    }

    public function render()
    {
        $detalle = Listtksupport::findOrFail($this->codigo);
        $comments = Tksupportd::join('personals','tksupportd.idpersonals','=','personals.id')
            ->where('tksupportd.idtksupportm','=',$this->codigo)
            ->orderBy('created_at','desc')
            ->get(['tksupportd.id as id','tksupportd.idpersonals','personals.name as personal','description','tksupportd.created_at']);
        $files=Supportfile::where('idtksupportms','=',$this->codigo)->get(['id','tittle']);
        return view('livewire.support.ticketdetail-component',['detalle'=>$detalle,'files'=>$files,'comments'=>$comments]);
    }

    public function downloadFile($id)
    {
        $file = Supportfile::findOrFail($id);
        return response()->download(storage_path('app/SupportFiles/'.$file->file),$file->tittle);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'mensaje' =>'required|min:3',
        ]);
    }

    public function comment()
    {
        try {
            $mensaje = Str::of($this->mensaje)->trim();
            if(strlen($mensaje)>1){
                Tksupportd::create([
                    'idtksupportm'=>$this->codigo,
                    'idpersonals'=>auth()->user()->idpersonals,
                    'description'=>Str::of($this->mensaje)->trim(),
                ]);
                $this->cancel();
                $this->dispatchBrowserEvent('swal',[
                    'title'=>'Publicado!',
                    'text'=>'La información se publicó correctamente!',
                    'timer'=>3000,
                    'icon'=>'success',
                    'toast'=>true,
                    'position'=>'top-right'
                ]);                
            }else{
                throw new Exception();
            }
                        
        } catch (\Throwable $th) {
            $this->cancel();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'No Publicado!',
                'text'=>'Intente de nuevo, por favor',
                'timer'=>3000,
                'icon'=>'error',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        }
        
    }

    public function deleteComment($id)
    {
        try {
            $comment = Tksupportd::findOrFail($id);
            Tksupportd::destroy($id);
            $this->cancel();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'Eliminado!',
                'text'=>'Este proceso no se puede retroceder!',
                'timer'=>3000,
                'icon'=>'success',
                'toast'=>true,
                'position'=>'top-right'
            ]); 
        } catch (\Throwable $th) {
            $this->cancel();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'No Eliminado!',
                'text'=>'Intente de nuevo, por favor',
                'timer'=>3000,
                'icon'=>'error',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        }
        
    }

    public function cancel()
    {
        $this->mensaje='';
        $this->resetValidation();
    }


}
