<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <title>Cart</title>

<body>
    @include('templates/navbar')
    <div class="order-info">
        <h2>Order Info</h2>
        @php
            $subtotal=0 ;
        @endphp
        @foreach ($order['cart'] as $item)
            @php
            $subtotal+= $item['price'] * $item['quantity'] ;
            @endphp
        @endforeach
        <p>{{$subtotal+1.99}}</p>
    </div>
</body>
</html>
