<?php

namespace App\Livewire\Boats;

use App\Models\Boat;
use Livewire\Component;

class Indnex extends Component
{
    public $boats;
    public $title;

    public function mount()
    {
        $this->boats = Boat::all();
    }

        public function destroy(Boat $boat)
    {
        $boat->delete();

        return $this->redirect()->route('livewire.boats.indnex')
            ->with('success', 'Boat deleted successfully.');
    }
    public function render()
    {
        return view('livewire.boats.indnex');
    }
}
