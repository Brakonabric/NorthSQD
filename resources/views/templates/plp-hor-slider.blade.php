<link rel="stylesheet" href="{{ asset('css/plp-hor-slider.css') }}">
<script src="{{ asset('js/plp-hor-slider.js') }}"></script>
<div class="plp-hor-slider">
    <div class="sales-title">
        <h2 class="top-sales">TOP sales</h2>
        <a href="#" class="shop-all">SHOP ALL</a>
    </div>
    <div class="scroll-container">
        @foreach($items as $item)
            <a href="{{ route('products')}}/{{$item->id}}"  class="product-container">
                <div class="product-wrapper">
                    <div class="image-container">
                        <img class="product-image" src="{{asset($item->imagePath)}}" alt={{ $item->name }}>
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