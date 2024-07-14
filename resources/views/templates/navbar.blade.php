<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<script src="{{ asset('js/nav.js') }}"></script>
<div class="sticky-bar">
    <div class="header-mob">
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
        <img src="{{ asset("svg/logo.svg") }}" alt="#" class="logo">
        <div class="button-container" id="right-container">
            <button onclick="" class="mob-nav-button" id="user">
                <img src="{{ asset("svg/user.svg") }}" alt="#">
            </button>
            <button onclick="" class="mob-nav-button" id="cart">
                <img src="{{ asset("svg/shopping_cart.svg" )}}" alt="">
            </button>
        </div>
    </div>
    <div class="dropdown-nav-list" id="dropdown-nav-list">
        <div>
            <br>
            <ul>
                <li><h3>Categories</h3></li>
                <li><a href="#">Collections</a></li>
                <li><a href="#">T-Shirts</a></li>
                <li><a href="#">Sweatshirts</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Hoodie</a></li>
                <li><a href="#">Shoes</a></li>
                <li><a href="#">Hat</a></li>
            </ul>
            <br>
            <ul class="sale">
                <li>
                    <h3>TOP Sales</h3>
                </li>
                <li><a href="/products">
                        <img src="{{asset("svg/sale-mark.svg")}}" alt="">
                        <h4>SALE</h4>
                    </a></li>
            </ul>
        </div>
    </div>
</div>