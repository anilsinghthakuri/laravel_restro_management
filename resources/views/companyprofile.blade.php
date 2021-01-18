@extends('layouts.master')

@section('components')


<div class="col-md-9 mt-3">
    <div class="row">
        <div class="col-md-12">
            <h2 class="add__table__title mb-4 mt-4">Company Profile</h2>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="company__profile">

                <form action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                <input type="text" class="form-control"  name="companyname" id="" placeholder="Company Name" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="companyaddress" id="" placeholder="Company Address" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                <input type="number" class="form-control" name="companyNumber" id="" placeholder="Company Number" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" name="comapnyimage" id="" for="inputGroupFile02">Upload</label>
                              </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="companycurrency" id="" placeholder="Currency" aria-label="Username" aria-describedby="basic-addon1">
                              </div>
                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary">submit</button>

                </form>

            </div>
        </div>

    </div>

</div>

@endsection
