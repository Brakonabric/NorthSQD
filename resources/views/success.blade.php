<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="error-box">
        @if (isset($order))
            <div class="error-container">
                <div class="error-col">
                    <h1 class="bigtext">Success</h1>
                    <h2>Order created successfully!</h2>
                </div>
                <div class="orderData">
                <p>Costumer name: {{ $order['checkoutData']['name'] }} {{ $order['checkoutData']['surname'] }}</p>
                <p>Delivery by: {{$order['checkoutData']['pacomat']}}</p>
                <p>Delivery to terminal: {{$order['checkoutData']['terminal']}}</p>
                @if (isset($order['email']))
                <p>Customer email: {{$order['email']}}</p>
                @endif
                <p>Customer phone: {{$order['checkoutData']['phone']}}</p>
                <p>Bought items:</p>
                <ul>
                    @foreach ($order['cart'] as $cart)
                        <li>{{$cart['name']}},{{$cart['color']}},{{$cart['size']}} x {{$cart['quantity']}}={{$cart['quantity']*$cart['price']}}
                    @endforeach
                </ul>
                <p>Delivery cost: {{$order['checkoutData']['pacomat']=='latvijasPasts' ? 2.99 : 1.99}}</p>
                <p>Total: {{((double)$order['checkoutData']['cost']+((double)$order['checkoutData']['pacomat']=='latvijasPasts' ? 2.99 : 1.99))}}</p>
                <p>Payed with: {{$order['checkoutData']['payment']}}</p>
            </div>
                <div class="error-btn">
                    <form action={{ route('home') }}>
                        <button>Go Home</button>
                    </form>
                </div>
            </div>
        @endif
    </div>

</body>

</html>
