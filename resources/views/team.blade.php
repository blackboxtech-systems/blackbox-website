@extends('layout', [$activePage = 'Team'])
@section('content')
<div class="page-wrapper">
<!-- Page Header Start -->
<section class="page-header" style="background-image: url('/assets/images/backgrounds/about-page-bg.jpg');">
            <span class="page-header__vartical-text">Web Development &
                Consulting</span>
            <div class="page-header__vartical-line-wrap">
                <div class="page-header__vartical-line page-header__vartical-line--one"></div>
                <div class="page-header__vartical-line page-header__vartical-line--two"></div>
                <div class="page-header__vartical-line page-header__vartical-line--three"></div>
            </div><!-- /.page-header__vartical-line-wrap -->
            <div class="container">
                <div class="page-header__circle"></div><!-- /.page-header__circle -->
                <div class="page-header__inner slide-title">
                    <h1 class="page-header__heading slide-title__heading">Team Page</h1>
                    <div class="page-header__breadcrumb-wrap">
                        <span class="page-header__arrow icon-arrow-right-2"></span>
                        <ul class="noile-breadcrumb">
                            <li class="noile-breadcrumb__item"><a href="index.html" class="noile-breadcrumb__link">Home</a></li>
                            <li class="noile-breadcrumb__item noile-breadcrumb__item-divider">/</li>
                            <li class="noile-breadcrumb__item">Team Page</li>
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
<!-- Team Page Start -->
<section class="team-page team-two team">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="team__card">
                            <div class="team__card-info">
                                <p class="team__card-profession">Managing Director</p>
                                <h4 class="team__card-name">Mohammed B.M. Bello</h4>
                            </div><!-- /.team__card-info -->
                            <div class="team__card-img-box">
                                <img src="/assets/images/team/team-2-1.png" alt="" class="team__card-img">
                            </div><!-- /.team__card-img-box -->

                        </div><!-- /.team__card -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="team__card">
                            <div class="team__card-info">
                                <p class="team__card-profession">Director</p>
                                <h4 class="team__card-name">Surajo Y. Yashe</h4>
                            </div><!-- /.team__card-info -->
                            <div class="team__card-img-box">
                                <img src="/assets/images/team/team-2-2.png" alt="" class="team__card-img">
                            </div><!-- /.team__card-img-box -->
                        </div><!-- /.team__card -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                        <div class="team__card">
                            <div class="team__card-info">
                                <p class="team__card-profession">Director</p>
                                <h4 class="team__card-name">Dr Zarah Bello-Yashe</h4>
                            </div><!-- /.team__card-info -->
                            <div class="team__card-img-box">
                                <img src="/assets/images/team/team-2-3.png" alt="" class="team__card-img">
                            </div><!-- /.team__card-img-box -->

                        </div><!-- /.team__card -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s" data-wow-duration="1500ms">
                        <div class="team__card">
                            <div class="team__card-info">
                                <p class="team__card-profession">Senior Software Engineer</p>
                                <h4 class="team__card-name">Mustapha Abubakar</h4>
                            </div><!-- /.team__card-info -->
                            <div class="team__card-img-box">
                                <img src="/assets/images/team/team-2-4.png" alt="" class="team__card-img">
                            </div><!-- /.team__card-img-box -->
                        </div><!-- /.team__card -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="team__card">
                            <div class="team__card-info">
                                <p class="team__card-profession">Solutions Architect</p>
                                <h4 class="team__card-name">Abiodun Omole Folorunsho</h4>
                            </div><!-- /.team__card-info -->
                            <div class="team__card-img-box">
                                <img src="/assets/images/team/team-2-5.png" alt="" class="team__card-img">
                            </div><!-- /.team__card-img-box -->
                        </div><!-- /.team__card -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                        <div class="team__card">
                            <div class="team__card-info">
                                <p class="team__card-profession">Senior Project Manager</p>
                                <h4 class="team__card-name">Fatai Osunsanya</h4>
                            </div><!-- /.team__card-info -->
                            <div class="team__card-img-box">
                                <img src="/assets/images/team/team-2-6.png" alt="" class="team__card-img">
                            </div><!-- /.team__card-img-box -->
                        </div><!-- /.team__card -->
                    </div>

                </div><!-- /.row -->
                <div class="pagination-box container-fluid">
                    <div class="row gx-4 gy-5">
                        <div class="col-md-3">
                            <div class="pagination-box__prev-box">
                                <a href="#" class="pagination-box__prev">
                                    <!-- <span class="pagination-box__icon icon-arrow-up"></span> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
                                        <path d="M7.5 25.0002L7.5 1.00024M7.5 1.00024L1 7.78285M7.5 1.00024L14 7.78285" stroke="#1D1D1D" />
                                    </svg>
                                    <p class="pagination-box__text pagination-box__text--prev">Previous</p>
                                </a>
                            </div>
                            <!-- /.pagination-box__prev-box -->
                        </div>
                        <div class="col-md-6">
                            <ul class="pagination-box__list">
                                <li class="pagination-box__item">
                                    <a href="#" class="pagination-box__link">1</a>
                                </li>
                                <li class="pagination-box__item pagination-box__item--active">
                                    <a href="#" class="pagination-box__link">2</a>
                                </li>
                                <li class="pagination-box__item">
                                    <a href="#" class="pagination-box__link">3</a>
                                </li>
                            </ul><!-- /.pagination-box__list -->
                        </div>
                        <div class="col-md-3">
                            <div class="pagination-box__next-box">
                                <a href="#" class="pagination-box__next">
                                    <p class="pagination-box__text pagination-box__text--next">Next</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
                                        <path d="M7.49023 0L7.49023 24M7.49023 24L0.990234 17.2174M7.49023 24L13.9902 17.2174" stroke="#1D1D1D" />
                                    </svg>
                                    <!-- <span class="pagination-box__icon icon-arrow-up"></span> -->
                                </a>
                            </div>
                            <!-- /.pagination-box__next-box -->
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.pagination-wrapper -->
            </div><!-- /.container -->
</section>
<!-- Team Page End -->
</div>
@endsection
