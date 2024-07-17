<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/error.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="error-box">
    <div class="error-container">
        <div class="error-col">
            <h1 class="bigtext">Success</h1>
            <h2>Order created successfully!</h2>
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