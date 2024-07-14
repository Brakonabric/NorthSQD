<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/pdp.css') }}">
    <title>Product Details</title>
</head>
<body>
@include('templates/navbar')

<div class="card">
    <!-- CARD SLIDE -->
    <div class="image-container">
        <div class="card__slide">
            <img src="{{asset($items['item']->imagePath)}}" alt="Product Image" class="card__image">
            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="{{asset($items['item']->imagePath)}}" alt="">
                </div>
                <div class="small-img-col">
                    <img src="{{asset($items['item']->imagePath)}}" alt="">
                </div>
                <div class="small-img-col">
                    <img src="{{asset($items['item']->imagePath)}}" alt="">
                </div>
            </div>
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
            <div class="size-chooser">
                <ul>
                    {{--<li class="card__size">S({{ $item->size }})</li>--}}
                    {{--<li class="card__size">M({{ $item->size }})</li>--}}
                    {{--<li class="card__size">L({{ $item->size }})</li>--}}

                    @if ($items['size'])
                        <li class="card__size">{{ $items['size']->size }}</li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- CARD BTN -->
        <div class="card__footer">
            <div class="card__actions">
                <button class="submit-btn">
                    <a href="{{ route('addToCart', $items['item']->id) }}">Add to Cart</a>
                </button>
                {{-- Задействуй для примнения класса --}}
                {{-- @if ($items['size']) --}}
                {{-- <p>{{ $items['size']->in_stock }}</p> --}}
                {{-- @endif --}}
            </div>
            <!-- CARD DESCRIPTIONS -->
            <div class="descriptions">
                <button class="describe-button-active tab-button tab-button-active" data-index="0">Details</button>
                <button class="describe-button-active tab-button" data-index="1">Shipping and returns</button>
            </div>
            <div class="tab-contents">
                <div class="tab-content" data-index="0">
                    <p><span>{{ $items['item']->description }}</span></p>
                    <p><span>Details:</span></p>
                    <ul>
                        <li><span>Unisex, relaxed fit shirt</span></li>
                        <li><span>100% cotton </span></li>
                        <li><span>OEKO-TEX® Standard 100 Certified</span></li>
                    </ul>
                </div>
                <div class="tab-content" data-index="1">
                    <p>View our full <a href="">shipping information.</a></p>
                    <p>Currently our merch is shipped out of the US which means International customers may experience
                        higher shipping costs, custom charges, or longer shipping times. We hope to improve this in the
                        future to make sure The Sims products are accessible across the globe.</p>
                    <p>View our full <a href="">return policy.</a></p>
                    <p>We accept returns within 31 days. Non-returnable items include final sale items, giftcards,
                        downloadable products, personalized and print-on-demand products.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/pdp.js') }}"></script>
</body>
</html>