<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <title>Cart</title>

<body>
    @include('templates/navbar')
    <h1>Your Cart</h1>
    <div class="cart_items">
        @if ($cart)
        @foreach ($cart as $item)
            <div class="item_box">
                <img src="{{ asset('svg/logo.svg') }}" alt="">
                <div class="item_desc">
                    <p class="item_title">{{ $item['name'] }}</p>
                    <p class="item_size">Size</p>
                    <p class="item_cost">€{{ $item['price'] * $item['quantity'] }}</p>
                </div>
                <div class="item_quantity">
                    <a href="{{ route('removeFromCart', $item['id']) }}"><img onClick="plus()" src="{{ asset('svg/minus.svg') }}" alt=""></a>
                    <div class="item_number">
                        <p class = "quantity">{{ $item['quantity'] }}</p>
                    </div>
                    <a href="{{ route('addToCart', $item['id']) }}"><img src="{{ asset('svg/plus.svg') }}" alt=""></a>
                </div>
            </div>
        @endforeach
        @endif
        <div class="TotalCost">
            <p>Subtotal</p>
            <p>Price</p>
        </div>
        <hr>
    </div>
</body>
</html>
