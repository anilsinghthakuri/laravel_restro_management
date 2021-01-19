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
    public $categorylist  = [];
    public $category  = 0;

    use WithPagination;


    public function mount()
    {
        if ($this->category == 0) {
            $this->product = Product::all();
            $this->categorylist = $this->categoryshow();
        }


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

    public function choosecategory($id)
    {
        $this->category = $id;
        $this->product = Product::where('category_id',$id)->get();
    }

    public function allproduct()
    {

        $this->product = Product::all();
    }

    public function alcohol()
    {

    }


    public function render()
    {
        return view('livewire.poschoose');
    }
}
