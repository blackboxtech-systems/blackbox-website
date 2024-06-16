@extends('layout')
@section('content')
<div class="page-wrapper">
<!-- Page Header Start -->
<section class="page-header" style="background-image: url('/assets/images/backgrounds/about-page-bg.jpg');">
            <span class="page-header__vartical-text">Software Development &
                Consulting</span>
            <div class="page-header__vartical-line-wrap">
                <div class="page-header__vartical-line page-header__vartical-line--one"></div>
                <div class="page-header__vartical-line page-header__vartical-line--two"></div>
                <div class="page-header__vartical-line page-header__vartical-line--three"></div>
            </div><!-- /.page-header__vartical-line-wrap -->
            <div class="container">
                <div class="page-header__circle"></div><!-- /.page-header__circle -->
                <div class="page-header__inner slide-title">
                    <h1 class="page-header__heading slide-title__heading">Blue Wireless</h1>
                    <div class="page-header__breadcrumb-wrap">
                        <span class="page-header__arrow icon-arrow-right-2"></span>
                        <ul class="noile-breadcrumb">
                            <li class="noile-breadcrumb__item"><a href="index.html" class="noile-breadcrumb__link">Home</a></li>
                            <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
                            <li class="noile-breadcrumb__item">Services</li>
                            <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
                            <li class="noile-breadcrumb__item">Product</li>
                        </ul>
                    </div>
                </div><!-- /.page-header__inner -->
                <a href='#' class="page-header__circle-text">
                    <div class="page-header__circle-text-bg" style="background-image: url('/assets/images/resources/circle-text-bg.png');"></div>
                    <div class="page-header__curved-circle curved-circle">
                        <!-- curved-circle start-->
                        <div class="page-header__curved-circle--item curved-circle--item" data-circle-text-options='{
             "radius": 92,
             "forceWidth": true,
             "forceHeight": true}'>
                            . design for your digital products
                        </div>
                    </div><!-- curved-circle end-->
                </a><!-- /.page-header__circle-text -->
            </div><!-- /.container -->
            <div class="page-header__shape-box">
                <svg class="page-header__shape-one" width="389" height="319" viewBox="0 0 389 319" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M460.4 600L0 0L162.2 20L610.5 600H460.4Z" />
                    <path d="M460.699 600H310.799L2.99936 195H152.849L460.699 600Z" />
                </svg>
            </div><!-- /.page-header__shape-box -->
</section>
<!-- Page Header End -->
<!-- Service Details page Start -->
<section class="service-details-page">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-5 order-1 order-lg-0">
                        <div class="service-details-page__left page-sidebar">
                            <div class="page-sidebar__search page-sidebar__single wow animated fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <h3 class="page-sidebar__title">Search Here</h3>
                                <form action="#" class="page-sidebar__search-form">
                                    <input type="search" name="page-sidebar-search-input" id="page-sidebar-search-input" placeholder="Enter Your Keyword..." class="page-sidebar__search-input">
                                    <button type="submit" class="page-sidebar__search-btn"><i class="page-sidebar__search-icon icofont-search-1"></i></button>
                                </form>
                            </div><!-- /.page-sidebar__search -->
                            <div class="page-sidebar__service page-sidebar__single wow animated fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <h3 class="page-sidebar__title">Products</h3>
                                <ul class="page-sidebar__service-list">
                                    <li class="page-sidebar__service-item">
                                        <a href="wireless.html" class="page-sidebar__service-link">Blue Wireless</a>
                                    </li>
                                    <li class="page-sidebar__service-item">
                                        <a href="pay.html" class="page-sidebar__service-link">Blue Pay</a>
                                    </li>
                                    <li class="page-sidebar__service-item">
                                        <a href="#" class="page-sidebar__service-link">Drive Master Pro(DMP)</a>
                                    </li>
                                    
                                    <!-- <li class="page-sidebar__service-item">
                                        <a href="socila-marketing.html" class="page-sidebar__service-link">Social Marketing</a>
                                    </li>
                                    <li class="page-sidebar__service-item">
                                        <a href="seo-content.html" class="page-sidebar__service-link">SEO & Content Writing</a>
                                    </li> -->
                                </ul>
                            </div><!-- /.blog-sidebar__service -->
                            <div class="page-sidebar__social page-sidebar__single wow animated fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <h3 class="page-sidebar__title">Social Icon</h3>
                                <div class="page-sidebar__social-list social-list">
                                    <a href="#" class="page-sidebar__social-link social-link">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                    <a href="#" class="page-sidebar__social-link social-link">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                    <a href="#" class="page-sidebar__social-link social-link">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                    <a href="#" class="page-sidebar__social-link social-link">
                                        <i class="icofont-pinterest"></i>
                                    </a>
                                </div>
                            </div><!-- /.page-sidebar__social -->
                            <div class="page-sidebar__contact page-sidebar__single wow animated fadeInLeft" data-wow-delay="0.1s" data-wow-duration="1500ms" style="background-image: url('/assets/images/resources/sidebar-contact-bg.jpg');">
                                <div class="page-sidebar__contact-wrap">
                                    <h3 class="page-sidebar__contact-title">Have Any Query? Feel Free Contact Us</h3>
                                    <a href="tel:+234 903 003 9336" class="page-sidebar__contact-btn">
                                        <span class="page-sidebar__contact-icon icon-phone"></span>
                                        <h4 class="page-sidebar__contact-text">+234 903 003 9336</h4>
                                    </a>
                                </div>
                            </div><!-- /.page-sidebar__contact -->
                        </div><!-- /.page-sidebar -->
                    </div>
                    <div class="col-xl-8 col-lg-7 order-0 order-lg-1">
                        <div class="service-details-page__right container-fluid">
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="service-details-page__top-service">
                                        <div class="service-details-page__top-service-img-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                            <img src="/assets/images/service/wireless.jpg" alt="service" class="service-details-page__top-service-img">
                                        </div>
                                        <h3 class="service-details-page__top-service-title">Blue Wireless</h3>
                                        <p class="service-details-page__top-service-desc">BlueWireless, which is fully licensed by the NCC offers accelerated and unlimited internet
                                            access. Our ISP provides fast and reliable internet services to homes,offices,and public areas through street WiFi/hotspots, point-to -point connections,and network-to-home connections.We have invested in cutting-edge technology and infrastructure to ensure our customers enjoy the best internet experience possible.With our extensive network coverage, you can be sure of a strong and stable connection wherever you are. For our corporate clients, we offer dedicated internet connections with high bandwidth and low latency, ensuring businesses stay connected and productive. 
                                            </p>
                                    </div><!-- /.service-details-page__top-service -->
                                </div>
                                
                                <div class="service-details-page__inner-row">
                                    <div class="service-details-page__join-img-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                        <img src="/assets/images/service/service-3-2.jpg" alt="service" class="service-details-page__join-img">
                                    </div><!-- /.service-details-page__join-img-box -->
                                    <div class="service-details-page__join-content wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                       
                                        <p class="service-details-page__join-desc">We also provide managed services, including network design and implementation, 24/7support and security solutions,for our corporate clients to focus on their core business while we handle their connectivity. With just one connection, you can enjoy the convenience of accessing the internet on any Wi-Fi-enabled device.In addition, our low-internet provision services make it the ideal choice for businesses and homes.</p>
                                        
                                    </div><!-- /.service-details-page__join-content -->
                                </div><!-- /.service-details-page__inner-row -->
                                
                            </div><!-- /.row -->
                        </div><!-- /.service-details-page__right -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
</section>
<!-- Service Details page End -->
</div>
@endsection