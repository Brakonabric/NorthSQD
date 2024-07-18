<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/pdp.css') }}">
    <script src="{{ asset('js/pdp.js') }}"></script>
    <title>Product Details</title>
    <script>
        const addToCartUrl = "{{ route('addToCart', $products['item']->id) }}";
    </script>
</head>
<body>
@include('templates/navbar')
<div class="card">
    <div class="image-container">
        <div class="thumbnails">
            @php $preview = []; @endphp
            @foreach($products['colors'] as $color)
                <div class="image-for-color" id="img-container-{{$color -> color}}" style="display: none">
                    @foreach($products['images'][$color->color] as $image)
                        @php
                            $preview[$color->color] = $image['image1'];
                            $paths=[$image['image1'],$image['image2'],$image['image3'],$image['image4'],$image['image5']];
                        @endphp
                        @foreach($paths as $path)
                            @if($path != null)
                                <div class="small-img-col">
                                    <img src="{{ asset($path) }}" alt="{{ $products['item']->name }}"
                                         data-image='{{ asset($path) }}' class="thumbnail">
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            @endforeach
        </div>
        @foreach($products['colors'] as $color)
            {{--            FINISH THIS PART AFTER LUNCH--}}
            <div class="card__slide" id="preview-{{$color -> color}}" style="display: none">
                <img src="{{ asset($preview[$color->color]) }}" alt="{{ $products['item']->name }}" class="card__image">
            </div>
        @endforeach
    </div>
    <div class="content-container">
        <!-- CARD HEADER -->
        <header class="card__header">
            <h2 class="card__title">{{ $products['item']->name }}</h2>
            <h4 class="card__subtitle">
                {{ $products['item']->category }}
            </h4>
            @if ($products['item']->discount != null && $products['item']-> discount > 0)
                @php
                    $discount = $products['item']->price - $products['item']->discount;
                @endphp
                <div class="card__price-discounted">
                    <span class="discount">€ {{ number_format($discount, 2) }}</span>
                    <span class="original-price">€ {{ number_format($products['item']->price, 2) }}</span>
                </div>
            @else
                <p class="card__price">€ {{ number_format($products['item']->price, 2) }}</p>
            @endif
        </header>
        <!-- CARD POINT -->
        <div class="card__point">
            <div class="color">
                <ul>
                    @foreach($products['colors'] as $color)
                        <li style="background-color: {{$color->color}}" id="{{ $color->color }}" class="color-btn"></li>
                    @endforeach
                </ul>
            </div>
            <div class="size-chooser">
                @foreach($products['colors'] as $color)
                    <div class="sizes" id="sizes-{{ $color->color }}" style="display: none;">
                        <ul>
                            @foreach($products['sizes'][$color->color] as $size)
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
                <button class="submit-btn" onclick="addToCart({{$products['item']->id}})">Add to Cart</button>
            </div>
            <!-- CARD DESCRIPTIONS -->
            <div class="descriptions">
                <button class="describe-button tab-button tab-button--active" data-index="0">Details</button>
                <button class="describe-button tab-button" data-index="1">Shipping and returns</button>
            </div>
            <div class="tab-contents">
                <div class="tab-content tab-content--active" data-index="0">
                    <p>{!! $products['item']->description !!}</p>
                </div>
                <div class="tab-content" data-index="1">
                    <p>At North Squad, we strive to ensure your shopping experience is seamless and convenient. We
                        exclusively use pakomats for all our deliveries, offering you flexibility and reliability.</p>
                    <p> All orders are processed within 1–2 business days. Once your order is ready, you will receive a
                        notification with tracking information.</p>
                    <p>Returns happen via Omniva Parcel Lockers and takes within approximately 15 calendar days from the
                        date we receive your returned item. If you need to return a product, view our full <a href="#">Return
                            Policy.</a></p>
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
