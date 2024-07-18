<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <title>Cart</title>

<body>
    @include('templates/navbar')
    <div class="checkout">
        <div class="order-info">
            <h3>Order Info</h2>
                @if ($order['cart'])
                    @php
                        $subtotal = 0;
                        $quantity = 0;
                        $surname = null;
                        $name = null;
                        $email = null;
                        if ($order['user']) {
                            $email = $order['user']->email;
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
        </div>
        <div id ="orderformbox">
            <form method="POST" id ='orderform' action="{{ route('checkout') }}">
                @csrf
                <input type="hidden" name="cost" id="cost" value={{$subtotal}}>
                <div class="orderItem">
                    <h2>Delivery</h1>
                        <label for="pacomat" class="bold">Select Pacomat Type</label>
                </div>
                <div class="shipping-options">
                    <div class="shipping-options-item" onclick="changePacomat('omniva')">
                        <div id="omniva" class="shipping-logo"><img src="{{ asset('svg/Omniva.svg') }}"
                                width="60" alt="Omniva" class="logo"></div>
                        <p class="caption-text">€1.99</p>
                    </div>
                    <div class="shipping-options-item" onclick="changePacomat('dpd')">
                        <div id="dpd" class="shipping-logo"><img src="{{ asset('svg/DPD.svg') }}" width="42"
                                alt="DPD" class="logo"></div>
                        <p class="caption-text">€1.99</p>
                    </div>
                    <div class="shipping-options-item" onclick="changePacomat('latvijasPasts')">
                        <div id="latvijasPasts" class="shipping-logo"><img src="{{ asset('svg/LatvijasPasts.svg') }}"
                                width="60" alt="Latvijas Pasts" class="logo"></div>
                        <p class="caption-text">€2.99</p>
                    </div>
                </div>
                <input type="hidden" name="pacomat" id="pacomat">
                <div class="orderItem">
                    <label for="terminal" class="bold">Terminal</label>
                    <select name="terminal" id="terminal" form="orderform">
                        <option value="0001 Cemetery Lane, USA">0001 Cemetery Lane, USA</option>
                        <option value="742 Evergreen Terrace, Springfield">742 Evergreen Terrace, Springfield</option>
                        <option value="698 Sycamore Road, San Pueblo, CA">698 Sycamore Road, San Pueblo, CA</option>
                        <option value="Uriekstes iela 2A">Uriekstes iela 2A</option>
                </div>
                </select>
                <div class="orderItem">
                    <h2>Contacts</h1>
                        <label for="name">First Name*</label>
                        @if ($order['user'])
                            @if ($order['user']->name)
                                @php
                                    $name = $order['user']->name;
                                @endphp
                            @endif
                            @if ($order['user']->surname)
                                @php
                                    $surname = $order['user']->surname;
                                @endphp
                            @endif
                        @endif
                        <input required type="text" name="name" value={{ $name }}></input>
                        <label for="surname">Last Name*</label>
                        <input required type="text" name ="surname" value={{ $surname }}></input>
                        <label for="email">Your e-mail</label>
                        <input type="text" name="email" value={{ $email }}></input>
                        <label for="phone">Phone Number *</label>
                        <div class = "forPhone">
                            <img src="{{ asset('svg/countryCode.png') }}">
                            <input required class="phone" type="text" name="phone"></input>
                        </div>
                </div>
                <div class="orderItem">
                    <h2>Payment</h1>
                        <label for payment>Select Payment Method</label>
                        <div class="payment-options">
                            <div class="payment-options-item" onclick="changePayment('visa')">
                                <div id="visa" class="payment-logo"><img src="{{ asset('svg/visa.svg') }}"
                                        width="60%" alt="Visa" class="logo"></div>
                            </div>
                            <div class="payment-options-item" onclick="changePayment('mastercard')">
                                <div id="mastercard" class="payment-logo"><img src="{{ asset('svg/master card.svg') }}"
                                        alt="MasterCard" class="logo"></div>
                            </div>
                            <div class="payment-options-item" onclick="changePayment('gpay')">
                                <div id="gpay" class="payment-logo"><img src="{{ asset('svg/googlePay.svg') }}"
                                        width="60%" alt="GooglePay" class="logo"></div>
                            </div>
                            <div class="payment-options-item" onclick="changePayment('paypal')">
                                <div id="paypal" class="payment-logo"><img src="{{ asset('svg/paypal.svg') }}"
                                        width="60%" alt="PayPal" class="logo"></div>
                            </div>
                        </div>
                </div>
                <input type="hidden" name="payment" id="payment">
                <div class="box-checkbox">
                    <input required type = "checkbox" name="termsAccept" class ="checkbox"></input>
                    <p>Accept the <a>terms</a></p>
                </div>
                <div class="box-checkbox">
                    <input required type = "checkbox" name="policyAccept" class ="checkbox"></input>
                    <p>Accept the <a>privacy policy</a></p>
                </div>
                <div>
                    <input class ="submit" type="submit" value="Order" class=""></input>
                </div>
            </form>
        </div>
    </div>
    </div>
@else
    <p>Cart is empty</p>
    @endif
    <hr>
    <script>
        function changePayment(name) {
            const elem = document.getElementById("payment");
            const buttonClicked = document.getElementById(name);
            const buttons = document.getElementsByClassName("payment-logo");
            for (let i = 0; i < buttons.length; i++) {
                buttons[i].style.outline = "none";
            }
            buttonClicked.style.outline = "2px solid #34A853";
            elem.value = name;
        }
    </script>
    <script>
        function changePacomat(name) {
            const elem = document.getElementById("pacomat");
            const buttonClicked = document.getElementById(name);
            const buttons = document.getElementsByClassName("shipping-logo");
            for (let i = 0; i < buttons.length; i++) {
                buttons[i].style.outline = "none";
            }
            buttonClicked.style.outline = "2px solid #34A853";
            elem.value = name;
        }
    </script>
    @include('templates/footer')
</body>

</html>
