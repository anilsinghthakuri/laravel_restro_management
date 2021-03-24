<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pos Billing System</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="/css/categories.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="{{asset('font/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('nepali_date/nepali-date-picker.min.css')}}">


    @livewireStyles

</head>

<body>
    <section class="add__categories">




        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <a class="navbar-brand px-3" href="/dashboard">Dashbord</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav  navbar-nav--flex m-auto my-2  my-lg-0 navbar-nav-scroll">
                    <li class="nav-item padding-left">
                        <a class="nav-link  " aria-current="active" href="/pos"><i class="fa fa-credit-card"></i>
                            pos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="tableId" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"> <i class="fas fa-table"></i>
                            Table
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="tableId">
                            <li><a class="dropdown-item" href="/table"> Add Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productID" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-archive"></i>
                            Product
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productID">

                            <li>
                                <a class="dropdown-item" href="/add-product">Add Product</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/product">Product List</a>
                            </li>


                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " aria-current="active" href="/credits"> <i class="fa fa-hospital"></i>
                            Collection</a>
                    </li>

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productID" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-hospital"></i> Collection
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productID">


                            <li>
                                <a class="dropdown-item" href="/credits">Collection</a>
                            </li>


                        </ul>

                    </li> --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productID" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-users"></i> People
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productID">

                            {{-- <li>
                                <a class="dropdown-item" href="#">Waiters</a>
                            </li> --}}
                            <li>
                                <a class="dropdown-item" href="/customer">Customers</a>
                            </li>
                            {{-- <li>
                                <a class="dropdown-item" href="#">Suppliers</a>
                            </li> --}}

                        </ul>

                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="saleID" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false"><i class="fa fa-ticket-alt"></i>
                            Sale
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="saleID">


                            <li>
                                <a class="dropdown-item" href="/pos">Pos</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Add Sale</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Sales Return</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/total-sale">Total Sale</a>
                            </li>


                            {{-- <li>
                                <a class="dropdown-item" href="/credits">Credit Collection </a>
                            </li> --}}
                        </ul>

                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="expanseID" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-dollar-sign"></i>
                            Expense
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="expanseID">

                            <li>
                                <a class="dropdown-item" href="/expense-add">Add Expenses</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/expense-list">Expenses List</a>
                            </li>

                        </ul>

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesId" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="far fa-bookmark"></i> Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoriesId">

                            <li>
                                <a class="dropdown-item" href="/categories"> Product</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/expense-category">Expenses
                                </a>
                            </li>


                        </ul>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link  " aria-current="active" href="#"><i class="fa fa-cogs"></i> Setting</a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="saleID" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-chart-line"></i> Report
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="saleID">

                            <li>
                                <a class="dropdown-item" href="/total-sale">Total Sale</a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="/cash-sale">Cash Sale</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/credit-sale">Credit Sale</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/product-wise-sale">Product Wise Sale</a>
                            </li>

                        </ul>

                    </li>




                </ul>
                <ul class="d-flex flex-row justify-content-between ml-auto">
                    <li class="nav-item">
                        <p class=" icon-height  "><img src="img/user1.png" alt=""> {{Auth::user()->name}}</p>

                    </li>
                    {{-- <li class="nav-item">
                        <a class=" icon-height  " aria-current="active" href="#"><img src="img/nepal.png" alt=""> </a>
                    </li> --}}
                    <li class="nav-item">
                        <a class=" icon-logout  " aria-current="active" href="/logout"><i
                                class="fas fa-sign-out-alt"></i> </a>
                    </li>

                </ul>
            </div>

        </nav>

        <div class="container">
            <div class="col-md-12 body-class ">

                <div class="row">

                    {{-- <div class="col-md-3 sidebar__col__div px-0">

                        @include('layouts.nav')

                    </div> --}}

                    @yield('components')
                </div>
            </div>
        </div>

    </section>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>

    <script src="{{asset('nepali_date/script.js')}}"></script>
    <script src="{{asset('nepali_date/nepali-date-picker.min.js')}}"></script>

    <script src="/js/script.js"></script>
    @livewireScripts


    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
