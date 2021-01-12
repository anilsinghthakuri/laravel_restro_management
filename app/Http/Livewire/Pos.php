<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pos extends Component
{
    public $table = 0;
    protected $listeners = ['grandprice' => 'mount'];
    public function mount($id)
    {
        $this->table = $id;

    }

    public function render()
    {
        return view('livewire.pos');
    }
}
