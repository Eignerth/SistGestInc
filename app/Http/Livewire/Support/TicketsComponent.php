<?php

namespace App\Http\Livewire\Support;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Tksupportm;
use App\Models\Auth;
use App\Models\Ticketsm;
use App\Models\Supportfile;
use App\Models\Contact;
use App\Models\Classification;
use App\Models\Channel;
use App\Models\Product;
use App\Models\Prioritie;
use App\Models\Tkstatus;
use App\Models\Area;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class TicketsComponent extends Component
{
    use WithPagination, WithFileUploads, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $search='';
    public $sortField='id';
    public $sortAsc=true;
    public $codigo,$serie,$num,$contacto,$clasificacion,$prioridad,$asunto,$mensaje,$producto,$canal,$status,$dateregister,$timeregister,$dateexpire,$timeexpire;
    public $files=[];
    public $archivos=[];
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
        return view('livewire.support.tickets-component',[
            'tickets'=>Tksupportm::join('ticketsm','tksupportm.idticketsm','=','ticketsm.id')
                ->join('personals','tksupportm.idpersonals','=','personals.id')
                ->join('contacts','tksupportm.idcontacts','=','contacts.id')
                ->join('customers','contacts.idcustomers','=','customers.id')
                ->join('classifications','tksupportm.idclassifications','=','classifications.id')
                ->join('priorities','tksupportm.idpriorities','=','priorities.id')
                ->join('tkstatus','tksupportm.idtkstatus','=','tkstatus.id')
                ->select('tksupportm.id','tksupportm.serie','tksupportm.idpersonals','personals.name as personal','customers.descripcion as customer','contacts.name as contact','tksupportm.registerdate','priorities.description as priority','priorities.color as prioritycolor','tkstatus.color as status')
                ->where('tksupportm.serie','like','%'.$this->search.'%')
                ->orWhere('contacts.name','like','%'.$this->search.'%')
                ->orWhere('tksupportm.registerdate','like','%'.$this->search.'%')
                ->orWhere('personals.name','like','%'.$this->search.'%')
                ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
                ->paginate($this->porPagina),
            'series'=>Ticketsm::join('areas','ticketsm.idareas','=','areas.id')
                ->where('ticketsm.flgstatus','=','1')
                ->get(['ticketsm.id','ticketsm.serie','areas.abbreviation as area']),
            'contacts'=>Contact::join('customers','contacts.idcustomers','=','customers.id')
                ->get(['contacts.id','customers.descripcion as customers','contacts.name']),
            'classifications'=>Classification::all(['id','description']),
            'channels'=>Channel::all(['id','description']),
            'products'=>Product::all(['id','description']),
            'priorities'=>Prioritie::all(['id','description']),
            'statuses'=>Tkstatus::all(['id','description']),

        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'serie'=>'required',
            'contacto'=>'required',
            'clasificacion'=>'required',            
            'canal'=>'required',
            'producto'=>'required',
            'prioridad'=>'required',
            'status'=>'required',
            'asunto'=>'required',
            'mensaje'=>'required',
            'dateregister'=>'required|date',
            'timeregister'=>'required|date_format:H:i:s',
            'dateexpire'=>'date|nullable',
            'timeexpire'=>'date_format:H:i:s|nullable',
           
        ],[
            'dateregister.required'=>'Fecha de Registro es obligatorio.',
            'timeregister.required'=>'Hora de Registro es obligatorio.',
        ]);
    }
    public function updatedArchivos()
    {
        $this->resetValidation('archivos');
        $this->validate([
            'archivos.*'=>'file|mimetypes:text/plain,image/jpeg,image/png,image/jpg,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|max:7168',

        ],[
            'archivos.*.mimetypes'=>'Los archivos deben ser del tipo .txt, .jpeg, .png, .jpg, .doc, .docx, .xls, .xlsx, ppt, pptx y .pdf'
        ]);
    }

    public function create()
    {
        $date = Carbon::now();
        $this->dateregister = $date->toDateString();
        $this->timeregister = $date->toTimeString();
    }    

    public function store()
    {   
        try {
            $this->authorize('Agregar Sop. Tickets');
            //obtener serie
            $serie = Ticketsm::find($this->serie);
            $area = Area::find($serie->idareas);
            //obtner correlativo
            $newnum = sprintf("%06d",$serie->num+1);        
            $ticketnew = Tksupportm::create([
                'idticketsm'=>$this->serie,
                'serie'=> $serie->serie.'-'.$area->abbreviation.'-'.$newnum,
                'idpersonals'=>auth()->user()->idpersonals,
                'idcontacts'=>$this->contacto,
                'idclassifications'=>$this->clasificacion,
                'idpriorities'=>$this->prioridad,
                'idtkstatus'=>$this->status,
                'subject'=>$this->asunto,
                'message'=>$this->mensaje,
                'idproducts'=>$this->producto,
                'idchannels'=>$this->canal,
                'registerdate'=>$this->dateregister,
                'registertime'=>$this->timeregister,
                'expirationdate'=>$this->dateexpire,
                'expirationtime'=>$this->timeexpire,    
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
        $ticket = Tksupportm::findOrFail($id);
        $this->codigo=$ticket->id;
        $this->serie=$ticket->serie;
        $this->contacto=$ticket->idcontacts;
        $this->clasificacion=$ticket->idclassifications;
        $this->canal=$ticket->idchannels;
        $this->prioridad=$ticket->idpriorities;
        $this->asunto=$ticket->subject;
        $this->mensaje=$ticket->message;
        $this->producto=$ticket->idproducts;
        $this->status=$ticket->idtkstatus;
        $this->dateregister=$ticket->registerdate;
        $this->timeregister=$ticket->registertime;
        $this->dateexpire=$ticket->expirationdate;
        $this->timeexpire=$ticket->expirationtime;
        $this->files=Supportfile::where('idtksupportms','=',$ticket->id)->get(['id','tittle']);
        
    }

    public function update()
    {
        try {
            $this->authorize('Editar Sop. Tickets');
            $ticket=Tksupportm::findOrFail($this->codigo);
            $ticket->update([
                'idcontacts'=>$this->contacto,
                'idclassifications'=>$this->clasificacion,
                'idpriorities'=>$this->prioridad,
                'idtkstatus'=>$this->status,
                'subject'=>$this->asunto,
                'message'=>$this->mensaje,
                'idproducts'=>$this->producto,
                'idchannels'=>$this->canal,
                'registerdate'=>$this->dateregister,
                'registertime'=>$this->timeregister,
                'expirationdate'=>$this->dateexpire,
                'expirationtime'=>$this->timeexpire,
            ]);
            if(!empty($this->archivos)){
                $idpersonal = auth()->user()->idpersonals;
                foreach ($this->archivos as $file) {
                    $realname = $file->getClientOriginalName();
                    $file->store('SupportFiles','local');
                    Supportfile::create([
                        //$extension = $this->archivo->extension();
                        'idtksupportms'=>$this->codigo,
                        'idpersonals'=>$idpersonal,
                        'tittle'=>$realname,
                        'file'=>$file->hashName(),
                    ]);            
                }
            }
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
                'text'=>'Intente de Nuevo',
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
    
    public function deleteFile($id)
    {
        $file=Supportfile::findOrFail($id);
        if (Storage::delete('SupportFiles/'.$file->file)) {
            Supportfile::destroy($file->id);
        }
        $this->files=Supportfile::where('idtksupportms','=',$this->codigo)->get(['id','tittle']);
    }

    public function destroy(){

        try {
            $this->authorize('Eliminar Sop. Tickets');
            Tksupportm::destroy($this->codigo);
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
        $this->serie='';
        $this->num='';
        $this->contacto='';
        $this->clasificacion='';
        $this->canal='';
        $this->prioridad='';
        $this->asunto='';
        $this->mensaje='';
        $this->producto='';
        $this->status='';
        $this->dateregister=null;
        $this->timeregister=null;
        $this->dateexpire=null;
        $this->timeexpire=null;
        $this->archivos=null;
        $this->files=[];
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }


}
