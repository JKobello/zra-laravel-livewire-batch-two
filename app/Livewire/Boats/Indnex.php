<?php

namespace App\Livewire\Boats;

use App\Models\Boat;
use Livewire\Component;
use Livewire\Attributes\Title;

class Indnex extends Component
{
    public $boats;

    public function mount()
    {
        $this->boats = Boat::all();
    }
    #[Title('Boats List')]
    public function render()
    {
        return view('livewire.boats.indnex', [
            'boats' => $this->boats,
        ]);
    }
}
