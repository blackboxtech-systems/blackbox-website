@extends('layout', [$activePage = 'Home'])
@section('content')
<div class="page-wrapper">
<section class="main-slider">
            <div class="main-slider__carousel noile-owl__carousel owl-carousel owl-theme" data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"], "margin": 0, "dots": true, "nav": false, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false, "navSpeed": 3000}'>
                <div class="main-slider__slide main-slider__slide-one item">
                    <div class="main-slider__bg" style="background-image: url('/assets/images/backgrounds/slider-1-1.jpg')">
                        <div class="main-slider__vartical-line-wrap slide-title">
                            <span class="main-slider__vartical-text slide-title__vartical-text">Web Development &
                                Consulting</span>
                            <div class="main-slider__vartical-line main-slider__vartical-line--one"></div>
                            <div class="main-slider__vartical-line main-slider__vartical-line--two"></div>
                            <div class="main-slider__vartical-line main-slider__vartical-line--three"></div>
                        </div><!-- /.main-slider__vartical-line-wrap -->
                    </div> <!-- /.Slide One BG -->
                    <div class="main-slider__container container">
                        <div class="main-slider__circle"></div><!-- /.main-slider__circle -->
                        <div class="main-slider__content slide-title">
                            <h1 class="main-slider__title slide-title__heading">Tech Solutions at <br> your fingertips</h1>
                            <div class="main-slider__desc-wrap slide-title__desc-wrap">
                                <span class="main-slider__arrow icon-arrow-right-2"></span>
                                <p class="main-slider__desc">We are a Digital Brand </p>
                            </div>
                            <div class="main-slider__btn-box slide-title__btn-box">
                                <a href="{{route('about')}}" class="main-slider__btn noile-btn">Get Started </a>
                            </div>
                        </div>
                        <a href='#' class="main-slider__circle-text">
                            <div class="main-slider__circle-text-bg" style="background-image: url('/assets/images/resources/circle-text-bg.png');"></div>
                            <div class="main-slider__curved-circle curved-circle">
                                <!-- curved-circle start-->
                                <div class="main-slider__curved-circle--item curved-circle--item" data-circle-text-options='{
                     "radius": 92,
                     "forceWidth": true,
                     "forceHeight": true}'>
                                    . tech solutions for your business
                                </div>
                            </div><!-- curved-circle end-->
                        </a><!-- /.main-slider__circle-text -->
                    </div>
                    <div class="main-slider__shape-box">
                        <svg class="main-slider__shape-one" xmlns="http://www.w3.org/2000/svg" width="409" height="639" viewBox="0 0 409 639" fill="none">
                            <path d="M600.4 790L0 0H142.2L750.5 790H600.4Z" />
                        </svg>
                        <svg class="main-slider__shape-two" xmlns="http://www.w3.org/2000/svg" width="266" height="254" viewBox="0 0 266 254" fill="none">
                            <path d="M457.7 405H307.8L-0.000152588 0H149.85L457.7 405Z" />
                        </svg>
                    </div><!-- /.main-slider__shape-box -->
                </div>
                <div class="main-slider__slide main-slider__slide-one item">
                    <div class="main-slider__bg" style="background-image: url('/assets/images/backgrounds/slider-1-2.jpg')">
                        <div class="main-slider__vartical-line-wrap">
                            <span class="main-slider__vartical-text slide-title__vartical-text">Networking &
                                Cyber Security</span>
                            <div class="main-slider__vartical-line main-slider__vartical-line--one"></div>
                            <div class="main-slider__vartical-line main-slider__vartical-line--two"></div>
                            <div class="main-slider__vartical-line main-slider__vartical-line--three"></div>
                        </div><!-- /.main-slider__vartical-line-wrap -->
                    </div> <!-- /.Slide Two BG -->
                    <div class="main-slider__container container">
                        <div class="main-slider__circle"></div><!-- /.main-slider__circle -->
                        <div class="main-slider__content slide-title">
                            <h1 class="main-slider__title slide-title__heading">IT Consultancy</h1>
                            <div class="main-slider__desc-wrap slide-title__desc-wrap">
                                <span class="main-slider__arrow icon-arrow-right-2"></span>
                                <p class="main-slider__desc">We are a Digital Brand</p>
                            </div>
                            <div class="main-slider__btn-box slide-title__btn-box">
                                <a href="{{route('about')}}" class="main-slider__btn noile-btn">Get Started</a>
                            </div>
                        </div>
                        <a href='#' class="main-slider__circle-text">
                            <div class="main-slider__circle-text-bg" style="background-image: url('/assets/images/resources/circle-text-bg.png');"></div>
                            <div class="main-slider__curved-circle curved-circle">
                                <!-- curved-circle start-->
                                <div class="main-slider__curved-circle--item curved-circle--item" data-circle-text-options='{
                     "radius": 92,
                     "forceWidth": true,
                     "forceHeight": true}'>
                                    . tech solutions for your business
                                </div>
                            </div><!-- curved-circle end-->
                        </a><!-- /.main-slider__circle-text -->
                    </div>
                    <div class="main-slider__shape-box">
                        <svg class="main-slider__shape-one" xmlns="http://www.w3.org/2000/svg" width="409" height="639" viewBox="0 0 409 639" fill="none">
                            <path d="M600.4 790L0 0H142.2L750.5 790H600.4Z" />
                        </svg>
                        <svg class="main-slider__shape-two" xmlns="http://www.w3.org/2000/svg" width="266" height="254" viewBox="0 0 266 254" fill="none">
                            <path d="M457.7 405H307.8L-0.000152588 0H149.85L457.7 405Z" />
                        </svg>
                    </div><!-- /.main-slider__shape-box -->
                </div>
                <div class="main-slider__slide main-slider__slide-one item">
                    <div class="main-slider__bg" style="background-image: url('/assets/images/backgrounds/slider-1-3.jpg')">
                        <div class="main-slider__vartical-line-wrap">
                            <span class="main-slider__vartical-text slide-title__vartical-text">ICT &Hardware Engineering </span>
                            <div class="main-slider__vartical-line main-slider__vartical-line--one"></div>
                            <div class="main-slider__vartical-line main-slider__vartical-line--two"></div>
                            <div class="main-slider__vartical-line main-slider__vartical-line--three"></div>
                        </div><!-- /.main-slider__vartical-line-wrap -->
                    </div> <!-- /.Slide Three BG -->
                    <div class="main-slider__container container">
                        <div class="main-slider__circle"></div><!-- /.main-slider__circle -->
                        <div class="main-slider__content slide-title">
                            <h1 class="main-slider__title slide-title__heading">Web & Software <br> Development</h1>
                            <div class="main-slider__desc-wrap slide-title__desc-wrap">
                                <span class="main-slider__arrow icon-arrow-right-2"></span>
                                <p class="main-slider__desc">We are a Digital Brand</p>
                            </div>
                            <div class="main-slider__btn-box slide-title__btn-box">
                                <a href="{{route('about')}}" class="main-slider__btn noile-btn">Get Started</a>
                            </div>
                        </div>
                        <a href='#' class="main-slider__circle-text">
                            <div class="main-slider__circle-text-bg" style="background-image: url('/assets/images/resources/circle-text-bg.png');"></div>
                            <div class="main-slider__curved-circle curved-circle">
                                <!-- curved-circle start-->
                                <div class="main-slider__curved-circle--item curved-circle--item" data-circle-text-options='{
                     "radius": 92,
                     "forceWidth": true,
                     "forceHeight": true}'>
                                    . tech solutions for your business
                                </div>
                            </div><!-- curved-circle end-->
                        </a><!-- /.main-slider__circle-text -->
                    </div>
                    <div class="main-slider__shape-box">
                        <svg class="main-slider__shape-one" xmlns="http://www.w3.org/2000/svg" width="409" height="639" viewBox="0 0 409 639" fill="none">
                            <path d="M600.4 790L0 0H142.2L750.5 790H600.4Z" />
                        </svg>
                        <svg class="main-slider__shape-two" xmlns="http://www.w3.org/2000/svg" width="266" height="254" viewBox="0 0 266 254" fill="none">
                            <path d="M457.7 405H307.8L-0.000152588 0H149.85L457.7 405Z" />
                        </svg>
                    </div><!-- /.main-slider__shape-box -->
                </div>

            </div>

