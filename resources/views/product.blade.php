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
                <img src="{{ $item->imageUrl }}" alt="Product Image" class="card__image">
            </div>
        </div>
        <div class="content-container">
            <!-- CARD HEADER -->
            <header class="card__header">
                <h2 class="card__title">{{ $item->name }}</h2>
                <h3 class="card__subtitle">
                    <p>{{ $item->category }}</p>
                </h3>
                <p class="card__price">€ {{ $item->price }}</p>
                <p class="card__discount">{{ $item->discount }} </p>
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
                        <li class="card__copy">{{ $item->size }}</li>
                        <li class="card__copy">{{ $item->size }}</li>
                        <li class="card__copy">{{ $item->size }}</li>
                    </ul>
                </div>
            </div>
            <!-- CARD FOOTER -->
            <footer class="card__footer">
                <div class="card__actions">
                    <button class="button">
                        <a href="{{ route('addToCart', $item->id) }}">toCart</a>
                    </button>
                    <p>{{ $item->in_stock }}</p>
                </div>
                <div class="descriptions">
                    <button>Details</button>
                    <button>Shipping and returns</button>
                    <p>{{ $item->description }}</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
