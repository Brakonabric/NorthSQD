<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users</title>
    <body>
        <table class="table table-hover">

            <thead>
        
              <th>Username</th>
        
              <th>email</th>
        
            </thead>
        
            <tbody>
        @foreach($users as $user)
        
        
        
                <tr>
        
                  <td>{{$user->username}} </td>
                  <td>{{$user->email}} </td>
        
                </tr>
        @endforeach
        
            </tbody>
        
        </table>
    </body>
</html>