</section>
<!-- Main Slider End -->

<!-- About Two Start -->
<section class="about-two">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 order-lg-0 order-1 wow animated fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="about-two__img-wrap">
                            <div class="about-two__img-one-box">
                                <div class="about-two__img-one-box-inner">
                                    <img src="/assets/images/about/about-2-1.jpg" alt="about image" class="about-two__img-one">
                                </div>
                                <div class="about-two__img-one-text">
                                    <p class="about-two__img-one-title">10 Years <br> Experience</p>
                                </div>
                            </div>
                            <div class="about-two__img-two-box">
                                <div class="about-two__img-two-box-inner">
                                    <img src="/assets/images/about/about-2-2.jpg" alt="about image" class="about-two__img-two">
                                    <img src="/assets/images/about/about-2-3.png" alt="about image" class="about-two__img-three">
                                </div>
                                <div class="about-two__shape-box about-two__shape-box-two"></div>
                                <div class="about-two__shape-box about-two__shape-box-three"></div>
                                <div class="about-two__shape-box about-two__shape-box-four"></div>
                                <div class="about-two__shape-box about-two__shape-box-five"></div>
                            </div>
                            <div class="about-two__shape-box-wrap">
                                <div class="about-two__shape-box about-two__shape-box-one"></div>
                                <img src="/assets/images/shapes/about-shape-1-1.png" alt="about-shape" class="about-two__shape-one">
                                <img src="/assets/images/shapes/about-shape-1-2.png" alt="about-shape" class="about-two__shape-two">
                                <img src="/assets/images/shapes/about-shape-2-1.png" alt="about-shape" class="about-two__shape-three">
                            </div><!-- /.about-one__shape-box-wrap -->
                        </div><!-- /.about-one__img-box -->
                    </div>
                    <div class="col-lg-6 order-lg-1 order-0">
                        <div class="about-two__content sec-title">
                            <div class="sec-title__top-wrap">
                                <img src="/assets/images/resources/top-title-logo.png" alt="top-title-logo" width="30px;">
                                <p class="sec-title__top">About Company</p>
                            </div>
                            <h2 class="about-two__heading sec-title__heading">Blackbox Technology Systems Limited</h2>
                            <p class="about-two__desc">Welcome to Blackbox, a leading digital solutions firm driven by a team of dedicated ICT professionals with extensive experience in delivering top-tier ICT solutions and services. Our mission is to foster growth and innovation for corporate organizations, government agencies, and parastatals through exceptional technological expertise...</p>

                            <div class="main-slider__btn-box slide-title__btn-box">
                                <a href="{{route('about')}}" class="main-slider__btn noile-btn">Learn More +</a>
                            </div>

                        </div><!-- /.about-one__content -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
