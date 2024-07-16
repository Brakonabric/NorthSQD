<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <title>Cart</title>
<body>
    @include('templates/navbar')
    
    <div class="order-info">
        <h3>Order Info</h2>
        @if($order['cart'])
        @php
            $subtotal=0 ;
            $quantity=0 ;
            $surname=null;
            $name=null;
            $email=null;
            if($order['user']){
                $email=$order['user']->email;
            }
        @endphp
        @foreach ($order['cart'] as $item)
            @php
            $quantity+=$item['quantity'];
            $subtotal+= $item['price'] * $item['quantity'] ;
            @endphp
        @endforeach
        <p>€{{$subtotal+1.99}}</p>
        <p>Show products({{$quantity}})</p>
    </div>
    <div>
        <form action="POST" id ='orderform'>
            <h2>Delivery</h1>
            <label for="pacomat" class="bold">Select Pacomat Type</label>
            <div class="deliverySelect"><div>
            <input type="hidden" name="pacomat" value="omniva">
            <label for="terminal" class="bold">Terminal</label>
            <select name="terminal" id="terminal" form="orderform">
                <option value="terminal 1">terminal 1</option>
                <option value="terminal 2">terminal 2</option>
                <option value="terminal 3">terminal 3</option>
                <option value="Uriekstes iela 2A">Uriekstes iela 2A</option>
            </select>
            <h2>Contacts</h1>
            <label for="name">First Name*</label>
            @if($order['user'])
            @if($order['user']->name)
            @php
            $name=$order['user']->name
            @endphp
            @endif
            @if($order['user']->surname)
            @php
            $surname=$order['user']->surname
            @endphp
            @endif
            @endif
            <input type="text" name="name" value={{$name}}></input>
            <label for="surname">Last Name*</label>
            <input type="text" name ="surname" value={{$surname}}></input>
            <label for="email">Your e-mail</label>
            <input type="text" name="email" value={{$email}}></input>
            <label for="phone">Phone Number *</label>
            <input type="text" name="phone"></input>
            <h2>Payment</h1>
            <label for payment>Select Payment Method</label>
            <div class="payment-methods">
                <img src="" alt="visa" onclick="changePayment('visa')"></img>
                <img src="" alt="mastercard" onclick="changePayment('mastercard')"></img>
                <img src="" alt="gpay" onclick="changePayment('gpay')"></img>
                <img src="" alt="paypal" onclick="changePayment('paypal')"></img>
            </div>
            <input type="hidden" name="payment" id="payment" value="visa">
            <div class="box-checkbox">
            <input type = "checkbox" class ="checkbox"></input>
            <p>Accept the terms</p>
            </div>
            <div class="box-checkbox">
            <input type = "checkbox" class ="checkbox"></input>
            <p>Accept the privacy policy</p>
            </div>
            <input class ="submit" type="submit" value="Order" class=""></input>
        </form>
    </div>
    @else
    <p>Cart is empty</p>
    @endif
    <hr>
    @include('templates/footer')
    <script>
        function changePayment(name){
            const elem = document.getElementById("payment");
            elem.value = name;
        }
        </script>
         <script>
            function changePacomat(name){
                const elem = document.getElementById("pacomat");
                elem.value = name;
            }
            </script>
</body>
</html>
