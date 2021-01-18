@extends('layouts.master')

@section('components')

<div class="col-md-9 mt-3">
    <div class="row">
        <div class="col-md-12">
            <h2 class="add__table__title mb-3 mt-3">Add Tables</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="add__table__list">
                <form action="">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">Add</span>
                        <input type="text" class="form-control" placeholder="Table name" aria-label="Username"
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>

@endsection