</section>
<!-- About Two End -->
<!-- Service Three Start -->
<section class="service-three-one service-three service-two service-one">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4">
                        <div class="service-three__sec-title sec-title">
                            <div class="sec-title__top-wrap">
                                <img src="/assets/images/resources/top-title-logo.png" alt="top-title-logo" width="30px;">
                                <p class="sec-title__top">Our Services</p>
                            </div>
                            <h2 class="service-three-one__heading sec-title__heading">we provide Exceptional Service</h2>
                            <p class="service-three-one__desc">We are dedicated to providing top-tier solutions that drive your success. delivering innovative, reliable, and efficient services tailored to your unique needs.</p>
                            <div class="service-three-one__item-btn-box service-three__item-btn-box service-two__item">
                                <a href="{{route('services')}}" class="service-three__item-btn">
                                    <span> View All <span class="icon-arrow-right-2"></span> <br> </span>
                                </a>
                            </div><!-- /.service-two__item -->
                        </div><!-- /.service-three__sec-title -->
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="service-three-one__inner-container container-fluid">
                            <div class="row gx-4 gy-4 gy-md-0">
                                <a href="{{route('services')}}" class="col-xl-4 col-md-6 service-three__col service-two__col wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <div class="service-three__item service-two__item">
                                        <div class="service-two__icon-box">
                                            <svg class="service-three__icon service-two__icon" xmlns="http://www.w3.org/2000/svg" width="100" height="101" viewBox="0 0 100 101" fill="none">
                                                <circle cx="50" cy="50.0066" r="49.5" />
                                                <path d="M67.5 50.0066C67.5 63.7267 63.7175 76.1258 57.6282 85.0808C51.537 94.0384 43.1743 99.5066 34 99.5066C24.8257 99.5066 16.463 94.0384 10.3718 85.0808C4.28248 76.1258 0.5 63.7267 0.5 50.0066C0.5 36.2864 4.28248 23.8873 10.3718 14.9324C16.463 5.97483 24.8257 0.506592 34 0.506592C43.1743 0.506592 51.537 5.97483 57.6282 14.9324C63.7175 23.8873 67.5 36.2864 67.5 50.0066Z" />
                                                <path d="M46.5 50.0066C46.5 63.757 43.8794 76.1813 39.6645 85.1492C35.431 94.1566 29.6816 99.5066 23.5 99.5066C17.3184 99.5066 11.569 94.1566 7.3355 85.1492C3.12057 76.1813 0.5 63.757 0.5 50.0066C0.5 36.2561 3.12057 23.8319 7.3355 14.8639C11.569 5.85657 17.3184 0.506592 23.5 0.506592C29.6816 0.506592 35.431 5.85657 39.6645 14.8639C43.8794 23.8319 46.5 36.2561 46.5 50.0066Z" />
                                                <path d=" M22.5 50.0066C22.5 63.7875 21.2148 76.2482 19.1445
                                            85.2499C18.1083 89.7547 16.8817 93.3658 15.5371 95.8385C14.8646 97.0751
                                            14.1752 98.0034 13.4853 98.6172C12.7985 99.2283 12.1367 99.5066 11.5
                                            99.5066C10.8633 99.5066 10.2015 99.2283 9.5147 98.6172C8.8248 98.0034
                                            8.13539 97.0751 7.46294 95.8385C6.11834 93.3658 4.89167 89.7547 3.85555
                                            85.2499C1.78516 76.2482 0.5 63.7875 0.5 50.0066C0.5 36.2257 1.78516 23.765
                                            3.85555 14.7633C4.89167 10.2585 6.11834 6.64739 7.46294 4.1747C8.13539
                                            2.93808 8.8248 2.00977 9.5147 1.39597C10.2015 0.784908 10.8633 0.506592 11.5
                                            0.506592C12.1367 0.506592 12.7985 0.784908 13.4853 1.39597C14.1752 2.00977
                                            14.8646 2.93808 15.5371 4.1747C16.8817 6.64739 18.1083 10.2585 19.1445
                                            14.7633C21.2148 23.765 22.5 36.2257 22.5 50.0066Z" />
                                            </svg>
                                        </div><!-- /.service-two__icon-box -->
                                        <h3 class="service-three__title service-two__title">IT Consultancy Services
                                        </h3>
                                    </div><!-- /.service-two__item -->
                                </a>
                                <a href="{{route('services')}}" class="col-xl-4 col-md-6 service-three__col service-two__col wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                    <div class="service-three__item service-two__item">
                                        <div class="service-two__icon-box">
                                            <svg class="service-three__icon service-two__icon" xmlns="http://www.w3.org/2000/svg" width="101" height="102" viewBox="0 0 101 102" fill="none">
                                                <path d="M0.5 55.0909V1.18101C0.5 0.808539 0.801947 0.506592 1.17442 0.506592H36.645C37.0174 0.506592 37.3194 0.808538 37.3194 1.18101V41.602C37.3194 41.7813 37.2479 41.9533 37.1208 42.0799L23.5724 55.5689C23.446 55.6947 23.2749 55.7654 23.0965 55.7654H1.17442C0.801948 55.7654 0.5 55.4634 0.5 55.0909ZM0.5 99.8322V64.5275C0.5 64.155 0.801946 63.8531 1.17442 63.8531H40.449C40.6273 63.8531 40.7984 63.9237 40.9248 64.0496L55.3631 78.4245C55.4902 78.5511 55.5617 78.7231 55.5617 78.9025V99.8322C55.5617 100.205 55.2597 100.507 54.8873 100.507H1.17442C0.80195 100.507 0.5 100.205 0.5 99.8322ZM63.4343 58.9333L78.3175 44.1154C78.4439 43.9895 78.615 43.9189 78.7933 43.9189H99.8256C100.198 43.9189 100.5 44.2208 100.5 44.5933V99.8322C100.5 100.205 100.198 100.507 99.8256 100.507H63.9101C63.5376 100.507 63.2357 100.205 63.2357 99.8322V59.4112C63.2357 59.2318 63.3071 59.0599 63.4343 58.9333ZM100.5 1.18101V36.4857C100.5 36.8581 100.198 37.1601 99.8256 37.1601H60.1061C59.9277 37.1601 59.7566 37.0894 59.6303 36.9636L45.192 22.5887C45.0649 22.4621 44.9934 22.2901 44.9934 22.1107V1.18101C44.9934 0.80854 45.2953 0.506592 45.6678 0.506592H99.8256C100.198 0.506592 100.5 0.808542 100.5 1.18101ZM21.814 28.1926C21.814 30.511 19.9346 32.3903 17.6163 32.3903C15.298 32.3903 13.4186 30.511 13.4186 28.1926C13.4186 25.8743 15.298 23.995 17.6163 23.995C19.9346 23.995 21.814 25.8743 21.814 28.1926ZM17.6163 33.3903C20.4869 33.3903 22.814 31.0632 22.814 28.1926C22.814 25.322 20.4869 22.995 17.6163 22.995C14.7457 22.995 12.4186 25.322 12.4186 28.1926C12.4186 31.0632 14.7457 33.3903 17.6163 33.3903ZM79.3605 18.7973C79.3605 21.1156 77.4811 22.995 75.1628 22.995C72.8445 22.995 70.9651 21.1156 70.9651 18.7973C70.9651 16.479 72.8445 14.5996 75.1628 14.5996C77.4811 14.5996 79.3605 16.479 79.3605 18.7973ZM75.1628 23.995C78.0334 23.995 80.3605 21.6679 80.3605 18.7973C80.3605 15.9267 78.0334 13.5996 75.1628 13.5996C72.2922 13.5996 69.9651 15.9267 69.9651 18.7973C69.9651 21.6679 72.2922 23.995 75.1628 23.995ZM88.7558 77.5182C88.7558 79.8365 86.8764 81.7159 84.5581 81.7159C82.2398 81.7159 80.3605 79.8365 80.3605 77.5182C80.3605 75.1999 82.2398 73.3205 84.5581 73.3205C86.8764 73.3205 88.7558 75.1999 88.7558 77.5182ZM84.5581 82.7159C87.4287 82.7159 89.7558 80.3888 89.7558 77.5182C89.7558 74.6476 87.4287 72.3205 84.5581 72.3205C81.6875 72.3205 79.3605 74.6476 79.3605 77.5182C79.3605 80.3888 81.6875 82.7159 84.5581 82.7159ZM26.5116 82.2159C26.5116 84.5342 24.6323 86.4136 22.314 86.4136C19.9956 86.4136 18.1163 84.5342 18.1163 82.2159C18.1163 79.8976 19.9956 78.0182 22.314 78.0182C24.6323 78.0182 26.5116 79.8976 26.5116 82.2159ZM22.314 87.4136C25.1845 87.4136 27.5116 85.0865 27.5116 82.2159C27.5116 79.3453 25.1845 77.0182 22.314 77.0182C19.4434 77.0182 17.1163 79.3453 17.1163 82.2159C17.1163 85.0865 19.4434 87.4136 22.314 87.4136Z" />
                                            </svg>
                                        </div><!-- /.service-two__icon-box -->
                                        <h3 class="service-three__title service-two__title">Database Design & Development
                                        </h3>
                                    </div><!-- /.service-two__item -->
                                </a>
                                <div class="col-xl-4 col-md-6 service-two__col service-three__col--four wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                    <div class="service-two__item">
                                        <a href="{{route('services')}}" class="service-three__circle-text service-one__circle-text">
                                            <div class="service-one__curved-circle curved-circle">
                                                <!-- curved-circle start-->
                                                <div class="service-one__curved-circle--item curved-circle--item" data-circle-text-options='{
                                        "radius": 92,
                                        "forceWidth": true,
                                        "forceHeight": true}'>
                                                    . Digital Concept Design
                                                </div>
                                            </div><!-- curved-circle end-->
                                        </a><!-- /.main-slider__circle-text -->
                                    </div><!-- /.service-two__item -->
                                </div>
                                <a href="{{route('services')}}" class="col-xl-4 col-md-6 service-two__col service-three__col--six wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <div class="service-two__item">
                                        <img src="/assets/images/resources/s-letter.png" alt="" class="service-two__letter-s">
                                        <h3 class="service-three__title service-two__title">Social Media Strategy
                                        </h3>
                                    </div><!-- /.service-two__item -->
                                </a>
                                <a href="{{route('services')}}" class="col-xl-4 col-md-6 service-three__col service-two__col wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                    <div class="service-three__item service-two__item">
                                        <div class="service-two__icon-box">
                                            <svg class="service-three__icon service-two__icon" xmlns="http://www.w3.org/2000/svg" width="102" height="102" viewBox="0 0 102 102" fill="none">
                                                <path d="M1 46.7931L23.1488 36.3483C23.4525 36.2051 23.8077 36.2238 24.0946 36.3981L31.4054 40.8402M1 46.7931L20.9324 56.0628M1 46.7931V74.565C1 74.9337 1.20288 75.2725 1.52791 75.4466L20.9324 85.8381M41.2027 46.7931L20.9324 56.0628M41.2027 46.7931L31.4054 40.8402M41.2027 46.7931V65.3012M20.9324 56.0628V85.8381M20.9324 85.8381L33.0946 80.0796M51.3378 58.5909V21.2313M51.3378 58.5909L63.5 65.8381M51.3378 58.5909L41.2027 65.3012M33.0946 70.6695L51.3378 78.5347M33.0946 70.6695V80.0796M33.0946 70.6695L41.2027 65.3012M51.3378 101.007L33.5608 89.784C33.2706 89.6008 33.0946 89.2816 33.0946 88.9384V80.0796M51.3378 101.007L71.0545 91.1704C71.3937 91.0012 71.6081 90.6547 71.6081 90.2756V80.7819M51.3378 101.007V78.5347M71.6081 70.6695L51.3378 78.5347M71.6081 70.6695L63.5 65.8381M71.6081 70.6695V80.7819M31.4054 12.8043L50.8327 1.30555C51.1446 1.12097 51.5319 1.11955 51.8451 1.30184L71.6081 12.8043M31.4054 12.8043L51.3378 21.2313M31.4054 12.8043V40.8402M71.6081 12.8043L51.3378 21.2313M71.6081 12.8043V32.1864M71.6081 32.1864L63.5 37.5234M71.6081 32.1864L81.5629 25.5113C81.88 25.2987 82.2906 25.2852 82.621 25.4765L101 36.119M63.5 37.5234L82.0811 46.7931M63.5 37.5234V65.8381M82.0811 46.7931L101 36.119M82.0811 46.7931V84.1527M101 36.119V74.5319C101 74.9179 100.778 75.2695 100.429 75.4351L82.0811 84.1527M82.0811 84.1527L71.6081 80.7819" />
                                            </svg>
                                        </div><!-- /.service-two__icon-box -->
                                        <h3 class="service-three__title service-two__title">Training
                                        </h3>
                                    </div><!-- /.service-two__item -->
                                </a>
                                <a href="{{route('services')}}" class="col-xl-4 col-md-6 service-three__col service-two__col wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                    <div class="service-three__item service-two__item">
                                        <div class="service-three__icon service-two__icon-box">
                                            <svg class="service-two__icon" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                                <path d="M1 1.00659V91.1666L24.7097 64.5106V26.8786H62.6452L81.6129 1.00659H1Z" />
                                                <path d="M37.3548 73.9186L17.5968 99.0066H99V8.84659L74.5 34.7186V73.9186H37.3548Z" />
                                                <path d="M37.3548 37.0706V60.5906H62.6452V37.0706H37.3548Z" />
                                            </svg>
                                        </div><!-- /.service-two__icon-box -->
                                        <h3 class="service-three__title service-two__title">Web & Software Development</h3>
                                    </div><!-- /.service-two__item -->
                                </a>
                                <div class="col-md-6 service-three-one__col-btn service-two__col wow animated fadeInUp" data-wow-delay="0.7s" data-wow-duration="1500ms">
                                    <div class="service-three__item-btn-box service-two__item">
                                        <a href="services.html" class="service-three__item-btn">
                                            <span> View <span class="icon-arrow-right-2"></span> <br> All Services</span>
                                        </a>
                                    </div><!-- /.service-two__item -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.service-three-one__inner-container -->
                    </div>
                </div><!-- /.row -->

            </div><!-- /.container -->
