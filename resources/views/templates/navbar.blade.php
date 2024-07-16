<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<script src="{{ asset('js/nav.js') }}"></script>
<div class="sticky-bar">
    <div class="navbar-header">
        <div class="button-container" id="left-container">
            <button onclick="" class="mob-nav-button" id="menu">
                <div class="burger" id="burger">
                    <svg width="24" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect class="line line1" width="22" height="2" rx="1" fill="#171717"/>
                        <rect class="line line2" y="8" width="22" height="2" rx="1" fill="#171717"/>
                        <rect class="line line3" y="16" width="22" height="2" rx="1" fill="#171717"/>
                    </svg>
                </div>
            </button>
            <button onclick="" class="mob-nav-button" id="search">
                <img src="{{ asset("svg/search.svg") }}" alt="#">
            </button>
        </div>
        <a href="{{route('home')}}"><img src="{{ asset("svg/logo.svg") }}" alt="#" class="logo"></a>
        <div class="button-container" id="right-container">
            <a href="{{ route('profile') }}" class="mob-nav-button" id="user">
                <img src="{{ asset("svg/user.svg") }}" alt="#">
            </a>
            <a href="{{ route('cart') }}" class="mob-nav-button" id="cart">
                <img src="{{ asset("svg/shopping_cart.svg" )}}" alt="">
            </a>
        </div>
    </div>
    <div class="dropdown-nav-list" id="dropdown-nav-list">
        <nav>
            <br>
            <ul>
                <li ><h3>Categories</h3></li>
                <li><a href="">Collections</a></li>
                <li><a href="{{route('category')}}/?category=t-shirts">T-Shirts</a></li>
                <li><a href="{{route('category')}}/?category=sweatshirts">Sweatshirts</a></li>
                <li><a href="{{route('category')}}/?category=accessories">Accessories</a></li>
                <li><a href="{{route('category')}}/?category=hoodie">Hoodie</a></li>
                <li><a href="{{route('category')}}/?category=shoes">Shoes</a></li>
                <li><a href="{{route('category')}}/?category=hat">Hat</a></li>
            </ul>
            <br>
            <ul class="sale">
                <li>
                    <h3>TOP Sales</h3>
                </li>
                <li><a href="{{route('sales')}}">
                        <img src="{{asset("svg/sale-mark.svg")}}" alt="">
                        <h4>SALE</h4>
                    </a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="navbar-table">
    <nav>
        <ul>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=t-shirts">T-Shirts</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=sweatshirts">Sweatshirts</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=accessories">Accessories</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=hoodie">Hoodie</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=shoes">Shoes</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=hat">Hat</a></li>
            <li class="nav-list-item"><a href="#">Collections</a></li>
            <li class="nav-list-item"><a class="" href="{{route('sales')}}">
                    <img src="{{asset("svg/sale-mark.svg")}}" alt="">SALE</a></li>
        </ul>
    </nav>
</div>