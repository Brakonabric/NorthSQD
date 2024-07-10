<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cart</title>
    <body>
        <table class="table table-hover">

            <thead>
        
        
              <th>name</th>
              <th>quantity</th>
              <th>price</th>
              <th>remove</th>
        
            </thead>
        
            <tbody>
        @foreach($cart as $item)
        
        
        
                <tr>
        
                  <td>{{$item['name']}} </td>
                  <td>{{$item['quantity']}} </td>
                  <td>{{($item['price'])*($item['quantity'])}} </td>
                  <td><a href="{{ route('removeFromCart',$item['id']) }}">Remove</a></td>
        
                </tr>
        @endforeach
        
            </tbody>
        
        </table>
    </body>
</html>