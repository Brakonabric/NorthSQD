<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<script src="{{ asset('js/nav.js') }}"></script>
<div class="sticky-bar">
    <div class="header-mob">
        <div class="button-container" id="left-container">
            <button onclick="" class="mob-nav-button" id="menu">
                <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="2" rx="1" fill="#171717"/>
                    <rect y="8" width="24" height="2" rx="1" fill="#171717"/>
                    <rect y="16" width="24" height="2" rx="1" fill="#171717"/>
                </svg>
            </button>
            <button onclick="" class="mob-nav-button" id="search">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M10 3C6.13401 3 3 6.13401 3 10C3 13.866 6.13401 17 10 17C11.5723 17 13.0236 16.4816 14.1922 15.6064L18.293 19.7072C18.6835 20.0977 19.3167 20.0977 19.7072 19.7072C20.0977 19.3167 20.0977 18.6835 19.7072 18.293L15.6064 14.1922C16.4816 13.0236 17 11.5723 17 10C17 6.13401 13.866 3 10 3ZM5 10C5 7.23858 7.23858 5 10 5C12.7614 5 15 7.23858 15 10C15 12.7614 12.7614 15 10 15C7.23858 15 5 12.7614 5 10Z"
                          fill="#040921"/>
                </svg>
            </button>
        </div>
        <img src="{{ asset('svg/logo.svg')}}" alt="#" class="logo">
        <div class="button-container" id="right-container">
            <button onclick="" class="mob-nav-button" id="user">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M4.47658 15.2102C5.79089 13.378 8.11859 12 11.9999 12C15.8812 12 18.2089 13.378 19.5232 15.2102C20.7935 16.9809 20.9958 19.0105 20.9998 20.1336C21.0039 21.2629 20.0571 22 19.0865 22H4.91336C3.94268 22 2.99591 21.2629 2.99997 20.1336C3.00401 19.0105 3.20633 16.9809 4.47658 15.2102ZM5.00174 20H18.9981C18.9774 19.0479 18.7726 17.595 17.8981 16.376C17.0234 15.1565 15.3548 14 11.9999 14C8.64499 14 6.97644 15.1565 6.10169 16.376C5.2272 17.595 5.02239 19.0479 5.00174 20Z"
                          fill="#040921"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12 8C13.1046 8 14 7.10457 14 6C14 4.89543 13.1046 4 12 4C10.8954 4 10 4.89543 10 6C10 7.10457 10.8954 8 12 8ZM12 10C14.2091 10 16 8.20914 16 6C16 3.79086 14.2091 2 12 2C9.79086 2 8 3.79086 8 6C8 8.20914 9.79086 10 12 10Z"
                          fill="#040921"/>
                </svg>
            </button>
            <button onclick="" class="mob-nav-button" id="cart">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 3C0 2.44772 0.447715 2 1 2H2.43845C3.81505 2 5.015 2.93689 5.34887 4.27239L5.53078 5H18.6027C20.8917 5 22.3336 7.45864 21.2234 9.45693L18.4457 14.4569C17.9166 15.4093 16.9127 16 15.8232 16H8.56155C7.18495 16 5.985 15.0631 5.65113 13.7276L3.40859 4.75746C3.2973 4.3123 2.89732 4 2.43845 4H1C0.447715 4 0 3.55228 0 3ZM6.03078 7L7.59141 13.2425C7.7027 13.6877 8.10268 14 8.56155 14H15.8232C16.1864 14 16.521 13.8031 16.6973 13.4856L19.4751 8.48564C19.8461 7.81781 19.3637 7 18.6027 7H6.03078Z"
                          fill="#040921"/>
                    <path d="M9 20C9 21.1046 8.10457 22 7 22C5.89543 22 5 21.1046 5 20C5 18.8954 5.89543 18 7 18C8.10457 18 9 18.8954 9 20Z"
                          fill="#040921"/>
                    <path d="M19 20C19 21.1046 18.1046 22 17 22C15.8954 22 15 21.1046 15 20C15 18.8954 15.8954 18 17 18C18.1046 18 19 18.8954 19 20Z"
                          fill="#040921"/>
                </svg>
            </button>
        </div>
    </div>
    <div class="dropdown-nav-list" id="dropdown-nav-list">
        <div>
            <br>
            <ul>
                <li><h3>Categories</h3></li>
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
                        <img src="svg/sale-mark.svg" alt="">
                        <h4>SALE</h4>
                    </a></li>
            </ul>
        </div>
    </div>
</div>