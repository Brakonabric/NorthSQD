<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NorthSQD</title>
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
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
