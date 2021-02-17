@extends('layouts.master')


@section('components')
    <div class="col-md-9">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="add__table__title mb-4 mt-4">All table</h2>
            </div>

        </div>

            <div class="row row__margin mb-3">
                <div class="col-sm-6">
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="Search Table"
                            wire:model='search' aria-label="Search" id="">
                        <button class=" btn-search transition__btn">Search</button>
                    </form>
                </div>
            </div>

        <div class="row">


            @foreach ($table as $item)

            @if ($item->table_total_amount == 0)

            <div class="col-sm-2">

                <div class="table-inner ">
                    <div class="table-detail">
                        <h2><a href="/cashier-pos/{{$item->table_id}}">{{$item->table_name}}</a></h2>
                    </div>
                </div>

            </div>

            @else

            <div class="col-sm-2">

                <div class="table-inner ">
                    <div class="table-detail active-table">
                        <h2><a href="/cashier-pos/{{$item->table_id}}">{{$item->table_name}}</a></h2>
                        <h1>RS: {{$item->table_total_amount}}</h1>
                        <br>
                    </div>
                </div>

            </div>

            @endif

            @endforeach


        </div>

    </div>
@endsection
