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
        <div class="error-container">
            <div class="error-col">
                <h1 class="bigtext">Orders</h1>
            </div>
            <table style="width:100%">
                <tr>
                    <th>Delivery By</th>
                    <th>Terminal</th>
                    <th>Customer name</th>
                    <th>Customer surname</th>
                    <th>Customer email</th>
                    <th>Customer phone</th>
                    <th>Customer payment way</th>
                    <th>Cost</th>
                </tr>
                @foreach ($orders as $order)
                    <tr>
                        <th>{{$order['delivery']}}</th>
                        <th>{{$order['terminal']}}</th>
                        <th>{{$order['name']}}</th>
                        <th>{{$order['surname']}}</th>
                        <th>{{$order['email']}}</th>
                        <th>{{$order['phone']}}</th>
                        <th>{{$order['payment']}}</th>
                        <th>{{$order['cost']}}</th>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

</body>

</html>