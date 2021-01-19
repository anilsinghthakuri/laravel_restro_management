<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Poschoose extends Component
{

    public $product = [];
    public $listeners = ['quant'];
    use WithPagination;


    public function mount()
    {
        $this->product = Product::all();
    }


    public function addproduct($id)
    {
        // dd($id);
        $this->emitTo('possale','orderadd',$id);
    }


    public function categoryshow()
    {
        $categorylist = Category::all();
        return $categorylist;
    }


    public function render()
    {
        return view('livewire.poschoose');
    }
}
