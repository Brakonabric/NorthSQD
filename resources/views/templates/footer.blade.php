<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<div class="footer-module">
    <div class="mobile-contacts mobile">
        <div class="row-contacts">
            <div class="list">
                <h2>Contacts</h2>
                <ul>
                    <li>
                        <a href="ttps://www.google.com/maps?q=Magebit+Riga">
                            <img class="footer-svg" src="{{asset('svg/Icon-Address.svg')}}" alt="Company Address"><strong>2a Uriekstes,
                                Riga</strong></a>
                    </li>
                    <li>
                        <a href="tel:+371 25000666"><img class="footer-svg" src="{{asset("svg/Icon_Phone.svg")}}" alt="Contact Phone Number"><strong>+371
                                25000666</strong>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@northsquad.lv"><img class="footer-svg" src="{{asset("svg/Icon_Mail.svg")}}" alt="Contact e-mail"><strong>info@northsquad.lv</strong></a>
                    </li>
                    <li class="social-svg">
                        <a href="#"><img src="{{asset('svg/Icon_Twitter.svg')}}" alt="Twitter"></a>
                        <a href="#"><img src="{{asset('svg/Icon_WhatsApp.svg')}}" alt="WhatsApp"></a>
                        <a href="#"><img src="{{asset('svg/Icon_Instagram.svg')}}" alt="Instagram"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="payment-row">
            <ul>
                <li><img src="{{asset('svg/master card.svg')}}" alt="MasterCard"></li>
                <li><img src="{{asset('svg/visa.svg')}}" alt="Visa"></li>
                <li><img src="{{asset('svg/paypal.svg')}}" alt="PayPal"></li>
                <li><img src="{{asset('svg/googlePay.svg')}}" alt="GooglePay"></li>
            </ul>
        </div>
    </div>
    <div class="footer-container">
        <div class="row">
            <div class="footer-col pc-contacts pc">
                <h4>Contacts</h4>
                <ul>
                    <li>
                        <a href="ttps://www.google.com/maps?q=Magebit+Riga" target="_blank">
                            <img class="footer-svg" src="{{asset('svg/Icon-Address.svg')}}" alt="Company Address">2a Uriekstes,
                            Riga</a>
                    </li>
                    <li>
                        <a href="tel:+371 25000666"><img class="footer-svg" src="{{asset('svg/Icon_Phone.svg')}}"
                                                         alt="Contact Phone Number">+371 25000666</a>
                    </li>
                    <li>
                        <a href="mailto:info@northsquad.lv"><img class="footer-svg" src="{{asset('svg/Icon_Mail.svg')}}"
                                                                 alt="Contact e-mail">info@northsquad.lv</a>
                    </li>
                    <li class="social-svg">
                        <a href="#"><img src="{{asset('svg/Icon_Twitter.svg')}}" alt="Twitter"></a>
                        <a href="#"><img src="{{asset('svg/Icon_WhatsApp.svg')}}" alt="WhatsApp"></a>
                        <a href="#"><img src="{{asset('svg/Icon_Instagram.svg')}}" alt="Instagram"></a>
                    </li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Categories</h4>
                <ul>
                    <li><a href="{{route('category')}}/?category=t-shirts">T-Shirts</a></li>
                    <li><a href="{{route('category')}}/?category=sweatshirts">Sweatshirts</a></li>
                    <li><a href="{{route('category')}}/?category=accessories">Accessories</a></li>
                    <li><a href="{{route('category')}}/?category=hoodie">Hoodie</a></li>
                    <li><a href="{{route('category')}}/?category=shoes">Shoes</a></li>
                    <li><a href="{{route('category')}}/?category=hat">Hat</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Collections</h4>
                <ul>
                    <li><a href="{{route('collection')}}/?collection=linass">Linass</a></li>
                    <li><a href="{{route('collection')}}/?collection=rodions">Rodions</a></li>
                    <li><a href="{{route('collection')}}/?collection=katerina">Katerina</a></li> 
                    <li><a href="{{route('collection')}}/?collection=deniss">Deniss</a></li>            
                    <li><a href="{{route('collection')}}/?collection=matiss">Matiss</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Info</h4>
                <ul>
                    <li><a href="#">About NorthSQD</a></li>
                    <li><a href="#">Refund policy</a></li>
                    <li><a href="#">Shipping policy</a></li>
                </ul>
            </div>
            <div class="footer-col sales-col">
                <h4 class="Sales">TOP Sales</h4>
                <ul>
                    <li><a href="{{route('sales')}}"><img src="{{ asset('svg/sale-mark.svg') }}" alt="">SALE</a></li>
                </ul>
            </div>
        </div>
        <div class="payment-row pc">
            <ul>
                <li><img src="{{asset('svg/master card.svg')}}" alt="MasterCard"></li>
                <li><img src="{{asset('svg/visa.svg')}}" alt="Visa"></li>
                <li><img src="{{asset('svg/paypal.svg')}}" alt="PayPal"></li>
                <li><img src="{{asset('svg/googlePay.svg')}}" alt="GooglePay"></li>
            </ul>
        </div>
    </div>
</div>
<footer class="footer-bottom">
    &copy; 2024 NorthSQD | Magebit Bootcamp 2024. All rights reserved.
</footer>