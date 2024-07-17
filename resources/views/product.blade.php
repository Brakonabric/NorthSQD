<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/pdp.css') }}">
    <script src="{{ asset('js/pdp.js') }}"></script>
    <title>Product Details</title>
    <script>
        const addToCartUrl = "{{ route('addToCart', $items['item']->id) }}";
    </script>
</head>
<body>
@include('templates/navbar')
<div class="card">
    <div class="image-container">
        <div class="thumbnails">
            <div class="small-img-col">
                <img src="{{ asset($items['item']->imagePreview) }}" alt="{{ $items['item']->name }}" class="thumbnail"
                     data-image="{{ asset($items['item']->imagePreview) }}">
            </div>
            <div class="small-img-col">
                <img src="{{ asset($items['item']->imagePreview) }}" alt="{{ $items['item']->name }}" class="thumbnail"
                     data-image="{{ asset($items['item']->imagePreview) }}">
            </div>
            <div class="small-img-col">
                <img src="{{ asset("images/Rodions/T-Shirt_Rodions_lavender_1.png") }}" class="thumbnail"
                     data-image="{{ asset("images/Rodions/T-Shirt_Rodions_lavender_1.png") }}" alt="">
            </div>
        </div>
        <div class="card__slide">
            <img src="{{ asset($items['item']->imagePreview) }}" alt="{{ $items['item']->name }}" class="card__image">
        </div>
    </div>
    <div class="content-container">
        <!-- CARD HEADER -->
        <header class="card__header">
            <h2 class="card__title">{{ $items['item']->name }}</h2>
            <h3 class="card__subtitle">
                <p>{{ $items['item']->category }}</p>
            </h3>
            @if ($items['item']->discount != null && $items['item']-> discount > 0)
                @php
                    $discount = $items['item']->price - $items['item']->discount;
                @endphp
                <div class="card__price-discounted">
                    <span class="discount">€ {{ number_format($discount, 2) }}</span>
                    <span class="original-price">€ {{ number_format($items['item']->price, 2) }}</span>
                </div>
            @else
                <p class="card__price">€ {{ number_format($items['item']->price, 2) }}</p>
            @endif
        </header>
        <!-- CARD POINT -->
        <div class="card__point">
            <div class="color">
                <ul>
                    @foreach($items['colors'] as $color)
                        <li style="background-color: {{$color->color}}" id="{{ $color->color }}" class="color-btn"></li>
                    @endforeach
                </ul>
            </div>
            <div class="size-chooser">
                @foreach($items['colors'] as $color)
                    <div class="sizes" id="sizes-{{ $color->color }}" style="display: none;">
                        <p>{{ $color->color }}</p>
                        <ul>
                            @foreach($items['sizes'][$color->color] as $size)
                                <li class="size-option {{ $size->in_stock ? 'size-in-stock' : 'size-out-stock' }}"
                                    id="{{ $color->color }}-{{ $size->size }}">
                                    {{ $size->size }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- CARD BTN -->
        <div class="card__footer">
            <div class="card__actions">
                {{-- <div class="surePopUp">
                    <h2>Added to cart! Where do you want to go?</h2>
                    <form method="get" action={{route('home')}}>
                    <button>Continue shopping</button>
                    </form>
                    <form method="get" action={{route('home')}}>
                    <button>Go to cart</button>
                    </form>
                </div> --}}
                <button class="submit-btn" onclick="addToCart({{$items['item']->id}})">Add to Cart</button>
            </div>
            <!-- CARD DESCRIPTIONS -->
            <div class="descriptions">
                <button class="describe-button tab-button tab-button--active" data-index="0">Details</button>
                <button class="describe-button tab-button" data-index="1">Shipping and returns</button>
            </div>
            <div class="tab-contents">
                <div class="tab-content tab-content--active" data-index="0">
                    <p>{!! $items['item']->description !!}</p>
                    <!-- Additional details content here -->
                </div>
                <div class="tab-content" data-index="1">
                    <p>View our full <a href="#">shipping information.</a></p>
                    <!-- Shipping and returns content here -->

                </div>
            </div>
        </div>
    </div>
</div>
<hr>
@include('templates/footer')
<sript>
</sript>
</body>
</html>
