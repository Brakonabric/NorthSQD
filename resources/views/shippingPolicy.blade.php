<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/shipping.css') }}">
    <title>Shipping Policy</title>
</head>
<body>
@include('templates/navbar')
<div class="text-block">
    <h1>Shipping Policy</h1>
    <p>At North Squad, we strive to ensure your shopping experience is seamless and convenient. We exclusively use pakomats for all our deliveries, offering you flexibility and reliability.</p>
    <h3>Shipping Options</h3>
    <div class="shipping-options">
        <div class="shipping-options-item"><div class="shipping-logo"><img src="{{ asset("svg/Omniva.svg") }}" width="60" alt="Omniva" class="logo"></div>
        <p class="caption-text">Omniva</p></div>
        <div class="shipping-options-item"><div class="shipping-logo"><img src="{{ asset("svg/DPD.svg") }}" width="42" alt="DPD" class="logo"></div>
        <p class="caption-text">DPD</p></div> 
        <div class="shipping-options-item"><div class="shipping-logo"><img src="{{ asset("svg/LatvijasPasts.svg") }}" width="60" alt="Latvijas Pasts" class="logo"></div>
        <p class="caption-text">Latvijas Pasts</p></div>
    </div>
    <h3>Processing Time</h3>
    <p>All orders are processed within 1–2 business days. Once your order is  ready, you will receive a notification with tracking information.</p>
    <h3>Delivery Time</h3>
    <ul>
        <li><b>Omniva:</b> 2–4 business days</li>
        <li><b>DPD:</b> 2–4 business days</li>
        <li><b>Latvijas Pasts:</b> 3–5 business days</li>
    </ul>
    <h3>Note</h3>
    <p>Delivery times may vary based on your location and the time of year. Please ensure you select the most convenient pakomat for your pickup.</p>
    <p>For any questions or concerns regarding your shipment, feel free to contact our customer service team. We're here to help!</p>
</div>
<hr class="solid">
@include('templates/footer')
</body>
</html> 