<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ secure_asset('css/error.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="error-box">
    <div class="error-container">
        <div class="error-col">
            <h1 class="bigtext">404</h1>
            <h2>Page not found</h2>
            <p>The page you are looking for was moved, removed, renamed, or might never existed</p>
        </div>
        <div class="error-btn">
            <form action={{route('home')}}>
                <button>Go Home</button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>