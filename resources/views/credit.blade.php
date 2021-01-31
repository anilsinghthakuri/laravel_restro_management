@extends('layouts.master')

@section('components')

<div class="col-md-9 mt-3">
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

                <div class="list-group">


                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Name</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">Father Name</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">Mobile Number</a>

                  </div>
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Anil Singh</a>

                    <a href="#" class="list-group-item list-group-item-action ">Anil lai tha xa</a>
                    <a href="#" class="list-group-item list-group-item-action ">9812774720</a>

                  </div>


            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h4 class="add__table__title mb-4">Credit Collection</h4>
            <div class="table__list__part ">
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Table Name</th>
                            <th scope="col">Table Name</th>
                            <th scope="col">Table Name</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <th scope="row">bikash</th>
                            <td>bikash</td>
                            <td>bikash</td>
                            <td>bikash</td>



                            <td> <a href="#"><button type="button" class="btn btn-danger "
                                data-bs-toggle="modal" data-bs-target="#add_toggle"><i class="far fa-plus-square"></i></button></a>
                             <a href="#"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>  </td>

                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
 <!-- cash modal  -->
 <div class="modal fade"  id="add_toggle" data-bs-keyboard="false" tabindex="-1" aria-labelledby="cash_toggleLabel"
 aria-hidden="true">
 <div class="modal-dialog modal-md">
     <div class="modal-content">
         <div>
             @if (session()->has('message'))
                 <div class="alert alert-success">
                     {{ session('message') }}
                 </div>
             @endif
         </div>
         <div class="modal-header">
             <h5 class="modal-title" id="cash_toggleLabel">CREDIT COLLECTION</h5>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>

         <div class="modal-body ">
             <div class="container-fluid">
                 <form>
                     <div class="row">
                         <div class="col-md-12">
                            <div class="mb-3">

                                <label for="P__amount" class="form-label">Date*</label>
                                <input type="date" class="form-control" >

                            </div>

                            <div class="mb-3">

                                <label for="P__amount" class="form-label">Amount *</label>
                                <input type="number" class="form-control" >

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">

                                        <label for="P__amount" class="form-label">Discount*</label>
                                        <input type="number" class="form-control" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">

                                        <label for="P__amount" class="form-label">Fine *</label>
                                        <input type="number" class="form-control" >

                                    </div>
                                </div>
                            </div>



                         </div>
                         <div class="col-md-6 ">

                             <div class="mb-3">

                                 <label for="Payed__by" class="form-label">Payment Model*</label>
                                 <div class="check__box">
                                    <div class="form-check form-check--part">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="cash__check" checked>
                                        <label class="form-check-label" for="cash__check">
                                          Cash
                                        </label>
                                      </div>

                                      <div class="form-check form-check--part">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="checked__checked">
                                        <label class="form-check-label" for="checked__checked">
                                          Check
                                        </label>
                                      </div>
                                      <div class="form-check form-check--part">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="other__checked" >
                                        <label class="form-check-label" for="other__checked">
                                         Other
                                        </label>
                                      </div>
                                 </div>

                             </div>

                        </div>






                    </div>
                     <div class="row">
                         <div class="col-md-12 ms-auto">
                             <div class="mb-3">
                                 <label for="message-text" class="col-form-label"> Note:</label>
                                 <textarea class="form-control" id="message-text"></textarea>
                               </div>
                         </div>

                     </div>

                 </form>
             </div>
         </div>
             {{-- this is footer --}}

         <div class="modal-footer">
             <button type="submit" class="btn btn-primary">Add</button>
         </div>
     </div>
 </div>
</div>

@endsection
