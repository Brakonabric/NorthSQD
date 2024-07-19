<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ secure_asset('css/auth.css') }}">
    <title>Login</title>

<body>
    @include('templates/navbar')
    <div class="box">
        <h1 class="top-text">Log In</h1>
    </div>
    <div class = "loginForm">
        <form method="POST" action="{{ route('adminLogin') }}">
            @csrf
            <div class="input-wrap">
                <label for ="email">Mobile number or email</label>
                <input id="email" type="email" name="email" placeholder="Enter your mobile number or email">
            </div>
            <div class="input-wrap">
                <label for ="password">Password</label>
                <div class="passinp">
                    <input id="password" type="password" name="password" placeholder="Enter your password">
                    <img id="showpass" class="showpass" src="{{ secure_asset('svg/Eyeopen.svg') }}" alt="showPassword">
                    <img id="showpass2" style="display:none;" class="showpass" src="{{ secure_asset('svg/Eyehide.svg') }}"
                        alt="showPassword">
                </div>
                <a href="#">Forgot Password?</a>
            </div>
            <div class="input-wrap">
                <button class="submit" type="submit">Log In</button>
            </div>
        </form>
    </div>
    <hr class="auth_line">
    @include('templates/footer')
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
