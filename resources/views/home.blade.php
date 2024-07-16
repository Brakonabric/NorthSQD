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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
          rel="stylesheet">
</head>
<body>
@include('templates/navbar')
<div class="emptyModulePlace">EMPTY</div>
@include('templates.plp-hor-slider')
<div class="pre-collection">
    <div class="description">
        <h2 class="h2">Experience the Spirit of the North</h2>
        <p class="">Inspired by the breathtaking beauty of the North, our team has crafted unique collections that blend
            style, warmth, and a touch of adventure.</p>
    </div>
    <div class="link-grid-container">
        <a href="{{route('collection')}}/?collection=linass" class="link-wrap"
           style="background-image: url({{ asset('/images/Linass/Accessories_Linass_white_2.png') }})">
            <h3 class="">LINASS</h3>
        </a>
        <a href="{{route('collection')}}/?collection=rodions" class="link-wrap" style="background-image: url({{ asset('/images/Rodions/Accessories_Rodions_white_1.png') }})">
            <h3 class="">RODIONS</h3>
        </a>
        <a href="{{route('collection')}}/?collection=matiss" class="link-wrap" style="background-image: url({{ asset('/images/pepe.png') }})">
            <h3 class="">MATISS</h3>
        </a>
        <a href="{{route('collection')}}/?collection=katerina" class="link-wrap" style="background-image: url({{ asset('/images/Katerina/Hoodie_Katerina_white_2.png') }})">
            <h3 class="">KATERINA</h3>
        </a>
        <a href="{{route('collection')}}/?collection=deniss" class="link-wrap"
           style="background-image: url({{ asset('/images/Deniss/Shoes_Deniss_white_1.png') }})">
            <h3 class="">DENISS</h3>
        </a>
        <a href="{{route('sales')}}" class="link-wrap" style="background-image: url({{ asset('/images/Katerina/Hat_Katerina_black_3.png') }})">
            <h3 class="top-sales-in-coll">TOP SALES</h3>
        </a>
    </div>
</div>
@include('templates/footer')
</body>
</html>
