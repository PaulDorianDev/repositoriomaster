<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Evento;

class ShowEvents extends Component
{

    public $search;
    public $sort = 'id';
    public $direction = 'desc';

    public function render()
    {


        $eventos = Evento::where('nombre', 'like','%'. $this->search . '%')
        ->orWhere('desc', 'like','%'. $this->search . '%')
        ->orWhere('fecha', 'like','%'. $this->search . '%')
        ->orWhere('lugar', 'like','%'. $this->search . '%')
        ->orderBy($this->sort, $this->direction)
        ->get();


        return view('eventos.index', compact('eventos'));
    }

    public function order($sort){

        if($this->sort == $sort){
            if($this->direction == 'desc'){
                $this->direction = 'asc';

            }
            else{
                $this->direction = 'desc';
            }

        }
        else{
            $this->sort = $sort;
        }

    }

}
