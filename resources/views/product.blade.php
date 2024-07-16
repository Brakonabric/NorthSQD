<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/pdp.css') }}">
    <script src="{{ asset('js/pdp.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Product Details</title>
</head>
<body>
    @include('templates/navbar')
    <div class="card">
        <div class="image-container">
            <div class="thumbnails">
                @foreach($items['images'] as $image)
                    <div class="small-img-col">
                        <img src="{{ asset($image->imagePath) }}" alt="{{ $items['item']->name }}" class="thumbnail"
                             data-image="{{ asset($image->imagePath) }}" data-color="{{ $image->color }}">
                    </div>
                @endforeach
            </div>
            <div class="card__slide">
                <img src="{{ asset($items['item']->imagePath) }}" alt="{{ $items['item']->name }}" class="card__image">
            </div>
        </div>
        <div class="content-container">
            <!-- CARD HEADER -->
            <header class="card__header">
                <h2 class="card__title">{{ $items['item']->name }}</h2>
                <h3 class="card__subtitle">
                    <p>{{ $items['item']->category }}</p>
                </h3>
                @if ($items['item']->discount)
                    <div class="card__price-discounted">
                        <span class="original-price">€ {{ $items['item']->price }}</span>
                        <span class="discount">€{{ $items['item']->discount }}</span>
                    </div>
                @else
                    <p class="card__price">€ {{ $items['item']->price }}</p>
                @endif
            </header>
            <!-- CARD POINT -->
            <div class="card__point">
                <div class="color">
                    <ul>
                        @foreach($items['colors'] as $color)
                            <li style="background-color: {{ $color->color }}" id="{{ $color->color }}"
                                class="ring color-btn"></li>
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
                                        id="{{ $color->color }}-{{ $size->size }}"
                                        data-color="{{ $color->color }}" data-size="{{ $size->size }}">
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
                    <button class="submit-btn">
                        <a href="{{ route('addToCart', $items['item']->id) }}">Add to Cart</a>
                    </button>
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
    @include('templates/footer')
</body>
</html>
