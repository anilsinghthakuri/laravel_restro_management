@extends('layouts.master')

@section('components')

<div class="col-md-9 mt-3">
    <div class="row">
        <div class="col-md-12">
            <h2 class="add__table__title mb-3 mt-3">Add Tables</h2>
        </div>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="add__table__list">
                <form action="/table" method="POST">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Add</span>
                        <input type="text" class="form-control" placeholder="Table name" name="tablename" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="table__list__part ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Table Name</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($tablename as $item)
                        <tr>
                            <th scope="row">{{$item->table_id}}</th>
                            <td>{{$item->table_name}}</td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>

@endsection
