<div>
    <div class="row">

        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-hover table-part ">
                    <thead class="table-head">
                        <tr>
                            <th class="head" scope="col">S.N</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Sub Total</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div>
                            @if (session()->has('message'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>
                            @endif
                        </div>
                        @foreach ($order as $orders)
                        <tr>
                            <th class="head" scope="row">{{$loop->iteration}}</th>
                            <td>{{$orders->product->product_name}}</td>
                            <td class="price">{{$orders->product->product_price}}</td>
                            <td class="math__add__minus">
                                <div class="add__minus"><button class="minus" value="PLAY" onclick="play()"
                                        wire:click='dec({{$orders->order_id}})'>-</button>{{$orders->order_quantity}}<button
                                        class="add" value="PLAY" onclick="play()"
                                        wire:click='inc({{$orders->order_id}})'>+</button></div>
                            </td>
                            <td class="total__price">{{$orders->order_subprice}}</td>

                            <td class="btn__cancel">
                                {{-- <button class="cancel" >x</button> --}}

                                <button type="button" class="cancel" data-bs-toggle="dropdown" aria-expanded="false">
                                    x
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><button class="btn btn-danger btn-sm"
                                                value="PLAY" onclick="play()"
                                                wire:click='deleteorder({{$orders->order_id}})'>Conform
                                                delete</button></a></li>
                                    {{-- <li><a class="dropdown-item" href="#"><button class="btn btn-info btn-sm">Cancel</button></a></li> --}}

                                </ul>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!--table row end  -->
    <div class="footer__part__absolute">
        <div class="row">

        </div>
        <!--extra featur  -->
        <div class="row">
            <div class="col-sm-12">
                <div class="total__chanrge">
                    <h1>Grand Total {{$grandprice}}</h1>
                </div>
            </div>
        </div>
    </div>


</div>
