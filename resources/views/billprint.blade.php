<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bill.css">
    <title>Document</title>
</head>
<body>
    <div class="bill__section">
        <div class="bill__section__inner">
            <div class="bill__title text-center mb-2"><span>Anil Store</span></div>
            <div class="bill__title  text-center mb-2"><span>Dhangadhi -9 Kailali  </span></div>
            <div class="bill__title  text-center mb-2"><span>Tel. 12334567</span></div>
            <div class="bill__middle__contain">
                <div class="d-flex justify-content-evenly">
                    <div class="p-2 bd-highlight">tavalo</div>
                    <div class="p-2 bd-highlight">22</div>
                    <div class="p-2 bd-highlight">coporiti</div>
                    <div class="p-2 bd-highlight">10</div>
                  </div>
            </div>
            <div class="bill__middle__inner text-center">
                <div class="p-2 bd-highlight"><span>MER 29 Gin 2016 21:00</span></div>

            </div>

            <div class="menu__item">
                <table class="table table-borderless table-responsive ">
                    <thead>
                      <tr>

                        <th scope="col">S.N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Sub Price</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderdata as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->product->product_name}}</td>
                            <td>{{$item->order_quantity}}</td>
                            <td class="quantity">{{$item->order_subprice}}</td>
                          </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="bill__footer__contain mb-2">

                <div class="d-flex bd-highlight mb-3">
                    <div class="me-auto p-2 bd-highlight total__sum"></div>

                    <div class="p-2 bd-highlight "></div>
                    <div class="p-2 bd-highlight total__sum">Total</div>
                    <div class="p-2 bd-highlight "></div>
                    <div class="p-2 bd-highlight total__sum">{{$total_price}}</div>
                </div>
            </div>
            <div class="bill__title text-center mb-2"><span>Thank You</span></div>
            <div class="bill__title  text-center mb-2"><span>Visit again  </span></div>
        </div>

    </div>
</body>
</html>
