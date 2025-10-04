<?php

namespace App\Livewire\Boats;

use App\Models\Boat;
use Livewire\Component;

class Show extends Component
{
    public Boat $boat;

    public function goBack()
    {
        return $this->redirect(route('wire.boats.index'));
    }
    public function destroy(Boat $boat)
    {
        $boat->delete();
        return $this->redirect(route('livewire.boats.indnex'))
            ->with('success', 'Boat deleted successfully.');
    }

    public function render()
    {
        $md = new Boat();
        return view('livewire.boats.show');
    }
}
