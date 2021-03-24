@extends('layouts.master')

@section('components')

<div class="col-md-12 mt-3 ">
    <div class="row">
        <div class="col-md-12">
            <h2 class="add__table__title mb-4 mt-4">Product Wise Sale</h2>
        </div>

    </div>
    <div class="row mt-2">
        <div class="col-sm-12">
            <nav class="mb-3">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link  active" id="nav-home-tab " data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Today</a>
                    <a class="nav-link " id="nav-profile-tab " data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Week</a>
                    <a class="nav-link " id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Total</a>
                    <a href="/export-orders"><button class="btn btn-primary mx-5 btn-sm my-3">Excel report download</button></a>
                </div>
            </nav>


            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="table-responsive">
                    <table class="table table-bordered bg-light">
                        <thead>
                          <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Table Number</th>
                            <th scope="col">Order Quantity</th>
                            <th scope="col">Sub-Price</th>
                          </tr>
                        </thead>
                        <tbody class="table-light">
                            @foreach ($today_order_list as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->product->product_name}}</td>
                                <td>{{$item->table_id}}</td>
                                <td>{{$item->order_quantity}}</td>
                                <td>{{$item->order_subprice}}</td>
                              </tr>
                            @endforeach


                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="table-responsive">
                    <table class="table table-bordered bg-light table-responsiv ">
                        <thead>
                          <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Table Number</th>
                            <th scope="col">Order Quantity</th>
                            <th scope="col">Sub-Price</th>
                          </tr>
                        </thead>
                        <tbody class="table-light">
                            @foreach ($week_order_list as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->product->product_name}}</td>
                                <td>{{$item->table_id}}</td>
                                <td>{{$item->order_quantity}}</td>
                                <td>{{$item->order_subprice}}</td>
                              </tr>
                            @endforeach


                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="table-responsive">
                    <table class="table table-bordered bg-light  ">
                        <thead>
                          <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Table Number</th>
                            <th scope="col">Order Quantity</th>
                            <th scope="col">Sub-Price</th>
                          </tr>
                        </thead>
                        <tbody class="table-light">

                            @foreach ($total_order_list as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->product->product_name}}</td>
                                <td>{{$item->table_id}}</td>
                                <td>{{$item->order_quantity}}</td>
                                <td>{{$item->order_subprice}}</td>
                              </tr>
                            @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
