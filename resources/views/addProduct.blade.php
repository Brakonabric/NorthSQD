<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Product</title>
    <body>
        <form method="POST" action="{{ route('addProduct') }}">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="description" placeholder="description">
            <input type="text" name="price" placeholder="price">
            <input type="text" name="category" placeholder="category">
            <input type="checkbox" name="in_stock" placeholder="in_stock">
            <input type="text" name="imagePreview" placeholder="imagePreview">
            <input type="text" name="size" placeholder="size">
            <input type="text" name="weight" placeholder="weight">
            <input type="text" name="discount" placeholder="discount">
            <hr>
            <input type="text" name="colors[][name]" placeholder="color1"></input>
            <input type="checkbox" name="colors[][instock]"></input>
            <input type="text" name="colors[][sizes]" placeholder="size1"></input>
            
            <button type="submit">add</button>
        </form>
    </body>
</html>