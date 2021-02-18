<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;


class Cashierposchoose extends Component
{

    public $product = [];
    public $listeners = ['quant'];
    public $categorylist  = [];
    public $category  = 0;
    public $search;

    public $price = '';
    public $quantity = '';
    public $product_name = '';

    use WithPagination;


    public function mount()
    {
        // if ($this->category == 0) {
        //     $this->product = Product::all();
        //     $this->categorylist = $this->categoryshow();
        // }


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

    public function updatedSearch()
    {
        // dd($this->search);
        if ($this->search == Null) {
            $this->product = [];
        }
        else{
            $searchterm = "%".$this->search."%";
            $this->product = Product::where('product_name','Like',$searchterm)->get();
        }

    }
    // public function search_product($name)
    // {
    //     $this->category = $id;
    //     $this->product = Product::where('category_id',$id)->get();
    // }

    public function allproduct()
    {

        $this->product = Product::all();
    }


   //set product details
   public function product_detail_set($id)
   {
        $product_detail = Product::find($id);
        $this->price = $product_detail->product_price;
   }
    public function render()
    {
        return view('livewire.cashierposchoose');
    }
}
