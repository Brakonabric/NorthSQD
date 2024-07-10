<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>
    <body>
                  <p>{{$item->name}} </p>
                  <p>{{$item->description}} </p>
                  <p>{{$item->price}} </p>
                  <p>{{$item->category}} </p>
                  <p>{{$item->in_stock}} </p>
                  <p>{{$item->size}} </p>
                  <p>{{$item->weight}} </p>
                  <p>{{$item->discount}} </p>
                  <a href="{{ route('addToCart') }}">toCart</a>
    </body>
</html>