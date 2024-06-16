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
                    <h1 class="page-header__heading slide-title__heading">Blue Pay</h1>
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
                                            <img src="/assets/images/service/pay.jpg" alt="service" class="service-details-page__top-service-img">
                                        </div>
                                        <h3 class="service-details-page__top-service-title">Blue Pay</h3>
                                        <p class="service-details-page__top-service-desc">BluePay is an emerging payment service solution, ingeniously engineered by Koncept Digital Integrated Services,dedicated to simplifying payment collection for businesses and individuals alike. Our mission is to morph into a comprehensive payment services provider,capable of card switching and processing international payments. With an eye on the future, Blue Pay aims to introduce various forms of hassle-free payment modes to diverse business types nationwide, such as contactless payments.</p>
                                    </div><!-- /.service-details-page__top-service -->
                                </div>
                                
                                <div class="service-details-page__inner-row">
                                    <div class="service-details-page__join-img-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                        <img src="/assets/images/service/service-3-2.jpg" alt="service" class="service-details-page__join-img">
                                    </div><!-- /.service-details-page__join-img-box -->

                                    <div class="service-details-page__join-content wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                        <h3 class="service-details-page__join-title">Key Highlights</h3>
                                        <p class="service-details-page__join-desc">Blue Pay boasts of a myriad of outstanding features that include:
                                           
                                        <ul>
                                            <li>Seamless website integration for effortless payment collection.</li>
                                            <li> Convenient in-appmoney transfers</li>
                                            <li>Hassle-freeinter-bankmoney transfers.</li>
                                            <li>Provision for Dollar Card usage.</li>
                                            <li>Smooth airtime and data purchases.</li>
                                            <li>Facilitated Cable TV and electricity purchases.</li>
                                            <li>Universal platform compatibility (Web,Android&iOS)</li>
                                            <li>Innovative 'ScantoPay' feature for quick transfers.</li>
                                            <li>Business-friendly invoicing</li>
                                            <li>Handy money request links</li>
                                            <li>Integrated in-app shop catering to small businesses.</li>
                                            <li>Robust Know Your Customer (KYC)framework</li>
                                        </ul> </p>
                                        
                                    </div><!-- /.service-details-page__join-content -->
                                </div><!-- /.service-details-page__inner-row -->
                                <!-- <div class="col-12">
                                    <div class="service-details-page__accrodion-box">
                                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">

                                            <div class="service-details-page__accordion accrodion">
                                                <div class="accrodion-title">
                                                    <h4>Lorem ipsum dolor, sit amet consectetur adipisicing.</h4>
                                                </div>
                                                <div class="accrodion-content" style="display: none;">
                                                    <div class="inner">
                                                        <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-details-page__accordion accrodion active">
                                                <div class="accrodion-title">
                                                    <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                                                </div>
                                                <div class="accrodion-content" style="display: none;">
                                                    <div class="inner">
                                                        <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-details-page__accordion accrodion">
                                                <div class="accrodion-title">
                                                    <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                                                </div>
                                                <div class="accrodion-content" style="">
                                                    <div class="inner">
                                                        <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="service-details-page__accordion accrodion">
                                                <div class="accrodion-title">
                                                    <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                                                </div>
                                                <div class="accrodion-content" style="display: none;">
                                                    <div class="inner">
                                                        <p>Fusce eu eros nec felis venenatis fermentum sit amet eget turpis. Integer tempus massa ac arcu sollicitudin sollicitudin Vivamus neque urna, iaculis et orci id, euismod tempor arcu semper congue nulla amet finibus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div><!-- /.row -->
                        </div><!-- /.service-details-page__right -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
</section>
<!-- Service Details page End -->
</div>
@endsection