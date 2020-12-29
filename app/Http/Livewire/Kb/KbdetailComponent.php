<?php

namespace App\Http\Livewire\Kb;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Kbfile;
use App\Models\ListKbs;
use App\Models\Kbtkref;
use App\Models\Commentkb;
use App\Models\Tksupportm;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class KbdetailComponent extends Component
{
    use AuthorizesRequests;
    public $codigo;
    public $mensaje='',$ticket='';
    public function mount($kb)
    {
        $this->codigo=$kb;
        $this->mensaje='';
        $this->ticket='';
    }
    public function render()
    {
        $detalle = ListKbs::findOrFail($this->codigo);
        $tickets = Kbtkref::join('tksupportm','kbreftks.idtksupportm','=','tksupportm.id')
            ->where('idkbs','=',$this->codigo)
            ->orderBy('tksupportm.serie','desc')
            ->get(['kbreftks.id as id','tksupportm.serie as serie']);
        $comments = Commentkb::join('personals','commentkbs.idpersonals','=','personals.id')
            ->where('commentkbs.idkbs','=',$this->codigo)
            ->orderBy('commentkbs.created_at','desc')
            ->get(['commentkbs.id as id','commentkbs.idpersonals','personals.name as personal','description','commentkbs.created_at']);
        $files=Kbfile::where('idkbs','=',$this->codigo)->get(['id','tittle']);
        return view('livewire.kb.kbdetail-component',['detalle'=>$detalle,'tickets'=>$tickets,'files'=>$files,'comments'=>$comments]);
    }

    public function downloadFile($id)
    {
        $file = Kbfile::findOrFail($id);
        return response()->download(storage_path('app/KbFiles/'.$file->file),$file->tittle);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'mensaje' =>'required|min:3',
            'ticket'=>[
                'required','size:14'
            ]
        ]);
    }

    public function storeTk()
    {
        try {
            $serie = Str::upper(Str::of($this->ticket)->trim());
            $ticket = Tksupportm::findBySerie($serie);
            Kbtkref::create([
                'idkbs'=>$this->codigo,
                'idtksupportm'=>$ticket->id
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
        } catch (\Throwable $th) {
            $this->cancel();
            $this->dispatchBrowserEvent('swal',[
                'title'=>'No Publicado!',
                'text'=>'Puede que el ticket ya este registrado. Intente de Nuevo',
                'timer'=>3000,
                'icon'=>'error',
                'toast'=>true,
                'position'=>'top-right'
            ]);
        }
         
    }

    public function comment()
    {
        try {           
            $mensaje = Str::of($this->mensaje)->trim();
            if(strlen($mensaje)>1){
                Commentkb::create([
                    'idkbs'=>$this->codigo,
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
            $comment = Commentkb::findOrFail($id);
            Commentkb::destroy($id);
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
        $this->ticket='';
        $this->resetValidation();
    }

    public function viewTk($ticket)
    {
        $tk = Tksupportm::findOrFail($ticket);
    }
}
