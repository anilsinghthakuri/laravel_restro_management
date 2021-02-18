<div class="item__images">
    <div class="row">
        <div class="col-md-12">
            <div class="top-part">
                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-grow-1 bd-highlight menu__part">
                        <a class="dashbord-button" href="/dashboard">
                            <button type="button" class="btn btn-primary font-btn-part">
                                <img src="/img/menu.png" alt="menu"> Dashbord
                            </button>

                        </a>
                        <a class="dashbord-button" href="/all-table">
                            <button type="button" class="btn btn-success btn-md">
                                <span class="span__categories">Tables</span></button>

                        </a>


                    </div>
                    <!--<div class="p-2 bd-highlight help__part"><img src="img/help.svg" alt="menu">Help</div>-->
                    <div class="p-2 bd-highlight ">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle font-btn-part"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="login__img" src="/img/user.png" alt="menu"> {{Auth::user()->name}}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/adduser">Add User</a></li>
                                <li><a class="dropdown-item" href="/logout">Log out</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="col-md-12 row-click-text">
                <div class="row ">
                    <div class="col-md-8">
                        <div class="click-form">
                            <div class="col-12 form__group ">

                                  <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label label-padding">Product Name</label>
                                    <div class="col-sm-8">
                                      <input type="text" class="form-control" id="inputPassword">
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label label-padding">Quantity</label>
                                    <div class="col-sm-8">
                                      <input type="number" class="form-control" id="inputPassword">
                                    </div>
                                  </div>
                                  <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-4 col-form-label label-padding">Price</label>
                                    <div class="col-sm-8">
                                      <input type="number" class="form-control" id="inputPassword">
                                      <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </div>

                                  </div>


                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="stok-item">
                            <div class="input-group mb-2">
                                <label for="inputPassword" class="col-sm-6 col-form-label label-part-bold">Stock Item</label>
                                <label for="inputPassword" class="col-sm-6 col-form-label ">300</label>

                            </div>
                            <div class="input-group mb-2">
                                <label for="inputPassword" class="col-sm-6 col-form-label label-part-bold">Stock Item</label>
                                <label for="inputPassword" class="col-sm-6 col-form-label ">300</label>

                            </div>
                            <div class="input-group mb-2">
                                <label for="inputPassword" class="col-sm-6 col-form-label label-part-bold">Stock Item</label>
                                <label for="inputPassword" class="col-sm-6 col-form-label ">300</label>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
            </div>



</div>