</section>
 <!-- Service Three Start -->
<!-- Get Work Two Start -->
<section class="get-work-two get-work-one">
            <div class="get-work-one__wrapper">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-7">
                            <div class="get-work-one__sec-title sec-title">
                                <h2 class="get-work-one__heading sec-title__heading">Have a project in mind?  Let’s get to work.</h2>
                                <div class="get-work-one__shape-wrap">
                                    <img src="/assets/images/shapes/get-work-shape-1-1.png" alt="get-work-shape" class="get-work-one__border-one">
                                    <img src="/assets/images/shapes/get-work-shape-1-2.png" alt="get-work-shape" class="get-work-one__border-two">
                                    <img src="/assets/images/shapes/get-work-ornament-1-1.png" alt="get-work-ornament" class="get-work-one__ornament-one">
                                    <img src="/assets/images/shapes/get-work-ornament-1-2.png" alt="get-work-ornament" class="get-work-one__ornament-two">
                                </div><!-- /.get-work-one__shape-wrap -->
                            </div><!-- /.get-work-one__sec-title -->
                        </div>
                        <div class="col-lg-3">
                            <div class="get-work-one__video">
                                <a href="{{route('contact')}}" class="get-work-one__video-btn video-popup">
                                    <span class="get-work-one__video-btn-icon icon-play"></span>
                                    <span class="get-work-one__video-btn-border"></span>
                                    <span class="get-work-one__video-btn-border"></span>
                                    <span class="get-work-one__video-btn-border"></span>
                                    <span class="get-work-one__video-btn-border"></span>
                                </a>
                            </div><!-- /.get-work-one__video -->
                        </div>
                    </div><!-- /.row -->
                    <div class="get-work-one__shap-box-one">
                        <svg class="get-work-one__shape-two" xmlns="http://www.w3.org/2000/svg" width="489" height="187" viewBox="0 0 489 187" fill="none">
                            <path d="M217.819 -96.2565L259.636 -150.636L166.952 -296L92.8061 -295.748L217.819 -96.2565Z" />
                            <path d="M164.679 91.4988H247.174L489 -225.925L405.049 -224.108L164.679 91.4988Z" />
                            <path d="M91.9444 187L459.611 -295.748H371.225L0 187H91.9444Z" />
                        </svg>
                        <svg class="get-work-one__shape-three" xmlns="http://www.w3.org/2000/svg" width="489" height="219" viewBox="0 0 489 219" fill="none">
                            <path d="M217.819 199.743L259.636 145.364L166.952 0L92.8061 0.251557L217.819 199.743Z" />
                            <path d="M164.679 387.499H247.174L489 70.0753L405.049 71.8923L164.679 387.499Z" />
                            <path d="M91.9444 483L459.611 0.251669H371.225L0 483H91.9444Z" />
                        </svg>
                    </div><!-- /.get-work-one__shap-box-one -->
                </div><!-- /.container -->
            </div><!-- /.get-work-one__wrapper -->
            <div class="get-work-one__shape-box-two">
                <svg class="get-work-one__shape-one" xmlns="http://www.w3.org/2000/svg" width="220" height="219" viewBox="0 0 220 219" fill="none">
                    <path d="M98.5501 91.9998L75.0335 109.136L145.728 218.98L179 219L98.5501 91.9998Z" />
                    <path d="M164.16 42.9998H109.44L0.000289917 187H53.2803L164.16 42.9998Z" />
                    <path d="M179.69 -0.000244141L13.2502 219H52.6702L221.3 -0.000244141H179.69Z" />
                </svg>
                <svg class="get-work-one__shape-four" xmlns="http://www.w3.org/2000/svg" width="222" height="219" viewBox="0 0 222 219" fill="none">
                    <path d="M122.631 126.63L146.102 109.524L75.5552 -0.11417L42 -5.08002e-05L122.631 126.63Z" />
                    <path d="M57.14 175.676H111.86L221.3 31.6757H168.02L57.14 175.676Z" />
                    <path d="M41.6101 219L208 0H168L6.10352e-05 219H41.6101Z" />
                </svg>
            </div><!-- /.get-work-one__shape-box-two -->
