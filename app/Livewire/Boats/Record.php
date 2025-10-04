<?php

namespace App\Livewire\Boats;

use Livewire\Component;
use App\Models\Boat;

class Record extends Component
{
    public $boat;
    public function destroy(Boat $boat)
    {
        $boat->delete();
        session()->flash('success', 'Boat deleted successfully.');

        // return $this->redirect(route('wire.boats.index'), true);
    }

    public function show(Boat $boat)
    {
        return $this->redirect(route('wire.boats.show', $boat), true);
    }
    public function render()
    {
        return view('livewire.boats.record');
    }
}
