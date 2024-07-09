<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>
    <body>
        <table class="table table-hover">

            <thead>
        
              <th>name</th>
        
              <th>description</th>

              <th>price</th>

              <th>category</th>

              <th>inStock</th>

              <th>size</th>

              <th>weight</th>

              <th>discount</th>

            
            </thead>
        
            <tbody>
        @foreach($items as $item)
        
        
        
                <tr>
        
                  <td>{{$item->name}} </td>
                  <td>{{$item->description}} </td>
                  <td>{{$item->price}} </td>
                  <td>{{$item->category}} </td>
                  <td>{{$item->in_stock}} </td>
                  <td>{{$item->size}} </td>
                  <td>{{$item->weight}} </td>
                  <td>{{$item->discount}} </td>
        
                </tr>
        @endforeach
        
            </tbody>
        
        </table>
    </body>
</html>