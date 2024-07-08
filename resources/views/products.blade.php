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
        
                  <td>{{$user->name}} </td>
                  <td>{{$user->description}} </td>
                  <td>{{$user->price}} </td>
                  <td>{{$user->category}} </td>
                  <td>{{$user->inStock}} </td>
                  <td>{{$user->size}} </td>
                  <td>{{$user->weight}} </td>
                  <td>{{$user->discount}} </td>
        
                </tr>
        @endforeach
        
            </tbody>
        
        </table>
    </body>
</html>