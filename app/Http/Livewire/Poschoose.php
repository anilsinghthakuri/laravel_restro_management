<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Poschoose extends Component
{

    public $product = [];
    public $quant= 0;
    public $listeners = ['quant'];


    public function mount()
    {
        $this->product = Product::all();
    }
    public function quant($quant)
    {
        $this->product = Product::all();


    }

    public function addproduct($id)
    {
        // dd($id);
        $this->emitTo('possale','orderadd',$id);
    }
    public function render()
    {
        return view('livewire.poschoose');
    }
}
