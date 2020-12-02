<?php

namespace App\Http\Livewire\Support\Tickets;
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
    //public $archivos=[];

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
        return view('livewire.support.tickets.tickets-component',[
            'tickets'=>Tksupportm::join('ticketsm','tksupportm.idticketsm','=','ticketsm.id')
                ->join('contacts','tksupportm.idcontacts','=','contacts.id')
                ->join('customers','contacts.idcustomers','=','customers.id')
                ->join('classifications','tksupportm.idclassifications','=','classifications.id')
                ->join('priorities','tksupportm.idpriorities','=','priorities.id')
                ->join('tkstatus','tksupportm.idtkstatus','=','tkstatus.id')
                ->select('tksupportm.id','tksupportm.serie','customers.descripcion as customer','contacts.name as contact','tksupportm.registerdate','priorities.description as priority','priorities.color as prioritycolor','tkstatus.color as status')
                ->where('tksupportm.serie','like','%'.$this->search.'%')
                ->orWhere('contacts.name','like','%'.$this->search.'%')
                ->orWhere('tksupportm.registerdate','like','%'.$this->search.'%')
                ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
                ->paginate($this->porPagina),
            'series'=>Ticketsm::join('areas','ticketsm.idareas','=','areas.id')
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
            //'archivos.*'=>'mimes:doc,pdf,docx,jpeg,jpg,png',
        ],[
            'dateregister.required'=>'Fecha de Registro es obligatorio.',
            'timeregister.required'=>'Hora de Registro es obligatorio.',
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

  /*           if(!empty($this->archivo)){
                $idpersonal = auth()->user()->idpersonals;
                foreach ($this->archivo as $file) {
                    $realname = $file->getClientOriginalName();
                    $file->store('SupportFiles','local');
                    Supportfile::create([
                        'idtksupportms'=>$ticketnew->id,
                        'idpersonals'=>$idpersonal,
                        'tittle'=>$realname,
                        'file'=>$file->hashName(),
                    ]);
                    
                }           
                //$extension = $this->archivo->extension();
                //Storage::disk('do_spaces')->putFileAs('SupportFiles',$this->archivo,'prueba.'.$extension);
            } */
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

    public function limpiar(){
        $this->search='';
        $this->codigo='';
        $this->idserie='';
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
        //$this->archivos=[];
    }

    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }

}
