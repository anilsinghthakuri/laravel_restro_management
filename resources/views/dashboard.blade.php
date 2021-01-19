@extends('layouts.master')

@section('components')
<div class="col-md-9 mt-3">
    <div class="row">
        <div class="col-md-12">
            <h2 class="add__table__title mb-4 mt-4">Welcome Admin</h2>
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
                        <h5 class="card-title title--bill">Reveneu</h5>

                    </div>
                    <div class="card-footer text-muted text-bill">
                        44,000
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
                        <h5 class="card-title title--bill">Sale Return</h5>

                    </div>
                    <div class="card-footer text-muted text-bill">
                        20,000
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
                        <h5 class="card-title title--bill">Purches Return</h5>

                    </div>
                    <div class="card-footer text-muted text-bill">
                        20,000
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
                       40,000
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
