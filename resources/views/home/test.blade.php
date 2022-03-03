<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>
        <h1>orders</h1>

        <ul>

           {{----
            user has meny orders


            order belongs to one user
        --}}

        @foreach ($orders as $order)
            <li>{{$order->name}}</li>

            <li>
                @foreach ($order->user->carts as $c )
                    <li>{{$c->qty}}</li>
                    <li>{{$c->product->img}}</li>
              @endforeach
        </li>
        @endforeach



      </ul>
</body>
</html>
