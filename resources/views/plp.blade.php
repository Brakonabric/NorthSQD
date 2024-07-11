<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="products.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

        <title>Products</title>
    </head>
    <body>

        <h2>TOP sales</h2>
        <strong><a href="" class="showall">Show all</a></strong>



 {{-- Later need to delete txt from divs name, dicount, price etc.        --}}
    <div class="container scroll-container">
        @foreach($items as $item)

        <div class="product-block">
                            {{-- <img src="{{ $item->image_url }}" alt="{{ $item->name }}"> --}}

                            <div class="image-container">
                                <div class="like-button">&#9829;</div>
                                <img src="images/1.png" alt="{{ $item->name }}">
                            </div>

                            {{-- <div class="item-detail">
                                <div class="label description">Description:</div>
                                <div>{{$item->description}}</div>
                            </div> --}}
                            {{-- <div class="item-detail">
                                <div class="label category">Category:</div>
                                <div>{{$item->category}}</div>
                            </div>
                            <div class="item-detail">
                                <div class="label stock">In Stock:</div>
                                <div>{{$item->in_stock}}</div>
                            </div>
                            <div class="item-detail">
                                <div class="label size">Size:</div>
                                <div>{{$item->size}}</div>
                            </div>
                            <div class="item-detail">
                                <div class="label weight">Weight:</div>
                                <div>{{$item->weight}}</div>
                            </div> --}}

                            <div class="item-detail name">
                                <div class="label">{{$item->name}}</div>
                            </div>
                            <div class="wrap">


                                @if($item->discount !== null && $item->discount > 0)
                                @php
                                    $discountedPrice = $item->price - ($item->price * ($item->discount / 100));
                                @endphp
                                <div class="item-detail price">
                                    <div class="label">{{ number_format($discountedPrice, 2) }}€</div>
                                </div>
                                <div class="item-detail old-price">
                                    <div class="label"><s>{{ $item->price }}€</s></div>
                                </div>
                                @else
                                <div class="item-detail price">
                                    <div class="label">{{$item->price}}€</div>
                                </div>
                                @endif
                                {{-- <div class="item-detail price">
                                    <div class="label">Price:{{$item->price}}€</div>
                                </div>
                                @if($item->discount !== null && $item->discount > 0)
                                <div class="item-detail discount">
                                    @php
                                        $discountedPrice = $item->price - ($item->price * ($item->discount / 100));
                                    @endphp
                                    <div class="label">{{ number_format($discountedPrice, 2) }}€</div>
                                </div>
                                @endif --}}
                        {{-- calculting discount --}}
                                {{-- @if($item->discount !== null)
                                <div class="item-detail discount">
                                    <div class="label">Old price:{{$item->discount}}</div>

                                </div>
                            @endif --}}
                        </div>


    </div>
                    @endforeach
</div>
                <script src="scripts.js"></script>


    </body>
</html>