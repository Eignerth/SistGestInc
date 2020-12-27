<?php

namespace App\Http\Livewire\Kb;

use Livewire\Component;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class KbdetailComponent extends Component
{
    use AuthorizesRequests;
    public $codigo;
    public function mount($kb)
    {
        $this->codigo=$kb->id;
    }
    public function render()
    {
        return view('livewire.kb.kbdetail-component');
    }
}
