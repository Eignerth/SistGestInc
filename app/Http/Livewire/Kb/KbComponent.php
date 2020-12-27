<?php

namespace App\Http\Livewire\Kb;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Knowledgebase;
use App\Models\Product;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Option;
use App\Models\Kbfile;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class KbComponent extends Component
{
    use WithPagination, WithFileUploads, AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';
    public $porPagina=10;
    public $sortField='id';
    public $sortAsc=true;    
    public $search = '';
    public $codigo,$subject,$message,$product,$menu,$submenu,$option,$files=[],$detfiles=[];

    protected $rules=[
        'message'=>'required|min:1',
        'product'=>'required',
    ];
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
        return view('livewire.kb.kb-component',[
            'kbs'=>Knowledgebase::leftJoin('menus','knowledgebases.idmenus','=','menus.id')
            ->join('products','knowledgebases.idproducts','=','products.id')
            ->select('knowledgebases.id','knowledgebases.subject','products.abbreviation as product','menus.description as menu','knowledgebases.created_at')
            ->where('knowledgebases.subject','like','%'.$this->search.'%')
            ->orWhere('products.abbreviation','like','%'.$this->search.'%')
            ->orWhere('products.description','like','%'.$this->search.'%')
            ->orWhere('menus.description','like','%'.$this->search.'%')
            ->orderBy($this->sortField,$this->sortAsc?'asc':'desc')
            ->paginate($this->porPagina),
            'products'=> Product::all(['id','description']),
            'menus'=>Menu::where('idproducts','=',$this->product)
                ->get(['id','description']),
            'submenus'=>SubMenu::where('idmenus','=',$this->menu)
                ->get(['id','description']),
            'options'=>Option::where('idsubmenus','=',$this->submenu)
                ->get(['id','description']),
        ]);
    }

    public function updated($propertyName)
    {   
        $this->validateOnly($propertyName,[
            'subject'=>'required|unique:App\Models\Knowledgebase,subject,'.$this->codigo.',id',
        ]);
    }

    public function updatedFiles()
    {
        $this->resetValidation('files');
        $this->validate([
            'files.*'=>'file|mimetypes:text/plain,image/jpeg,image/png,image/jpg,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-powerpoint,application/vnd.openxmlformats-officedocument.presentationml.presentation,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|max:7168'
        ],[
            'files.*.mimetypes'=>'Los archivos deben ser del tipo .txt, .jpeg, .png, .jpg, .doc, .docx, .xls, .xlsx, ppt, pptx y .pdf'
        ]);
    }

    public function store()
    {
        try {
            $validatedData=$this->validate();
            Knowledgebase::create([            
                'subject'=>$this->subject,
                'message'=>$this->message,
                'idproducts'=>$this->product,
                'idmenus'=>$this->menu,
                'idsubmenus'=>$this->submenu,
                'idoptions'=>$this->option,
                'idpersonals'=>auth()->user()->idpersonals, 
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
        $kb = Knowledgebase::findOrFail($id);
        $this->codigo = $kb->id;
        $this->subject = $kb->subject;
        $this->message = $kb->message;
        $this->product = $kb->idproducts;
        $this->menu = $kb->idmenus;
        $this->submenu = $kb->idsubmenus;
        $this->option = $kb->idoptions;
        $this->detfiles=Kbfile::where('idkbs','=',$kb->id)->get(['id','tittle']);
    }

    public function update()
    {
        try {
            $validatedData=$this->validate();
            $kb = Knowledgebase::findOrFail($this->codigo);
            $kb->update([
                'subject'=>$this->subject,
                'message'=>$this->message,
                'idproducts'=>$this->product,
                'idmenus'=>$this->menu,
                'idsubmenus'=>$this->submenu,
                'idoptions'=>$this->option,
                'idpersonals'=>auth()->user()->idpersonals, 
            ]);
            if(!empty($this->files)){
                $idpersonal = auth()->user()->idpersonals;
                foreach ($this->files as $file) {
                    $realname = $file->getClientOriginalName();
                    $file->store('KbFiles','local');
                    Kbfile::create([
                        //$extension = $this->archivo->extension();
                        'idkbs'=>$this->codigo,
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
    public function deleteFile($id)
    {
        $file=Kbfile::findOrFail($id);
        if (Storage::delete('KbFiles/'.$file->file)) {
            Kbfile::destroy($file->id);
        }
        $this->detfiles=Kbfile::where('idkbs','=',$this->codigo)->get(['id','tittle']);
    }
    public function delete($id)
    {
        $this->codigo = $id;
    }
    public function destroy()
    {
        try {
            Knowledgebase::destroy($this->codigo);
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
        $this->subject='';
        $this->message='';
        $this->product='';
        $this->menu='';
        $this->submenu='';
        $this->option='';
        $this->files=null;
        $this->detfiles=[];
    }
    public function cancel(){
        $this->limpiar();
        $this->resetValidation();
    }
}
