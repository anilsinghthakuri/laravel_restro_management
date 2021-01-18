@extends('layouts.master')

@section('components')
<div class="col-md-9 mt-3 ">

    <div class="row">
        <div class="col-md-12">
            <div class="top-part">
                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-grow-1 bd-highlight menu__part"><img src="img/menu.png" alt="menu"></div>

                    <div class="p-2 bd-highlight login__part"><img class="login__img" src="img/user.png"
                            alt="menu">Login</div>
                </div>
            </div>
        </div>

    </div>
    <div class="row ">
        <div class="col-md-12 pt-2">
            <div class="add__categories_bottom">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add User
                </button>

            </div>

        </div>
    </div>
    <div class="row  mt-3">
        <div class="col-md-12">
            <div class="add__user__section">
                <div class="login__contain">
                    <h4 class="add__user__title mb-3">you can add user here</h4>
                    <form method="POST" action="/login" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Text</span>
                            <input type="text" class="form-control" placeholder="Name" name="name" aria-label="YourName"
                                aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="email" class="form-control" placeholder="Email" name="email"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>


                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">**</span>
                            <input type="password" class="form-control" placeholder="Password" name="password"
                                aria-describedby="basic-addon1">
                        </div>

                        <button type="submit" value="Login" class="btn btn-primary">Submit</button>
                    </form>

                </div>

            </div>
        </div>

    </div>

</div>
@endsection

