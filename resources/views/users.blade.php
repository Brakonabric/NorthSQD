<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users</title>
    <body>
        <table class="table table-hover">

            <thead>
        
        
              <th>email</th>
              <th>name</th>
              <th>surname</th>
        
            </thead>
        
            <tbody>
        @foreach($users as $user)
        
        
        
                <tr>
        
                  <td>{{$user->email}} </td>
                  <td>{{$user->name}} </td>
                  <td>{{$user->surname}} </td>
        
                </tr>
        @endforeach
        
            </tbody>
        
        </table>
    </body>
</html>