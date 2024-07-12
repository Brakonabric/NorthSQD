<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/pdp.css') }}">
    <title>Products</title>
</head>
<body>
    @include('templates/navbar')

    <div class="card">
        <!-- CARD SLIDE -->
        <div class="image-container">
            <div class="card__slide">
                <img src="{{ $items['item']->imageUrl }}" alt="Product Image" class="card__image">
            </div>
        </div>
        <div class="content-container">
            <!-- CARD HEADER -->
            <header class="card__header">
                <h2 class="card__title">{{ $items['item']->name }}</h2>
                <h3 class="card__subtitle">
                    <p>{{ $items['item']->category }}</p>
                </h3>
                <p class="card__price">€ {{ $items['item']->price }}</p>
                <p class="card__discount">{{ $items['item']->discount }} </p>
            </header>


            <!-- CARD POINT -->
            <div class="card__point">
                <div class="color">
                    <ul>
                        <li id="white" class="ring"></li>
                        <li id="black" class="ring"></li>
                        <li id="blue" class="ring"></li>
                    </ul>
                </div>
                <div class="size">
                    <ul>
                        @if ($items['size'])
                        <li class="card__copy">{{ $items['size']->size }}</li>
                        @endif
                    </ul>
                </div>
            </div>
            <!-- CARD FOOTER -->
            <footer class="card__footer">
                <div class="card__actions">
                    <button class="button">
                        <a href="{{ route('addToCart', $items['item']->id) }}">toCart</a>
                    </button>
                    @if ($items['size'])
                    <p>{{ $items['size']->in_stock }}</p>
                    @endif
                </div>
                <div class="descriptions">
                    <button>Details</button>
                    <button>Shipping and returns</button>
                    <p>{{ $items['item']->description }}</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
