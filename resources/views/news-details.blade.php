@extends('layout.master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/firstcarousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/news-details.css') }}">

<section class="mt-4 py-2 blog-content-area" style="margin-bottom: 3em;">
    <div class="">
        <div class="row justify-content-center">
            <!-- Blog Posts Area -->
            <div class="col-12 col-lg-8">


                <div class="single-post-details-area">
                    <div class="post-content">

                        <div class="text-center mb-50">
                            <p class="post-date">August 17, 2018</p>
                            <h2 class="post-title">Dirgahayu Kemerdekaan Republik Indonesia ke-73</h2>

                            <div >
                                <a href="#" style="color: #20d0ff;"><span>by</span> admin</a>
                                <a href="#" style="color: #20d0ff;"> 0 <span>Comments</span></a>
                            </div>
                        </div>


                        <div class="post-thumbnail mb-50">
                            <div id="carousel-1" class="carousel slide carousel-fade" data-ride="carousel">

                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-1" data-slide-to="1"></li>
                                    <li data-target="#carousel-1" data-slide-to="2"></li>
                                    <li data-target="#carousel-1" data-slide-to="3"></li>
                                    <li data-target="#carousel-1" data-slide-to="4"></li>
                                </ol>

                                <div class="carousel-inner" role="listbox">

                                    <div class="carousel-item active firstcarousel">
                                        <img class="d-block w-100" src="{{ asset('img/carousel3.jpg') }}">
                                    </div>

                                    <div class="carousel-item firstcarousel">
                                        <img class="d-block w-100" src="{{ asset('img/tari6.jpg') }}">
                                    </div>

                                    <div class="carousel-item firstcarousel">
                                        <img class="d-block w-100" src="{{ asset('img/tari3.jpg') }}">
                                    </div>

                                    <div class="carousel-item firstcarousel">
                                        <img class="d-block w-100" src="{{ asset('img/tari4.jpg') }}">
                                    </div>
                                    <div class="carousel-item firstcarousel">
                                        <img class="d-block w-100" src="{{ asset('img/tari5.jpg') }}">
                                    </div>
                                </div>

                                <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>

                        <!-- Post Text -->
                        <div class="post-text justify-content-center">
                            <p>"Negara Republik Indonesia ini bukan milik sesuatu golongan, bukan milik sesuatu agama, bukan milik sesuatu suku, bukan milik sesuatu golongan adat-istiadar, tetapi milik kita semua dari Sabang sampai Merauke" - Ir. Soekarno
                                Liga Tari Mahasiswa UI Krida Budaya mengucapkan: Dirgahayu Republik Indonesia ke-73
                                Semoga Indonesia dapat terus berkembang menjadi negara yang lebih baik. Merdeka!
                                #dirgahayu #kemerdekaan #indonesia

                            </p>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="img/blog-img/4.jpg" alt="">
                                </div>
                                <div class="col-12 col-md-6">
                                    <img class="mb-30" src="img/blog-img/3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-9 col-md-6 col-lg-3">
                <div class="post-sidebar-area">


                    <div class="single-widget-area mb-30">

                        <div class="widget-title">
                            <h6>Latest News</h6>
                        </div>

                        <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="{{ asset('img/carousel1.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>Dirgahayu Kemerdekaan Republik Indonesia ke-73</h6>
                                </a>
                                <a href="#" class="post-author" style="color: #20d0ff;"><span>by</span> admin</a>
                            </div>
                        </div>

                        <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="{{ asset('img/carousel2.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>491th DKI Jakarta</h6>
                                </a>
                                <a href="#" class="post-author" style="color: #20d0ff;"><span>by</span> admin</a>
                            </div>
                        </div>

                        <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="{{ asset('img/carousel3.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>Performance Highlight</h6>
                                </a>
                                <a href="#" class="post-author" style="color: #20d0ff;"><span>by</span> admin</a>
                            </div>
                        </div>

                        <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="{{ asset('img/carousel4.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>Eid Mubarak 1439H</h6>
                                </a>
                                <a href="#" class="post-author" style="color: #20d0ff;"><span>by</span> admin</a>
                            </div>
                        </div>

                        <div class="single-latest-post d-flex">
                            <div class="post-thumb">
                                <a href="#"><img src="{{ asset('img/carousel5.jpg') }}" alt=""></a>
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">
                                    <h6>Our Achievements</h6>
                                </a>
                                <a href="#" class="post-author" style="color: #20d0ff;"><span>by</span> admin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
