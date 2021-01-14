<div class="item__images">
    <div class="row">
        <div class="col-md-12">
            <div class="top-part">
                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-grow-1 bd-highlight menu__part"><img src="img/menu.png" alt="menu"></div>
                    <!--<div class="p-2 bd-highlight help__part"><img src="img/help.svg" alt="menu">Help</div>-->
                    <div class="p-2 bd-highlight login__part"><img class="login__img" src="img/user.png" alt="menu">Login</div>
                  </div>
            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-sm-4">
            <div class="btn__full_width"><button type="button" class="btn btn-success btn-md">Category</button></div>

        </div>
        <div class="col-sm-4">
            <div class="btn__full_width"><button type="button" class="btn btn-info btn-md">Brand</button></div>
        </div>
        <div class="col-sm-4">
            <div class="btn__full_width"><button type="button" class="btn btn-danger btn-md">Featured</button></div>
        </div>

    </div>
    <div class="all__product">

        <div class="row row-cols-5">
            @foreach ($product as $products)
            <div class="col px-0" wire:click = 'addproduct({{$products->product_id}})'>
                <div class="item__items item__height item__hover" >
                    <div class="image__inner">
                        <img src="img/{{$products->product_image}}" class="card-img-top" alt="...">
                    </div>

                    <div class="card-detail text-center">
                        <h5 class="card-title"> {{$products->product_name}}</h5>
                        <p class="card-text">RS:{{$products->product_price}}</p>
                        <p class="card-text">{{$products->order->order_quantity}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
    <div class="row pagination__right">
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

