@extends('layouts.master')

@section('components')

<div class="col-md-12 mt-3">
    <div class="row">
        <div class="col-md-12">
            <h2 class="add__table__title mb-4 mt-4">Credit Collection</h2>
        </div>

       <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
       </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="add__credit--list">

            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            {{-- <h4 class="add__table__title mb-4">Credit Collection</h4> --}}
            <div class="table__list__part ">
                <div class="table-responsive">
                <table class="table table-bordered bg-light table-responsiv" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">S.N</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Total Amount </th>
                            <th scope="col">Paid Amount</th>
                            <th scope="col">Balance </th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($creditlist as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->customer->customer_username}}</td>
                            <td>RS: {{$item->total_amount_to_pay}}</td>
                            <td>RS: {{$item->amount_paid}}</td>
                            <td>RS: {{$item->balance_amount}}</td>
                            @if ($item->balance_amount != 0)
                            <td>
                                <a href="/credits/{{$item->customer_id}}"><button type="button" class="btn btn-primary"><i class="fas fa-edit"></i></button></a>
                               </td>
                            @endif



                        </tr>
                        @endforeach




                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>



</div>


@endsection
