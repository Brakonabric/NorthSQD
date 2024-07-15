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
                    <img id="showpass" class="showpass" src="{{ asset('svg/Eyeopen.svg') }}" alt="showPassword">
                    <img id="showpass2" style="display:none;" class="showpass" src="{{ asset('svg/Eyehide.svg') }}"
                        alt="showPassword">
                </div>
            </div>
            <div class="input-wrap">
                <button class="submit" type="submit">Sign Up</button>
            </div>
        </form>
    </div>
    <p class="continue">or continue with</p>
    <div class="buttonBox">
        <input class="social" type="image" src="{{ asset('svg/facebook_ic.svg') }}" />
        <input class="social" type="image" src="{{ asset('svg/google_ic.svg') }}" />
        <input class="social" type="image" src="{{ asset('svg/apple_ic.svg') }}" />
    </div>
    <hr class="auth_line">

</body>
<script>
    let el = document.getElementById("showpass");
    let el2 = document.getElementById("showpass2");
    el.addEventListener("click", togglePassword);
    el2.addEventListener("click", togglePassword);

    function togglePassword() {
        event.preventDefault();
        let x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
            el2.style.display = 'inline-block';
            el.style.display = 'none';
        } else {
            x.type = "password";
            el2.style.display = 'none';
            el.style.display = 'block';
        }
    }
</script>

</html>
