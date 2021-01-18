@extends('layouts.master')

@section('components')


<div class="col-md-9 mt-3">
<form action="">
    <label for="companyname">Company Name</label>
    <input type="text" name="companyname" id="">

    <label for="companyaddress">Address</label>
    <input type="text" name="companyaddress" id="">

    <label for="companyNumber">Company Number</label>
    <input type="text" name="companyNumber" id="">

    <label for="comapnyimage">Company Logo</label>
    <input type="file" name="comapnyimage" id="">

    <label for="companyname">Currency</label>
    <input type="text" name="companyname" id="">

    <button type="submit" class="btn btn-primary">submit</button>
</form>
</div>

@endsection
