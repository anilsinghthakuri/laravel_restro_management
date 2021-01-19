@extends('layouts.master')

@section('components')
<div class="col-md-9 mt-3">
    <div class="row">
        <div class="col-md-12">
            <h2 class="add__table__title mb-4 mt-4">Welcome {{Auth::user()->name}}</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card__design">
                <div class="card text-center">
                    <div class="card-header">
                        <i class="fa fa-tasks fa-icon" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title title--bill">Total Revenue</h5>

                    </div>
                    <div class="card-footer text-muted text-bill">
                        RS: {{$total_revenue}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card__design">
                <div class="card text-center">
                    <div class="card-header">
                      <i class="fa fa-recycle fa-icon" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title title--bill">Week Revenue</h5>

                    </div>
                    <div class="card-footer text-muted text-bill">
                        RS: {{$week_revenue}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card__design">
                <div class="card text-center">
                    <div class="card-header">
                        <i class="fa fa-recycle fa-icon" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title title--bill">Today Revenue</h5>

                    </div>
                    <div class="card-footer text-muted text-bill">
                        RS: {{$today_revenue}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card__design">
                <div class="card text-center">
                    <div class="card-header">
                        <i class="fa fa-trophy fa-icon" aria-hidden="true"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title title--bill ">Profit</h5>

                    </div>
                    <div class="card-footer text-muted text-bill">
                        RS: {{$total_revenue}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
