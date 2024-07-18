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
                <img src="{{ asset("svg/search.svg") }}" alt="search">
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
                <li><h3>Categories</h3></li>
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
<div class="search-bar-mobile" hidden>
    <form action="" method="get" class="search-form">
        @csrf
        <div class="search-container">
            <span class="search-state"></span>
            <label id="search-label" for="search-bar" hidden>Search for items and collections</label>
            <input type="search" id="search-bar-input" name="search" placeholder="Search..." autocomplete="off">
            <button id="search-reject" type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.3632 18.364C18.7537 17.9734 18.7537 17.3403 18.3632 16.9498L13.4141 12.0007L18.3646 7.05026C18.7551 6.65974 18.7551 6.02657 18.3646 5.63605C17.974 5.24552 17.3409 5.24552 16.9503 5.63605L11.9999 10.5865L7.04948 5.63604C6.65896 5.24552 6.02579 5.24552 5.63527 5.63604C5.24475 6.02657 5.24475 6.65973 5.63527 7.05026L10.5857 12.0007L5.63663 16.9498C5.2461 17.3403 5.2461 17.9734 5.63663 18.364C6.02715 18.7545 6.66032 18.7545 7.05084 18.364L11.9999 13.4149L16.949 18.364C17.3395 18.7545 17.9727 18.7545 18.3632 18.364Z"
                          fill="black"/>
                </svg>
            </button>
            <button class="search-submit active-submit" id="search-submit" type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="exit-svg" fill-rule="evenodd" clip-rule="evenodd"
                          d="M10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17C11.5723 17 13.0236 16.4816 14.1922 15.6064L18.293 19.7072C18.6835 20.0977 19.3167 20.0977 19.7072 19.7072C20.0977 19.3167 20.0977 18.6835 19.7072 18.293L15.6064 14.1922C16.4816 13.0236 17 11.5723 17 10C17 6.13401 13.866 3 10 3ZM5 10C5 7.23858 7.23858 5 10 5C12.7614 5 15 7.23858 15 10C15 12.7614 12.7614 15 10 15C7.23858 15 5 12.7614 5 10Z"
                          fill="#040921"/>
                </svg>
            </button>
        </div>
    </form>
    <script src="{{ asset('js/search.js') }}"></script>
        <div class="search-response-container">
            <ul class="search-list-mobile" id="search-list-mobile">

            </ul>
        </div>
</div>