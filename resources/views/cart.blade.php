<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <title>Cart</title>

<body>
    @include('templates/navbar')
    <div class="cart_items">
        <h1>Your Cart</h1>
        @php
        $subtotal=0;
        @endphp
        @if ($cart)
        @foreach ($cart as $item)
            <div class="item_box">
                <img src="{{ asset($item['imagePath']) }}" alt="">
                <div class="item_desc">
                    <p class="item_title">{{ $item['name'] }}</p>
                    @if($item['size'])
                    <p class="item_size">Size {{$item['size']}}</p>
                    @else
                    <p class="item_size"></p>
                    @endif
                    <p class="item_cost">€{{ $item['price'] * $item['quantity'] }}</p>
                </div>
                <div class="item_quantity">
                    <a href="{{ route('removeFromCart', $item) }}"><img onClick="plus()" src="{{ asset('svg/minus.svg') }}" alt=""></a>
                    <div class="item_number">
                        <p class = "quantity">{{$item['quantity']}}</p>
                    </div>
                    <a href="{{ route('addToCart', $item) }}"><img src="{{ asset('svg/plus.svg') }}" alt=""></a>
                </div>
            </div>
            @php
            $subtotal+= $item['price'] * $item['quantity'] ;
            @endphp
        @endforeach
        @endif
    </div>
    <div class="totalCost">
        <div class="totalCostBox">
        <p>Subtotal</p>
        <p class="costNumber">€{{$subtotal}}</p>
        <hr>
        </div>
        <div class="totalCostBox">
        <p>Shipping</p>
        <p class="costNumber">From €1.99</p>
        <hr>
        </div>
        <div class="totalCostBox">
        <p class ="total">Total</p>
        <p class ="totalNumber" >€{{$subtotal+1.99}}</p>
        <hr>
        </div>
        <button class="submit">Continue</button>
    </div>
</body>
</html>
