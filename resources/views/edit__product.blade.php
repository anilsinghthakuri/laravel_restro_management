@extends('layouts.master')

@section('components')
<div class="col-md-12 mt-3 ">


    <div class="row ">
        <div class="col-md-12 pt-2">
            <div class="add__categories_bottom">
                <!-- Button trigger modal -->
                <a href="/product"><button type="button" class="btn btn-primary">
                        Product List
                    </button></a>


            </div>

        </div>
    </div>
    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
       </div>

    <form class="add__product__form" action="/product-update" method="POST" enctype="multipart/form-data">
        <div class="row  mt-3">
            @csrf
            <div class="col-md-4">
                <input type="hidden" name="id" value="{{$product->product_id}}">
                <label for="exampleInputEmail1" class="form-label">Category Name</label>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01">type</label>
                    <select class="form-select" name="category_id"  id="inputGroupSelect01">
                        <option >Choose...</option>
                        @foreach ($categorylist as $item)
                        <option {{ $product->category_id == $item->category_id? 'selected' : '' }} value='{{$item->category_id}}'  >{{$item->category_name}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-md-4">

                <label for="exampleInputEmail1" class="form-label">Product Name</label>

                <div class="input-group mb-3">
                    <span class="input-group-text"  for="name" id="basic-addon1"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="productname" id="" value={{$product->product_name}} aria-label="Username" aria-describedby="basic-addon1">
                </div>

            </div>
            <div class="col-md-4">

                <label for="exampleInputEmail1" class="form-label">Product Price</label>

                <div class="input-group mb-3">
                    <span class="input-group-text"  for="productprice" id="basic-addon1"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                    <input type="number" class="form-control" name="productprice" id="" value="{{$product->product_price}}" aria-label="Username" aria-describedby="basic-addon1">
                </div>

            </div>

        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="/product"><button class="btn btn-danger">Cancel</button></a>
    </form>




</div>
@endsection
