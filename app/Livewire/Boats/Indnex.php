<?php

namespace App\Livewire\Boats;

use App\Models\Boat;
use Livewire\Component;
use Livewire\Attributes\Title;

class Indnex extends Component
{
    public function show(Boat $boat)
    {
        return $this->redirect(route('wire.boats.show', $boat));
    }
    public function destroy(Boat $boat)
    {
        $boat->delete();
        // return $this->redirect()->route('livewire.boats.indnex')
        //     ->with('success', 'Boat deleted successfully.');
    }

    #[Title('Boats List')]
    public function render()
    {
        return view('livewire.boats.indnex', [
        'boats' => Boat::all(),
    ]);
    }
}
