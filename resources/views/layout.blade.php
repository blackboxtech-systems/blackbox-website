<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$activePage}} || Blackbox</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicons/site.webmanifest">
    <meta name="description" content="Blackbox ICT Company">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Water+Brush&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css">
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/vendors/noile-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/icofont/icofont.min.css">
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css">
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.css">
    <link rel="stylesheet" href="/assets/vendors/swiper/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/css/owl.theme.default.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/style.css?v=1.0">
</head>
<body>
<div class="preloader">
        <div class="preloader__image" style="background-image: url(/assets/images/loader.png);"></div>
        <!-- /.preloader__image -->
    </div>
    <!-- /.preloader -->
<div class="page-wrapper">
<header class="main-header">

            <div class="topbar-two topbar">
                <div class="topbar__shape-box">
                    <svg class="topbar__shape-one" xmlns="http://www.w3.org/2000/svg" width="48" height="50" viewBox="0 0 48 50" fill="none">
                        <path d="M10 50L48 0H39L0.5 50H10Z" />
                    </svg>
                    <svg class="topbar__shape-two" xmlns="http://www.w3.org/2000/svg" width="29" height="25" viewBox="0 0 29 25" fill="none">
                        <path d="M0.5 25H10L29 0H19.75L0.5 25Z" />
                    </svg>
                    <svg class="topbar__shape-three" xmlns="http://www.w3.org/2000/svg" width="48" height="50" viewBox="0 0 48 50" fill="none">
                        <path d="M38.5 0L0.5 50H9.5L48 0H38.5Z" />
                    </svg>
                    <svg class="topbar__shape-four" xmlns="http://www.w3.org/2000/svg" width="29" height="25" viewBox="0 0 29 25" fill="none">
                        <path d="M29 0H19.5L0.5 25H9.75L29 0Z" />
                    </svg>
                </div><!-- /.topbar-shape-box -->
                <div class="container">
                    <div class="topbar__left">

                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">

                        <div class="topbar__language topbar__right-item">


                        </div><!-- /.topbar__language -->
                        <div class="topbar-two__social social-list topbar__right-item">
                            <a href="#" class="topbar-two__social-link social-link">
                                <i class="icofont-facebook"></i>
                            </a>
                            <a href="#" class="topbar-two__social-link social-link">
                                <i class="icofont-twitter"></i>
                            </a>
                            <a href="#" class="topbar-two__social-link social-link">
                                <i class="icofont-instagram"></i>
                            </a>
                            <a href="#" class="topbar-two__social-link social-link">
                                <i class="icofont-pinterest"></i>
                            </a>
                        </div><!-- /.main-menu__social -->
                    </div><!-- /.topbar__left -->

                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu-two main-menu">
                <div class="container">
                    <div class="main-menu-two__left">
                        <div class="main-menu-two__logo">
                            <a href="index.html">
                                <img class="kdis-logo" alt="logo-light">
                            </a>
                        </div><!-- /.header__logo -->
                        <ul class="main-menu__list">
                            <li class="{{$activePage == 'Home' ? 'current' : ''}}">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="{{$activePage == 'About' ? 'current' : ''}}">
                                <a href="{{route('about')}}">About</a>
                            </li>
                            <li class="{{$activePage == 'Services' ? 'current' : ''}}">
                                <a href="{{route('services')}}">Services</a>
                            </li>
                            <li class="{{$activePage == 'Team' ? 'current' : ''}}">
                                <a href="{{route('team')}}">Team</a>
                            </li>
                            <li class="{{$activePage == 'Contact' ? 'current' : ''}}">
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div><!-- /.main-menu-two__left -->
                    <div class="main-menu-two__right">
                        <button type="button" class="main-menu-two__bar mobile-nav__toggler">
                            <span class="mobile-nav__toggler-bars"></span>
                            <span class="mobile-nav__toggler-bars"></span>
                            <span class="mobile-nav__toggler-bars"></span>
                        </button><!-- /.mobile-nav__toggler -->
                        <button type="button" class="sidebar-btn__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button><!-- /.sidebar-btn__toggler -->
                    </div><!-- /.main-menu-two__right -->
                </div><!-- /.container -->
            </nav><!-- /.main-menu-two -->
        </header><!-- /.main-header -->
