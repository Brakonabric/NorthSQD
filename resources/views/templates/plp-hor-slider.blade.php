<link rel="stylesheet" href="{{ asset('css/plp-hor-slider.css') }}">
<script src="{{ asset('js/plp-hor-slider.js') }}"></script>
<div class="plp-hor-slider">
    <div class="sales-title">
        <h2 class="top-sales">TOP sales</h2>
        <a href="#" class="shop-all">SHOP ALL</a>
    </div>
    <div class="scroll-container">
        @foreach($items as $item)
            <div class="product-block">
                <div class="image-container">
                    <img src={{$item->imageUrl}}; alt={{ $item->name }}>
{{--        figure out add this to route and wrape into <a href="/products/{{$item->id}}">--}}
                </div>
                <h3 class="name">
                    {{$item->name}}
                </h3>
                <div class="wrap">
                    @if($item->discount !== null && $item->discount > 0)
                        @php
                            $discountedPrice = $item->price - ($item->price * ($item->discount / 100));
                        @endphp
                        <h4 class="price">
                            €{{ number_format($discountedPrice, 2) }}
                        </h4>
                        <h5 class="old-price">
                            €{{ $item->price }}
                        </h5>
                    @else
                        <h4 class="price">
                            €{{$item->price}}
                        </h4>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>