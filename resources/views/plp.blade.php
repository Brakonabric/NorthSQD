<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/plp.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
          rel="stylesheet">
    <title>Products</title>
</head>
<body>
@include('templates/navbar')
<div class="plp-container">
    <h1 class="plp-title">{{$title}}</h1>
    <div class="plp-header">
        <div class="filter-sort">
            <button class="filter-btn">
                <img src="{{asset("svg/filter.svg")}}" alt="filter">
            </button>
            <p>Sort/Filter</p>
        </div>
        <p class="filtered-count">{{$itemCount}} products</p>
    </div>
    <div class="dropdown-filter">
        {{--        FILTER--}}
    </div>
    <div class="plp-grid-container">
        @foreach($items as $item)
            <a href="{{ route('products')}}/{{$item->id}}" class="product-container">
                <div class="product-wrapper">
                    <div class="image-container">
                        <img class="product-image" src="{{asset($item->imagePreview)}}" alt={{ $item->name }}>
                        @if($item->discount !== null && $item->discount > 0)
                            <p class="sale-mark">SALE</p>
                        @endif
                    </div>
                    <h3 class="name">
                        {{$item->name}}
                    </h3>
                    <div class="wrap">
                        @if($item->discount !== null && $item->discount > 0)
                            @php
                                $discountedPrice = $item->price - $item->discount;
                            @endphp
                            <h4 class="new-price price">
                                €{{ number_format($discountedPrice, 2) }}
                            </h4>
                            <h5 class="old-price price">
                                €{{ $item->price }}
                            </h5>
                        @else
                            <h4 class="new-price price">
                                €{{$item->price}}
                            </h4>
                        @endif
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
{{--IMPORTANT--}}

<div class="shit">
    <div class="pages">
    </div>
</div>


<hr>
@include('templates/footer')
</body>
</html>