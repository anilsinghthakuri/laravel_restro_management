<div class="container-fluid">

    <div class="col-md-12">

        <div class="row">

            <div class="col-md-3 px-0">

                <nav class="side-menu" id="scrool-bar">

                    <h1 class="side-bar-title">
                        <ul>
                            <li class="d-flex-div"><span>
                                    <ion-icon name="speedometer-outline"></ion-icon>
                                </span> <a class="page-title" href='#message'> Dashbord</a></li>
                        </ul>
                    </h1>
                    <ul>

                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Add Product</a></li>
                        <li class='sub-menu '> <a href='#settings'> <span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Settings<div class='fa fa-caret-down right'></div></a>
                            <ul class="hide">
                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i>
                                        </span> Account</a></li>
                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i>
                                        </span> Profile</a></li>
                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i>
                                        </span> Secruity &amp; Privacy</a></li>
                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i>
                                        </span> Password</a></li>
                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i>
                                        </span> Notification</a></li>
                            </ul>
                        </li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Help<div class='fa fa-caret-down right'></div></a>
                            <ul>
                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i>
                                        </span> FAQ's</a></li>
                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i>
                                        </span> Submit a Ticket</a></li>
                                <li><a href='#settings'> <span><i class="fa fa-circle-o" aria-hidden="true"></i>
                                        </span> Network Status</a></li>
                            </ul>
                        </li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>

                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>
                        <li class='sub-menu '> <a href='#message'><span>
                                    <ion-icon name="briefcase-outline"></ion-icon>
                                </span> Messages</a></li>


                    </ul>
                </nav>

            </div>

            <div class="col-md-9 mt-3 ">

                <div class="row">
                    <div class="col-md-12">
                        <div class="top-part">
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-grow-1 bd-highlight menu__part"><img src="img/menu.png"
                                        alt="menu"></div>

                                <div class="p-2 bd-highlight login__part"><img class="login__img"
                                        src="img/user.png" alt="menu">Login</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row ">
                    <div class="col-md-12 pt-2">
                        <div class="add__categories_bottom">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Add Categories
                            </button>

                            <!-- Modal -->
                            <div  class="modal fade" wire:ignore.self id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Categories</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form class="m-2"  wire:submit.prevent="addcategory" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-sm-6">

                                                        <div class="mb-3">
                                                            <label for="name" class="form-label"> Name *</label>
                                                            <input type="text" id="name" wire:model = 'category_name' class="form-control"
                                                                placeholder="Name">
                                                                @error('category_name') <span class="text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div>
                                                            <label for="name" class="form-label"> Images
                                                                *</label>
                                                        </div>
                                                        <div class="input-group  ">
                                                            <input type="file" class="form-control"
                                                                id="inputGroupFile02" wire:model = 'category_image'>
                                                        </div>
                                                        @error('category_image') <span class="text-danger">{{ $message }}</span> @enderror

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="submit p-3">
                                                    <button type="submit"
                                                        class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row  mt-3">
                    <div class="col-md-12">
                        <div class="categories-tables">

                            <table class="table table-bordered bg-light table-responsiv">

                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($category as $item)
                                    <tr>
                                        <th scope="row">{{$item->category_id}}</th>
                                        <td class="image-categories"><img class="img__product"
                                                src="asset(storage/{{$item->category_image}})" class="img-fluid" alt="..."></td>

                                        <td>{{$item->category_name}}</td>
                                        <td class="action-table">
                                            <div class=" dropstart">
                                                <button type="button" class="btn btn-success dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" wire:click = 'deletecategory({{$item->category_id}})'>Delete</a></li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
