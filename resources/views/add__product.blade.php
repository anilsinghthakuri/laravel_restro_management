
        <!DOCTYPE html>
        <html lang="en">
        <head>

            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <link rel="stylesheet" href="css/categories.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">


        </head>
        <body>
            <section class="add__categories">
                <div class="container-fluid">
                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-3 px-0">

                                <nav class="side-menu" id="scrool-bar">

                                    <h1 class="side-bar-title"><ul>  <li class="d-flex-div"><span><ion-icon name="speedometer-outline"></ion-icon></span> <a class="page-title" href='#message'> Dashbord</a></li></ul></h1>
                                    <ul>

                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Add Product</a></li>
                                        <li class='sub-menu '> <a href='#settings'> <span><ion-icon name="briefcase-outline"></ion-icon></span>    Settings<div class='fa fa-caret-down right'></div></a>
                                            <ul class="hide">
                                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i> </span> Account</a></li>
                                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i> </span> Profile</a></li>
                                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i> </span> Secruity &amp; Privacy</a></li>
                                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i> </span> Password</a></li>
                                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i> </span> Notification</a></li>
                                            </ul>
                                        </li>
                                        <li class='sub-menu '>  <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Help<div class='fa fa-caret-down right'></div></a>
                                            <ul>
                                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i> </span> FAQ's</a></li>
                                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i> </span> Submit a Ticket</a></li>
                                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i> </span> Network Status</a></li>
                                            </ul>
                                        </li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>

                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>
                                        <li class='sub-menu '> <a href='#message'><span><ion-icon name="briefcase-outline"></ion-icon></span>  Messages</a></li>


                                    </ul>
                                </nav>

                            </div>

                            <div class="col-md-9 mt-3 ">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="top-part">
                                            <div class="d-flex bd-highlight">
                                                <div class="p-2 flex-grow-1 bd-highlight menu__part"><img src="img/menu.png" alt="menu"></div>

                                                <div class="p-2 bd-highlight login__part"><img class="login__img" src="img/user.png" alt="menu">Login</div>
                                                </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="col-md-12 pt-2">
                                        <div class="add__categories_bottom">
                                            <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" >
                                                Add Product
                                                </button>


                                        </div>

                                    </div>
                                </div>
                                @if (session()->has('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                                </div>
                                @endif
                                <form class="add__product__form" action="/product" method="POST" enctype="multipart/form-data">
                                    <div class="row  mt-3">
                                        @csrf
                                        <div class="col-md-4">

                                                <label for="exampleInputEmail1" class="form-label">Category Name</label>

                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="inputGroupSelect01">type</label>
                                                <select class="form-select" name="category_id" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                    @foreach ($categorylist as $item)
                                                    <option value={{$item->category_id}}>{{$item->category_name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                                <label for="exampleInputEmail1" class="form-label">Product Name</label>


                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="name">Name</label>
                                                <input type="text" name="productname" >
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                                <label for="exampleInputEmail1" class="form-label">Product Price</label>


                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="productprice">Price</label>
                                                <input type="number" name="productprice" id="" >
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                            <label for="exampleInputEmail1" class="form-label">Product Image</label>


                                            <div class="input-group mb-3">
                                                <label class="input-group-text" for="file">Image</label>
                                                <input type="file" name="file">
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary" >Submit</button>
                                </form>
                                <div class="row pagination__right pagination__add_product">
                                    <div class="d-flex flex-row-reverse">
                                        <nav aria-label="Page ">
                                            <ul class="pagination">
                                              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                                              <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                          </nav>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>


            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

            <script src="js/script.js"></script>

            <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        </body>
    </html>
