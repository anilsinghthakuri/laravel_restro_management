@extends('layouts.master')

@section('components')

<div class="col-md-12 mt-3 ">
    <div class="row">
        <div class="col-md-4">
            <h2 class="add__table__title mb-4 mt-4">Table Layout</h2>
        </div>
        <div class="col-md-2">
            <h6 class="add__table__title mb-4 mt-4 text-success"><i class="fas fa-info-circle"> Table Free</i> </h6>
        </div>
        <div class="col-md-2">
            <h6 class="add__table__title mb-4 mt-4 text-info"><i class="fas fa-info-circle"> Table Booked</i></h6>
        </div>
        <div class="col-md-2">
            <h6 class="add__table__title mb-4 mt-4 text-warning"><i class="fas fa-info-circle"> Kot done</i></h6>
        </div>
        <div class="col-md-2">
            <h6 class="add__table__title mb-4 mt-4 text-danger"><i class="fas fa-info-circle"> Bill Not Settle</i></h6>
        </div>

    </div>
    <div class="row">

        @foreach ($tablename as $item)

        @if ($item->table_status == 1)

        <div class="col-md-2">
            <div class="card__design ">
                <a href="/pos/{{$item->table_id}}/{{$item->table_amount}}">
                    <div class="card text-center bg-info">
                        <div class="card-body ">
                            <h5 class="card-title title--bill  text-light">{{$item->table_name}}</h5>
                        </div>
                        <div class="card-footer text-muted text-bill ">
                            <h3 class="  text-light">{{$item->table_amount}}</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        @elseif ($item->table_status == 2)

        <div class="col-md-2">
            <div class="card__design ">
                <a href="/pos/{{$item->table_id}}/{{$item->table_amount}}">
                    <div class="card text-center bg-warning">
                        <div class="card-body ">
                            <h5 class="card-title title--bill  text-light">{{$item->table_name}}</h5>
                        </div>
                        <div class="card-footer text-muted text-bill ">
                            <h3 class="  text-light">{{$item->table_amount}}</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        @elseif ($item->table_status == 3)

        <div class="col-md-2">
            <div class="card__design ">
                <a href="/pos/{{$item->table_id}}/{{$item->table_amount}}">
                    <div class="card text-center bg-danger">
                        <div class="card-body ">
                            <h5 class="card-title title--bill  text-light">{{$item->table_name}}</h5>
                        </div>
                        <div class="card-footer text-muted text-bill ">
                            <h3 class="  text-light">{{$item->table_amount}}</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        @endif

        @endforeach


    </div>
    <hr>
    <hr>
    <div class="row">

        @foreach ($tablename as $item)

        @if ($item->table_status == 0)

        <div class="col-md-2">
            <div class="card__design ">
                <a href="/pos/{{$item->table_id}}/{{$item->table_amount}}">
                    <div class="card text-center bg-success">
                        <div class="card-body ">
                            <h5 class="card-title title--bill  text-light">{{$item->table_name}}</h5>
                        </div>
                        <div class="card-footer text-muted text-bill ">
                            <h3 class="  text-light">{{$item->table_amount}}</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        @else

        @endif

        @endforeach

    </div>


</div>
@endsection
