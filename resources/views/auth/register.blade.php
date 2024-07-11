<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
        <title>Login</title>
        <script>
        function togglePassword() {
            event.preventDefault();
            var x = document.getElementById("password");
// TODO change image on click
//            var img = document.getElementById("passImg");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
          }
          </script>
    <body>
        @include('templates/navbar')
        <div class="box">
        <h1 class="top-text">Sign Up</h1>
        <p class="top-text">Already have an account? <a href="/login">Log In</a></p>
        </div>
        <div class = "loginForm">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-wrap">
            <label for ="email">Mobile number or email</label>
            <input id="email" type="email" name="email" placeholder="Enter your mobile number or email">
            </div>
            <div class="input-wrap">
            <label for ="password">Password</label>
            <div class="passinp">
            <input id="password" type="password" name="password" placeholder="Enter your password">
            <input id="showpass" class="showpass" type="image" src="{{asset('svg/Eyehide.svg')}}" onclick="togglePassword()"/>
            </div>
            </div>
            <div class="input-wrap">
            <button class="submit" type="submit">Sign In</button>
            </div>
        </form>
    </div>
    <p class="continue">or continue with</p>
    <div class="buttonBox">
        <input class="social" type="image" src="{{asset('svg/facebook_ic.svg')}}"/>
        <input class="social" type="image" src="{{asset('svg/google_ic.svg')}}"/>
        <input class="social" type="image" src="{{asset('svg/apple_ic.svg')}}"/>
    </div>
    </body>
</html>