</section>
<!-- Get Work Two End -->
<!-- Testimonial One Start -->
<section class="testimonial-one-slider testimonial-one testimonial">
            <div class="container">
                <div class="testimonial-one__sec-title sec-title">
                    <div class="testimonial-one__top-wrap sec-title__top-wrap">
                        <img src="/assets/images/resources/top-title-logo.png" alt="top-title-logo" width="30px;">
                        <p class="sec-title__top">Our Testimonials</p>
                    </div>
                    <h2 class="testimonial-one__heading sec-title__heading">What Our Client Say</h2>
                </div><!-- /.testimonial-one__sec-title -->
                <div class="testimonial-one__carousel noile-owl__carousel owl-theme owl-carousel" data-owl-options='{
                    "items": 2,
                    "margin": 24,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "autoplayHoverPause": true,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items": 1
                        },
                        "992":{
                            "items": 2
                        }
                    }
                    }'>
                    <div class="testimonial-one__carousel-item item">
                        <div class="testimonial__item">
                            <div class="testimonial__info">
                                <div class="testimonial__img-box">
                                    <img src="/assets/images/testimonial/testimonial.png" alt="Gbenga Babad" class="testimonial__img" style="width: 100% !important">
                                </div><!-- /.testimonial__img-box -->
                                <div class="testimonial__name-box">
                                    <h3 class="testimonial__name">Gbenga Babad</h3>
                                    <div class="testimonial__review-box" style="display: block">
                                        <div class="testimonial__review-text" style="margin-top: 10px;">
                                            <p style="line-height: 5px; color: #ffc107;">Group Head ICT</p>
                                            <p style="line-height: 5px">Federal Mortgage Bank of Nigeria</p>
                                        </div>
                                    </div><!-- /.testimonial__review-box -->
                                </div><!-- /.testimonial__name-box -->
                            </div><!-- /.testimonial__info -->
                            <div class="testimonial__text-box">
                                <p class="testimonial__text">BlackBox Technolgy Systems Ltd has provided us with a secure, flexible website and back-office solution, that involves non-
                                    members, members and operations in the entire membership lifecycle from the application process to event registration to
                                    profile updates, allowing us to better serve our members while leveraging new technology for the future. <br>
                                    <span style="margin-top: 10px">“Working with BlackBox was a pleasure. We always felt that
                                        they were working with us rather than for us, and were very accommodating of our design changes throughout the project.”
                                        </span>
                                    </p>
                            </div><!-- /.testimonial__text-box -->
                            <div class="testimonial__footer">
                                <img src="/assets/images/resources/testimonial-item-logo.png" alt="logo" class="testimonial__logo">
                                <div class="testimonial__quote-box">
                                    <span class="testimonial__quote-icon icon-quote"></span>
                                    <span class="testimonial__quote-icon icon-quote"></span>
                                </div>
                            </div><!-- /.testimonial__footer -->
                            <div class="testimonial__shape-box">
                                <div class="testimonial__shape-one testimonial__shape-one--slide"></div>
                                <div class="testimonial__shape-two testimonial__shape-two--slide"></div>
                                <div class="testimonial__shape-three testimonial__shape-three--slide"></div>
                                <div class="testimonial__shape-four"></div>
                            </div><!-- /.testimonial__shape-box -->
                        </div><!-- /.testimonial__item -->
                    </div><!-- /.testimonial-one__carousel-item-->
                    <div class="testimonial-one__carousel-item item">
                        <div class="testimonial__item">
                            <div class="testimonial__info">
                                <div class="testimonial__img-box">
                                    <img src="/assets/images/testimonial/testimonial2.png" alt="Alh. Idris Othman" class="testimonial__img" style="width: 100% !important">
                                </div><!-- /.testimonial__img-box -->
                                <div class="testimonial__name-box">
                                    <h3 class="testimonial__name">Alh. Idris Othman</h3>
                                    <div class="testimonial__review-box" style="display: block">
                                        <div class="testimonial__review-text" style="margin-top: 10px;">
                                            <p style="line-height: 5px; color: #ffc107;">Managing Director</p>
                                            <p style="line-height: 5px">System Property Development Consortium (SPDC)</p>
                                        </div>
                                    </div><!-- /.testimonial__review-box -->
                                </div><!-- /.testimonial__name-box -->
                            </div><!-- /.testimonial__info -->
                            <div class="testimonial__text-box">
                                <p class="testimonial__text">From my (pleasant) experience with BlackBox the one thing you are definitely not is the typical consulting partner. When most people think of consulting they think “toss over a requirements and maybe a functional spec document and get back working software”. <br>
                                    <span style="margin-top: 10px">From day one and true to this day, you guys have been more of a consulting shop rather than a “code shop”, that's why we've been able to sustain a long and healthy relationship and actually get good work done without any re-do on our end and without any misunderstandings.</span>
                                    </p>
                            </div><!-- /.testimonial__text-box -->
                            <div class="testimonial__footer">
                                <img src="/assets/images/resources/testimonial-item-logo.png" alt="logo" class="testimonial__logo">
                                <div class="testimonial__quote-box">
                                    <span class="testimonial__quote-icon icon-quote"></span>
                                    <span class="testimonial__quote-icon icon-quote"></span>
                                </div>
                            </div><!-- /.testimonial__footer -->
                            <div class="testimonial__shape-box">
                                <div class="testimonial__shape-one testimonial__shape-one--slide"></div>
                                <div class="testimonial__shape-two testimonial__shape-two--slide"></div>
                                <div class="testimonial__shape-three testimonial__shape-three--slide"></div>
                                <div class="testimonial__shape-four"></div>
                            </div><!-- /.testimonial__shape-box -->
                        </div><!-- /.testimonial__item -->
                    </div><!-- /.testimonial-one__carousel-item-->
                </div><!-- /.case-study-one__carousel-->
            </div><!-- /.container -->
