<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NorthSQD</title>
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
@include('templates/navbar')
<div class="emptyModulePlace">EMPTY</div>
@include('templates.plp-hor-slider')
@include('templates.pre-collection')
@include('templates.contacts')
@include('templates/footer')
</body>
</html>
