<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <title>Checkout</title>
</head>
<body>
@include('templates/navbar')

<div class="checkout">
    <div class="order-info">
        <h2>Order Info</h2>
        @if ($order['cart'])
            @php
                $subtotal = 0;
                $quantity = 0;
                $surname = null;
                $name = null;
                $email = null;
                if ($order['user']) {
                    $email = $order['user']->email;
                    $surname = $order['user']->surname;
                    $name = $order['user']-> name;
                }
            @endphp
            @foreach ($order['cart'] as $item)
                @php
                    $quantity += $item['quantity'];
                    $subtotal += $item['price'] * $item['quantity'];
                @endphp
            @endforeach
            <p>€{{ $subtotal }}</p>
            <p><a href={{ route('cart') }}>Show products({{ $quantity }})</a></p>
        @else
            <p>Cart is empty</p>
        @endif
    </div>

    <div id="orderformbox">
        <form method="POST" id='orderform' action="{{ route('checkout') }}">
            @csrf
            <input type="hidden" name="cost" id="cost" value={{$subtotal}}>

            <div class="orderItem">
                <h2>Delivery</h2>
                <label for="pacomat" class="bold">Select Pacomat Type</label>
                <div class="shipping-options">
                    <input type="radio" id="omniva" name="pacomat" value="omniva">
                    <label for="omniva" class="shipping-option">
                        <p class="caption-text">Omniva - €1.99</p>
                    </label>

                    <input type="radio" id="dpd" name="pacomat" value="dpd">
                    <label for="dpd" class="shipping-option">
                        <p class="caption-text">DPD - €1.99</p>
                    </label>

                    <input type="radio" id="latvijasPasts" name="pacomat" value="latvijasPasts">
                    <label for="latvijasPasts" class="shipping-option">
                        <p class="caption-text">Latvijas Pasts - €2.99</p>
                    </label>
                </div>
            </div>

            <div class="orderItem">
                <label for="terminal" class="bold">Terminal</label>
                <select name="terminal" id="terminal">
                    <option value="0001 Cemetery Lane, USA">0001 Cemetery Lane, USA</option>
                    <option value="742 Evergreen Terrace, Springfield">742 Evergreen Terrace, Springfield</option>
                    <option value="698 Sycamore Road, San Pueblo, CA">698 Sycamore Road, San Pueblo, CA</option>
                    <option value="Uriekstes iela 2A">Uriekstes iela 2A</option>
                </select>
            </div>

            <div class="orderItem">
                <h2>Contacts</h2>
                <label for="name">First Name*</label>
                <input required type="text" name="name" value="{{ $name }}">

                <label for="surname">Last Name*</label>
                <input required type="text" name="surname" value="{{ $surname }}">

                <label for="email">Your e-mail</label>
                <input type="email" name="email" value="{{ $email }}">

                <label for="phone">Phone Number *</label>
                <div class="phone-container">
                    <select name="country" id="country" onchange="updatePhonePrefix()">
                        <option value="+371">Latvia (+371)</option>
                        <option value="+372">Estonia (+372)</option>
                        <option value="+370">Lithuania (+370)</option>
                    </select>
                    <input required class="phone" type="text" name="phone" maxlength="8" placeholder="Enter 8 digits">
                </div>
            </div>

            <div class="orderItem">
                <h2>Payment</h2>
                <label class="bold">Select Payment Method</label>
                <div class="payment-options">
                    <input type="radio" id="visa" name="payment" value="visa">
                    <label for="visa" class="payment-option">
                        <p>Visa</p>
                    </label>

                    <input type="radio" id="mastercard" name="payment" value="mastercard">
                    <label for="mastercard" class="payment-option">
                        <p>MasterCard</p>
                    </label>

                    <input type="radio" id="gpay" name="payment" value="gpay">
                    <label for="gpay" class="payment-option">
                        <p>Google Pay</p>
                    </label>

                    <input type="radio" id="paypal" name="payment" value="paypal">
                    <label for="paypal" class="payment-option">
                        <p>PayPal</p>
                    </label>
                </div>
            </div>

            <div class="box-checkbox">
                <input required type="checkbox" name="termsAccept" id="termsAccept">
                <label for="termsAccept">Accept the <a href="#">terms</a></label>
            </div>

            <div class="box-checkbox">
                <input required type="checkbox" name="policyAccept" id="policyAccept">
                <label for="policyAccept">Accept the <a href="#">privacy policy</a></label>
            </div>

            <input class="submit" type="submit" value="Order">
        </form>
    </div>
</div>

@include('templates/footer')

    <script>
        function updatePhonePrefix() {
            const countrySelect = document.getElementById('country');
            const phoneInput = document.querySelector('.phone');
            phoneInput.value = '';
            phoneInput.placeholder = countrySelect.value + ' - Enter 8 digits';
        }
    </script>
</body>
</html>