</div>
<div class="stricky-header stricky-header-one stricked-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        @yield('content')


         <!-- Footer One Start -->
         <footer class="footer-one @@extraClassName">
            <div class="container">
                <div class="footer-one__row-one row gx-4 gy-5">
                    <div class="col-xxl-4 col-xl-3 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="footer-one__about">
                            <div class="footer-one__logo-box">
                                <a href="index.html">
                                    <img src="assets/images/logo-dark.png" alt="logo-dark" class="footer-one__logo">
                                </a>
                            </div>
                            <p class="footer-one__about-text">Where expertise meets innovation. Elevate your business with Blackbox Technologies, your trusted partner in ICT and technology</p>
                            <div class="mfooter-social__social social-list">
                                <a href="#" class="main-menu__social-link social-link">
                                    <i class="icofont-facebook"></i>
                                </a>
                                <a href="#" class="main-menu__social-link social-link">
                                    <i class="icofont-twitter"></i>
                                </a>
                                <a href="#" class="main-menu__social-link social-link">
                                    <i class="icofont-instagram"></i>
                                </a>
                                <a href="#" class="main-menu__social-link social-link">
                                    <i class="icofont-pinterest"></i>
                                </a>
                            </div>
                        </div><!-- /.footer-one__about -->
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="footer-one__link-wrap">
                            <h4 class="footer-one__title">About Us</h4>
                            <ul class="footer-one__link-list">
                                <li class="footer-one__link-item">
                                    <a href="#" class="footer-one__link">Home</a>
                                </li>
                                <li class="footer-one__link-item">
                                    <a href="#" class="footer-one__link">Services</a>
                                </li>
                                <li class="footer-one__link-item">
                                    <a href="#" class="footer-one__link">Team</a>
                                </li>
                                <li class="footer-one__link-item">
                                    <a href="#" class="footer-one__link">Contact</a>
                                </li>
                            </ul>
                        </div><!-- /.footer-one__link -->
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6 wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                        <div class="footer-one__link-wrap">
                            <h4 class="footer-one__title">Top Links</h4>
                            <ul class="footer-one__link-list">
                                <li class="footer-one__link-item">
                                    <a href="{{route('services')}}" class="footer-one__link">IT Consultancy</a>
                                </li>
                                <li class="footer-one__link-item">
                                    <a href="{{route('services')}}" class="footer-one__link">Web & Software Solutions</a>
                                </li>
                                <li class="footer-one__link-item">
                                    <a href="{{route('services')}}" class="footer-one__link">Database Design & Development</a>
                                </li>
                                <li class="footer-one__link-item">
                                    <a href="{{route('services')}}" class="footer-one__link">Social Media Strategy</a>
                                </li>

                            </ul>
                        </div><!-- /.footer-one__link -->
                    </div>
                    <div class="col-xl-3 col-lg-7 col-md-4 ms-xxl-auto wow animated fadeInUp" data-wow-delay="0.7s" data-wow-duration="1500ms">
                        <div class="footer-one__info-wrap">
                            <h4 class="footer-one__title">Information</h4>
                            <ul class="footer-one__info-list">
                                <li class="footer-one__info-item">
                                    <address class="footer-one__address">
                                        <p class="footer-one__info">No. 5 Parakou Crescent, Wuse 2, Abuja.
                                        </p>
                                    </address>
                                </li>
                                <li class="footer-one__info-item">
                                    <p class="footer-one__info">Contact: <a href="tel:+234 809 991 8882" class="footer-one__info-link">+234 809 991 8882</a></p>
                                </li>
                            </ul>
                        </div><!-- /.footer-one__link -->
                    </div>
                </div><!-- /.row -->
                <div class="footer-one__bottom container-fluid">
                    <div class="footer-one__row-two row g-0 g-sm-4">
                        <div class="col-sm-10">
                            <div class="footer-one__copyright">
                                <p class="footer-one__copyright-text">&copy; Copyright 2024 <a href="#" class="">Blackbox Technology System Limited.</a> - All Rights Reserved.</p>
                            </div><!-- /.footer-one__copyright -->
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="noile-scroll-up-btn">
                                <span class="icon-arrow-right-2"></span>
                            </a>
                        </div>
                    </div><!-- /.footer-one__bottom -->
                </div><!-- /.container-fluid -->
                <svg class="footer-one__shape-one" xmlns="http://www.w3.org/2000/svg" width="793" height="603" viewBox="0 0 793 603" fill="none">
                    <path d="M439.616 429.192L371.826 517.348L522.077 753L642.277 752.592L439.616 429.192Z" fill="white" fill-opacity="0.03" />
                    <path d="M525.762 124.819H392.029L6.10352e-05 639.4L136.094 636.454L525.762 124.819Z" fill="white" fill-opacity="0.03" />
                    <path d="M643.674 -30L47.6423 752.592H190.928L792.726 -30H643.674Z" fill="#282828" />
                </svg><!-- /.footer-one__shape-one-->
            </div><!-- /.container -->
        </footer>
        <!-- Footer One End -->

        <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="/assets/images/logo-dark.png" width="155" alt="logo-dark"></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:noile@envato.com">info@black-box.ng</a>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <a href="#">+234 809 991 8882</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">

                </div><!-- /.mobile-nav__language -->
            </div><!-- /.mobile-nav__top -->
            <div class="mobile-nav__socila main-menu__social">
                <a href="#" class="mobile-nav__socila-link main-menu__social-link">
                    <i class="icofont-facebook"></i>
                </a>
                <a href="#" class="mobile-nav__socila-link main-menu__social-link">
                    <i class="icofont-twitter"></i>
                </a>
                <a href="#" class="mobile-nav__socila-link main-menu__social-link">
                    <i class="icofont-instagram"></i>
                </a>
                <a href="#" class="mobile-nav__socila-link main-menu__social-link">
                    <i class="icofont-pinterest"></i>
                </a>
            </div><!-- /.mobile-nav__socila -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <!-- Sidebar One Start -->
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay sidebar-btn__toggler"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <span class="sidebar-one__close sidebar-btn__toggler"><i class="fa fa-times"></i></span>
            <div class="sidebar-one__logo-box sidebar-one__item">
                <a href="index.html" aria-label="logo image"><img src="assets/images/logo-dark.png" width="155" alt="logo-dark"></a>
            </div><!-- /.sidebar-one__logo-box -->
            <div class="sidebar-one__about sidebar-one__item">
                <p class="sidebar-one__about-desc">Where expertise meets innovation. Elevate your business with Blackbox Technologies, your trusted partner in ICT and technology</p>
            </div><!-- /.sidebar-one__about -->
            <div class="sidebar-one__information sidebar-one__item">
                <h4 class="sidebar-one__title">Information</h4>
                <ul class="sidebar-one__information-list">
                    <li class="sidebar-one__information-item">
                        <i class="sidebar-one__information-icon icofont-home"></i>
                        <address class="sidebar-one__information-address">
                            <p class="sidebar-one__information-text">No.5 Parakou Crescent, Wuse 2, Abuja.</p>
                        </address>
                    </li>
                    <li class="sidebar-one__information-item">
                        <i class="sidebar-one__information-icon icofont-clock-time"></i>
                        <p class="sidebar-one__information-text">Monday - Friday, 9am - 5pm.</p>
                    </li>
                    <li class="sidebar-one__information-item">
                        <i class="sidebar-one__information-icon icon-email"></i>
                        <p class="sidebar-one__information-text"><a href="mailto:info@black-box.ng" class="sidebar-one__information-text-link">info@black-box.ng</a></p>
                    </li>
                    <li class="sidebar-one__information-item">
                        <span class="sidebar-one__information-icon icon-phone"></span>
                        <p class="sidebar-one__information-text"><a href="tel:+234 809 991 8882" class="sidebar-one__information-text-link">+234 809 991 8882</a></p>
                    </li>
                </ul>
            </div><!-- /.sidebar-one__information -->
            <div class="sidebar-one__socila social-list sidebar-one__item">
                <a href="#" class="sidebar-one__socila-link social-link">
                    <i class="icofont-facebook"></i>
                </a>
                <a href="#" class="sidebar-one__socila-link social-link">
                    <i class="icofont-twitter"></i>
                </a>
                <a href="#" class="sidebar-one__socila-link social-link">
                    <i class="icofont-instagram"></i>
                </a>
                <a href="#" class="sidebar-one__socila-link social-link">
                    <i class="icofont-pinterest"></i>
                </a>
            </div><!-- /sidebar-one__socila -->
            <div class="sidebar-one__newsletter-form sidebar-one__item">
                <label class="sidebar-one__title" for="sidebar-email">Newsletter Subscribe</label>
                <div class="sidebar-one__newsletter">
                    <input type="email" name="sidebar-email" id="sidebar-email" class="sidebar-one__newsletter-input" placeholder="Email Address">
                    <button type="submit" class="sidebar-one__newsletter-btn"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                </div>
            </div><!-- /.sidebar-one__form -->
        </div><!-- /.sidebar__content -->
    </aside>
    <!-- Sidebar One Start -->
    <script src="/assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="/assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="/assets/vendors/swiper/js/swiper-bundle.min.js"></script>
    <script src="/assets/vendors/wow/wow.js"></script>
    <script src="/assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <script src="/assets/vendors/isotope/isotope.js"></script>
    <script src="/assets/vendors/countdown/countdown.min.js"></script>
    <!-- template js -->
    <script src="/assets/js/main.js"></script>
</body>
</html>
