<?php

namespace App\Livewire\Boats;

use App\Models\Boat;
use Livewire\Component;

class Show extends Component
{
    public Boat $boat;

    public function render()
    {
        $md = new Boat();
        return view('livewire.boats.show');
    }
}
