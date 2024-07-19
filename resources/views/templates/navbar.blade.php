<link rel="stylesheet" href="{{ secure_asset('css/navbar.css') }}">
<script src="{{ secure_asset('js/nav.js') }}"></script>
<div class="sticky-bar">
    <div class="navbar-header">
        <div class="button-container" id="left-container">
            <button onclick="" class="mob-nav-button" id="menu">
                <span class="burger" id="burger">
                    <svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect class="line line1" width="22" height="2" rx="1" fill="#171717"/>
                        <rect class="line line2" y="8" width="22" height="2" rx="1" fill="#171717"/>
                        <rect class="line line3" y="16" width="22" height="2" rx="1" fill="#171717"/>
                    </svg>
                </span>
            </button>
            <button onclick="" class="mob-nav-button" id="search">
                <img src="{{ secure_asset("svg/search.svg") }}" alt="search">
            </button>
        </div>
        <a class="logo-container" href="{{route('home')}}"><img src="{{ secure_asset("svg/logo.svg") }}" alt="#" class="logo"></a>
        <div class="button-container" id="right-container">
            <a href="{{ route('profile') }}" class="mob-nav-button" id="user">
                <img src="{{ secure_asset("svg/user.svg") }}" alt="#">
            </a>
            <a href="{{ route('cart') }}" class="mob-nav-button" id="cart" style="position: relative">
                @php
                    $total = 0;
                    $cart = session()->get('cart');
                    if ($cart) {
                        foreach ($cart as $i) {
                        $total += $i['quantity'];
                    }
                    }
                @endphp
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 3C0 2.44772 0.447715 2 1 2H2.43845C3.81505 2 5.015 2.93689 5.34887 4.27239L5.53078 5H18.6027C20.8917 5 22.3336 7.45864 21.2234 9.45693L18.4457 14.4569C17.9166 15.4093 16.9127 16 15.8232 16H8.56155C7.18495 16 5.985 15.0631 5.65113 13.7276L3.40859 4.75746C3.2973 4.3123 2.89732 4 2.43845 4H1C0.447715 4 0 3.55228 0 3ZM6.03078 7L7.59141 13.2425C7.7027 13.6877 8.10268 14 8.56155 14H15.8232C16.1864 14 16.521 13.8031 16.6973 13.4856L19.4751 8.48564C19.8461 7.81781 19.3637 7 18.6027 7H6.03078Z"
                          fill="#040921"/>
                    <path d="M9 20C9 21.1046 8.10457 22 7 22C5.89543 22 5 21.1046 5 20C5 18.8954 5.89543 18 7 18C8.10457 18 9 18.8954 9 20Z"
                          fill="#040921"/>
                    <path d="M19 20C19 21.1046 18.1046 22 17 22C15.8954 22 15 21.1046 15 20C15 18.8954 15.8954 18 17 18C18.1046 18 19 18.8954 19 20Z"
                          fill="#040921"/>
                    @if ($total > 0)
                        <p class="inCart">{{$total}}</p>
                    @endif
                </svg>

            </a>
        </div>
    </div>
    <div class="dropdown-nav-list" id="dropdown-nav-list">
        <nav>
            <br>
            <ul>
                <li><h3>Categories</h3></li>
                <li><a href="{{route('products')}}">Shop All</a></li>
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
                        <img src="{{secure_asset("svg/sale-mark.svg")}}" alt="">
                        <h4>SALE</h4>
                    </a></li>
            </ul>
        </nav>
    </div>
</div>
<div class="navbar-table">
    <nav>
        <ul>
            <li class="nav-list-item"><a href="{{route('products')}}">Shop All</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=t-shirts">T-Shirts</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=sweatshirts">Sweatshirts</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=accessories">Accessories</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=hoodie">Hoodie</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=shoes">Shoes</a></li>
            <li class="nav-list-item"><a href="{{route('category')}}/?category=hat">Hat</a></li>
            <li class="nav-list-item"><a class="" href="{{route('sales')}}">
                    <img src="{{secure_asset("svg/sale-mark.svg")}}" alt="">SALE</a></li>
        </ul>
    </nav>
</div>
<div class="search-bar-mobile">
    <form action="{{ route('searchRed') }}" method="get" class="search-form">

        @csrf
        <div class="close-title">
            <span class="search-state">Search</span>
            <button class="close-button">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.3632 18.364C18.7537 17.9734 18.7537 17.3403 18.3632 16.9498L13.4141 12.0007L18.3646 7.05026C18.7551 6.65974 18.7551 6.02657 18.3646 5.63605C17.974 5.24552 17.3409 5.24552 16.9503 5.63605L11.9999 10.5865L7.04948 5.63604C6.65896 5.24552 6.02579 5.24552 5.63527 5.63604C5.24475 6.02657 5.24475 6.65973 5.63527 7.05026L10.5857 12.0007L5.63663 16.9498C5.2461 17.3403 5.2461 17.9734 5.63663 18.364C6.02715 18.7545 6.66032 18.7545 7.05084 18.364L11.9999 13.4149L16.949 18.364C17.3395 18.7545 17.9727 18.7545 18.3632 18.364Z"
                          fill="black"/>
                </svg>
            </button>
        </div>
        <div class="search-container">
            <span class="search-submit" id="search-submit" type="button">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path class="exit-svg" fill-rule="evenodd" clip-rule="evenodd"
                          d="M10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17C11.5723 17 13.0236 16.4816 14.1922 15.6064L18.293 19.7072C18.6835 20.0977 19.3167 20.0977 19.7072 19.7072C20.0977 19.3167 20.0977 18.6835 19.7072 18.293L15.6064 14.1922C16.4816 13.0236 17 11.5723 17 10C17 6.13401 13.866 3 10 3ZM5 10C5 7.23858 7.23858 5 10 5C12.7614 5 15 7.23858 15 10C15 12.7614 12.7614 15 10 15C7.23858 15 5 12.7614 5 10Z"
                          fill="#040921"/>
                </svg>
            </span>
            <input type="search" id="search-bar-input" name="search" placeholder="Search..." autocomplete="off">
            <button id="search-reject" type="button">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.3632 18.364C18.7537 17.9734 18.7537 17.3403 18.3632 16.9498L13.4141 12.0007L18.3646 7.05026C18.7551 6.65974 18.7551 6.02657 18.3646 5.63605C17.974 5.24552 17.3409 5.24552 16.9503 5.63605L11.9999 10.5865L7.04948 5.63604C6.65896 5.24552 6.02579 5.24552 5.63527 5.63604C5.24475 6.02657 5.24475 6.65973 5.63527 7.05026L10.5857 12.0007L5.63663 16.9498C5.2461 17.3403 5.2461 17.9734 5.63663 18.364C6.02715 18.7545 6.66032 18.7545 7.05084 18.364L11.9999 13.4149L16.949 18.364C17.3395 18.7545 17.9727 18.7545 18.3632 18.364Z"
                          fill="black"/>
                </svg>
            </button>
        </div>
        <script src="{{ secure_asset('js/search-engine.js') }}"></script>
        <div class="search-response-container">
            <ul class="search-list-mobile" id="search-list-mobile">
            </ul>
        </div>
    </form>
</div>