</section>
<!-- Testimonial One Start -->
<div class="client-carousel @@extraClassName d-flex justify-content-center" style="padding-bottom: 0px">
    <div class="container">
        <div class="testimonial-one__sec-title sec-title">
            <div class="testimonial-one__top-wrap sec-title__top-wrap">
                <img src="/assets/images/resources/top-title-logo.png" alt="top-title-logo" width="30px;">
                <p class="sec-title__top">Our Clients</p>
            </div>
            <h2 class="testimonial-one__heading sec-title__heading">companies we worked with</h2>
        </div>
        <div class="client-carousel__one noile-owl__carousel cleenhearts-owl__carousel--basic-nav owl-theme owl-carousel" data-owl-options='{
    "items": 5,
    "margin": 65,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": 6000,
    "nav":true,
    "dots":false,
    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
    "responsive":{
        "0":{
            "items": 2,
            "margin": 50
        },
        "360":{
            "items": 3,
            "margin": 40
        },
        "575":{
            "items": 4,
            "margin": 40
        },
        "768":{
            "items": 4,
            "margin": 80
        },
        "992":{
            "items": 5,
            "margin": 100
        },
        "1200":{
            "items": 6,
            "margin": 134
        }
    }
    }'>
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/clients/client-1.png')}}" alt="brand" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/clients/client-1.png')}}" alt="brand" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/clients/client-2.png')}}" alt="brand" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/clients/client-2.png')}}" alt="brand" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/clients/client-3.png')}}" alt="brand" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/clients/client-3.png')}}" alt="brand" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/clients/client-4.png')}}" alt="brand" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/clients/client-4.png')}}" alt="brand" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/clients/client-5.png')}}" alt="brand" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/clients/client-5.png')}}" alt="brand" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/clients/client-6.png')}}" alt="brand" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/clients/client-6.png')}}" alt="brand" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/clients/client-7.png')}}" alt="brand" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/clients/client-7.png')}}" alt="brand" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/clients/client-8.png')}}" alt="brand" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/clients/client-8.png')}}" alt="brand" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/clients/client-9.png')}}" alt="brand" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/clients/client-9.png')}}" alt="brand" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->
<!-- Solution One Start -->
<section class="solution-one">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-6 col-xl-7">
                        <div class="solution-one__content sec-title">
                            <div class="sec-title__top-wrap">
                                <img src="/assets/images/resources/top-title-logo.png" alt="top-title-logo" width="30px;">
                                <p class="sec-title__top">What we do!</p>
                            </div>
                            <h2 class="solution-one__heading sec-title__heading">Unlock exceptional solutions crafted for your success</h2>
                            <div class="solution-one__main-tab-box tabs-box">
                                <ul class="tab-buttons">
                                    <li data-tab="#MarketingSolution" class="tab-btn active-btn"><span>Web & Software Development</span></li>
                                    <li data-tab="#BusinessSolution" class="tab-btn"><span>IT Consultancy</span></li>
                                    <li data-tab="#Business-Growth" class="tab-btn"><span>Database Design & Development</span></li>
                                </ul><!-- solution-tab -->
                                <div class="tabs-content">
                                    <!--Marketing Solution-tab-start-->
                                    <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="MarketingSolution" style="display: block;">
                                        <p class="solution-one__service-desc">From smart customization of the
                                            pre-developed platforms to full-cycle custom software development along
                                            the client's vision, BlackBox is an expe- rienced development partner to deliver cost-effective and reliable custom soft- ware solutions that match your unique requirements.
                                            </p>
                                        <div class="solution-one__service-wrap">
                                            <div class="solution-one__service">
                                                <div class="solution-one__service-icon solution-one__service-icon--one">
                                                    <i class="icofont-ui-check"></i>
                                                </div>
                                                <p class="solution-one__service-title">Custom Software</p>
                                            </div>
                                            <div class="solution-one__service">
                                                <div class="solution-one__service-icon solution-one__service-icon--two">
                                                    <i class="icofont-ui-check"></i>
                                                </div>
                                                <p class="solution-one__service-title">Web Applications</p>
                                            </div>
                                        </div><!-- /.solution-one__service-wrap -->
                                    </div>
                                    <!--Marketing Solution-tab-end-->
                                    <!--Business Growth-tab-start-->
                                    <div class="tab fadeInUp animated" data-wow-delay="200ms" id="Business-Growth" style="display: none;">
                                        <p class="solution-one__service-desc">Our knowledge of both business and technology means you can count on us to take your individual needs into
                                            account. An experienced IT Consultant can make the difference between suc- cess and failure.
                                            </p>
                                        <div class="solution-one__service-wrap">
                                            <div class="solution-one__service">
                                                <div class="solution-one__service-icon solution-one__service-icon--one">
                                                    <i class="icofont-ui-check"></i>
                                                </div>
                                                <p class="solution-one__service-title">Software Development</p>
                                            </div>
                                            <div class="solution-one__service">
                                                <div class="solution-one__service-icon solution-one__service-icon--two">
                                                    <i class="icofont-ui-check"></i>
                                                </div>
                                                <p class="solution-one__service-title">Database Solutions</p>
                                            </div>
                                        </div><!-- /.solution-one__service-wrap -->
                                    </div>
                                    <!--Business Growth-tab-end-->

                                    <!--Business Solution-tab-start-->
                                    <div class="tab fadeInUp animated" data-wow-delay="200ms" id="BusinessSolution" style="display: none;">
                                        <p class="solution-one__service-desc">Database experts will solve your com- plex business problems with the help of Database Management systems like Oracle and SQL Server.Database moni- toring, maintenance, and troubleshoot- ing are critical to BlackBox consulting support services.</p>
                                        <div class="solution-one__service-wrap">
                                            <div class="solution-one__service">
                                                <div class="solution-one__service-icon solution-one__service-icon--one">
                                                    <i class="icofont-ui-check"></i>
                                                </div>
                                                <p class="solution-one__service-title">System Design </p>
                                            </div>
                                            <div class="solution-one__service">
                                                <div class="solution-one__service-icon solution-one__service-icon--two">
                                                    <i class="icofont-ui-check"></i>
                                                </div>
                                                <p class="solution-one__service-title">Data Center Solutions</p>
                                            </div>
                                        </div><!-- /.solution-one__service-wrap -->
                                    </div>
                                    <!--Business Solution-tab-end-->
                                </div>
                            </div>
                            <!-- /.olution-one__main-tab-box -->
                        </div><!-- /.solution-one__content -->
                    </div>
                    <div class="col-xxl-6 col-xl-5 wow animated fadeInRight" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="solution-one__img-col">
                            <div class="solution-one__img-wrap">
                                <img src="/assets/images/solution/solution-1-1.jpg" alt="solution" class="solution-one__img">
                                <div class="solution-one__icon-wrap">
                                    <img src="/assets/images/solution/solution-icon-1-1.png" alt="solution-icon" class="solution-one__icon">
                                </div>
                                <div class="solution-one__border-box">
                                    <div class="solution-one__border solution-one__border--one"></div>
                                    <div class="solution-one__border solution-one__border--two"></div>
                                    <div class="solution-one__border solution-one__border--three"></div>
                                    <div class="solution-one__border solution-one__border--four"></div>
                                    <div class="solution-one__border solution-one__border--five"></div>
                                    <div class="solution-one__border solution-one__border--six"></div>
                                    <div class="solution-one__border solution-one__border--seven"></div>
                                    <div class="solution-one__border solution-one__border--eight"></div>
                                    <div class="solution-one__border solution-one__border--nine"></div>
                                    <div class="solution-one__border solution-one__border--ten"></div>
                                </div><!-- /.solution-one__border-box -->
                                <div class="solution-one__shape-box">
                                    <div class="solution-one__shape solution-one__shape-one"></div>
                                    <div class="solution-one__shape solution-one__shape-two"></div>
                                    <div class="solution-one__shape solution-one__shape-three"></div>
                                    <div class="solution-one__shape solution-one__shape-four"></div>
                                    <div class="solution-one__shape solution-one__shape-five"></div>
                                    <div class="solution-one__shape solution-one__shape-six"></div>
                                    <div class="solution-one__shape solution-one__shape-seven"></div>
                                </div><!-- /.solution-one__shape-box -->
                            </div>
                        </div><!-- /.solution-one__img-wrap -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
