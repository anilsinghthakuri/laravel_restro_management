@extends('layouts.master')



@section('components')

    <div class="col-md-9 mt-3">

    <div class="row">
        <div class="col-md-12">
            <h2 class="add__table__title mb-4 mt-4">User List</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="table__list__part ">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"> Name</th>
                            <th scope="col"> Email</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Bikash</td>
                            <td>bikasbist1414@gmail.com</td>
                            <td> <a href="#"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>  </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
