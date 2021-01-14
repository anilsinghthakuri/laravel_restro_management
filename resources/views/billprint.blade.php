<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>billprint</title>
</head>
<body>
    <h1>Doftsoft hotel</h1>
    <table>
        <tr>
            <td>name</td>
            <td>quantity</td>
            <td>subprice</td>
        </tr>
        @foreach ($orderdata as $order)
        <tr>
            <td>{{$order->product->product_name}}</td>
            <td>{{$order->order_quantity}}</td>
            <td>{{$order->order_subprice}}</td>
        </tr>
        @endforeach
    </table>
    <h3>{{$grandprice}}</h3>
</body>
</html>

<script>
    window.print();
</script>