</section>
<!-- Solution One End -->
<div class="client-carousel @@extraClassName d-flex justify-content-center" style="padding-bottom: 100px; padding-top: 50px;">
    <div class="container">
        <div class="testimonial-one__sec-title sec-title">
            <div class="testimonial-one__top-wrap sec-title__top-wrap">
                <img src="/assets/images/resources/top-title-logo.png" alt="top-title-logo" width="30px;">
                <p class="sec-title__top">Our Partners</p>
            </div>
            <h2 class="testimonial-one__heading sec-title__heading">Companies we work with</h2>
        </div>
        <div class="client-carousel__one noile-owl__carousel cleenhearts-owl__carousel--basic-nav owl-theme owl-carousel" data-owl-options='{
    "items": 5,
    "margin": 65,
    "smartSpeed": 700,
    "loop":true,
    "autoplay": 6000,
    "nav":true,
    "dots":false,
    "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
    "responsive":{
        "0":{
            "items": 2,
            "margin": 50
        },
        "360":{
            "items": 3,
            "margin": 40
        },
        "575":{
            "items": 4,
            "margin": 40
        },
        "768":{
            "items": 4,
            "margin": 80
        },
        "992":{
            "items": 5,
            "margin": 100
        },
        "1200":{
            "items": 6,
            "margin": 134
        }
    }
    }'>
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/partners/partner-1.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/partners/partner-1.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/partners/partner-2.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/partners/partner-2.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/partners/partner-3.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/partners/partner-3.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/partners/partner-4.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/partners/partner-4.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
            <a href="#" class="client-carousel__item">
                <img src="{{asset('/assets/images/partners/partner-5.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__img">
                <img src="{{asset('/assets/images/partners/partner-5.png')}}" alt="brand" style="height: unset;" class="client-carousel__item__hover-img">
            </a><!-- /.owl-slide-item-->
        </div><!-- /.thm-owl__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->
 <!-- Clients One Start -->
 <div class="clients-one @@extraClassName" style="margin-bottom: 100px;">
    <div class="container">
        <div class="clients-one__wrapper container-fluid">
            <div class="clients-one__row row g-4">
                <div class="col-lg-5 col-xl-4">
                    <div class="clients-one__img-group">
                        <div class="clients-one__clients-info clients-one__clients-info--box">
                            <img src="/assets/images/clients/clients-1-1.png" alt="clients" class="clients-one__img">
                        </div>
                        <div class="clients-one__clients-info clients-one__clients-info--box">
                            <img src="/assets/images/clients/clients-1-2.png" alt="clients" class="clients-one__img">
                        </div>
                        <div class="clients-one__clients-info clients-one__clients-info--box">
                            <img src="/assets/images/clients/clients-1-3.png" alt="clients" class="clients-one__img">
                        </div>
                        <div class="clients-one__clients-info clients-one__clients-info--box">
                            <img src="/assets/images/clients/clients-1-4.png" alt="clients" class="clients-one__img">
                        </div>
                        <div class="clients-one__clients-info clients-one__clients-info--box">
                            <img src="/assets/images/clients/clients-1-5.png" alt="clients" class="clients-one__img">
                        </div>
                        <div class="clients-one__clients-info--box clients-one__clients-total">
                            <p class="clients-one__clients-total-text">25+ <br> Clients</p>
                        </div>
                        <img src="/assets/images/shapes/clients-shape-1-2.png" alt="clients-shape" class="clients-one__clients-shape-img-one">
                    </div><!-- /.clients-one__img-hroup -->
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="clients-one__text">
                        <p class="clients-one__info-text">Several Companies have already benefited from our expertise.
                            <a href="{{route('contact')}}" class="clients-one__info-link">Contact us today!</a></p>
                        <div class="clients-one__shape-box">
                            <img src="/assets/images/shapes/clients-shape-1-1.png" alt="clients-shape" class="clients-one__clients-shape-img-two">
                            <svg class="clients-one__shape-one" xmlns="http://www.w3.org/2000/svg" width="489" height="186" viewBox="0 0 489 186" fill="none">
                                <path d="M217.819 183.743L259.636 129.364L166.952 -16L92.8061 -15.7484L217.819 183.743Z" />
                                <path d="M164.679 371.499H247.174L489 54.0753L405.049 55.8923L164.679 371.499Z" />
                                <path d="M91.9444 467L459.611 -15.7483H371.225L0 467H91.9444Z" />
                            </svg>
                            <svg class="clients-one__shape-two" xmlns="http://www.w3.org/2000/svg" width="416" height="171" viewBox="0 0 416 171" fill="none">
                                <path d="M217.819 -112.257L259.636 -166.636L166.952 -312L92.8061 -311.748L217.819  -112.257Z" />
                                <path d="M164.679 75.4988H247.174L489 -241.925L405.049 -240.108L164.679 75.4988Z" />
                                <path d="M91.9444 171L459.611 -311.748H371.225L0 171H91.9444Z" />
                            </svg>
                        </div><!-- /.clients-one__shape-box -->
                    </div><!-- /.clients-one__text -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.clinets-wrapper -->
    </div><!-- /.container -->
</div>
<!-- Clients One End -->

</div>
@endsection
