{{-- <h1>hello</h1> --}}
<div class="item__right">
    <div class="row row__margin">
        <div class="col-sm-4"><select class="form-select" aria-label="Default select example">
            <option selected>Category</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select></div>
        <div class="col-sm-4"><select class="form-select" aria-label="Default select example">
            <option selected>Category1</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select></div>
          <div class="col-sm-4"><select wire:model= 'table' class="form-select" aria-label="Default select example">
            <option selected>Choose Table</option>
            @foreach ($tableid as $table)
            <option value={{$loop->iteration}}>Table NO:{{$loop->iteration}}</option>
            @endforeach
          </select></div>
    </div>
    <div class="row row__margin">
        <div class="col-sm-12"><form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class=" btn-search transition__btn" type="submit">Search</button>
          </form></div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="head" scope="col">#</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Sub Total</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order as $orders)
                    <tr>
                        <th class="head" scope="row">1</th>
                        <td>{{$orders->product->product_name}}</td>
                        <td class="price" >{{$orders->product->product_price}}</td>
                        <td class="math__add__minus"><div class="add__minus"><button class="minus" wire:click = 'dec({{$orders->order_id}})'>-</button>{{$orders->order_quantity}}<button class="add" wire:click = 'inc({{$orders->order_id}})'>+</button></div></td>
                        <td class="total__price">{{$orders->order_subprice}}</td>
                        <td class="btn__cancel"><button class="cancel"  wire:click = 'deleteorder({{$orders->order_id}})' >x</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> <!--table row end  -->
    <div class="row">
        <div class="col-sm-4">
            <div class="d-flex bd-highlight  d-flex--part ">
                <div class="mr-auto p-2 bd-highlight "> Items</div>
                <div class="p-2 bd-highlight">12(20)</div>

              </div>
        </div>
        <div class="col-sm-4">
            <div class="d-flex bd-highlight  d-flex--part ">
                <div class="mr-auto p-2 bd-highlight">Total</div>
                <div class="p-2 bd-highlight">{{$totalprice}}</div>

              </div>
        </div>
        <div class="col-sm-4">
            <div class="d-flex bd-highlight  d-flex--part  ">
                <div class="mr-auto p-2 bd-highlight">Discount</div>
                <div class="p-2 bd-highlight">0.00</div>

              </div>
        </div>
        <div class="col-sm-4">
            <div class="d-flex bd-highlight  d-flex--part ">
                <div class="mr-auto p-2 bd-highlight">Coupon</div>
                <div class="p-2 bd-highlight">0.00</div>

              </div>
        </div>
        <div class="col-sm-4">
            <div class="d-flex bd-highlight  d-flex--part ">
                <div class="mr-auto p-2 bd-highlight">Tax</div>
                <div class="p-2 bd-highlight">0.00</div>

              </div>
        </div>
        <div class="col-sm-4">
            <div class="d-flex bd-highlight  d-flex--part ">
                <div class="mr-auto p-2 bd-highlight">Shipping</div>
                <div class="p-2 bd-highlight">0.00</div>

              </div>
        </div>
{{-- this is new feature --}}
    </div> <!--extra featur  -->
    <div class="row">
        <div class="col-sm-12">
            <div class="total__chanrge">
                <h1>Grand Total {{$grandprice}}</h1>
            </div>
        </div>
    </div>
</div>
