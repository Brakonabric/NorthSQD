<link rel="stylesheet" href="{{ asset('css/slider.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<div class="slide">
    <div class="slide-container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('images/Slider/Slide1.png') }}" alt="Slide 1"></div>
                <div class="swiper-slide"><img src="{{ asset('images/Slider/Slide2.png') }}" alt="Slide 2"></div>
                <div class="swiper-slide"><img src="{{ asset('images/Slider/Slide3.png') }}" alt="Slide 3"></div>
                <div class="swiper-slide"><img src="{{ asset('images/Slider/Slide4.png') }}" alt="Slide 4"></div>
                <div class="swiper-slide"><img src="{{ asset('images/Slider/Slide5.png') }}" alt="Slide 5"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <div class="main-imgr">
        <img class="main-slide-img" fetchpriority="high" src="{{ asset("images/Slider/Slider.png")}}" alt="Home Banner">
    </div>
    <div class="title-i">
        <div class="title-text">
            <h1>Experience The spirit of the North</h1>
        </div>
        <div class="exp-btns">
            <button class="cl-btn" onclick="window.location.href='{{ route('about') }}'">About NorthSQD</button>
            <button class="sn-btn" onclick="window.location.href='{{ route('products') }}'">Shop Now</button>
        </div>
    </div>
</div>
<script>
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: -10,
        centeredSlides: true,
        freeMode: false,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>