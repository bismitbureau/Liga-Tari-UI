@extends('layout.master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">


<section class="mt-6 py-4">
    <h2 style="text-align: center" class="pt-4">NEWS</h2>
    <div id="assetline" class="">
        <div class="mjs-object-content"></div>
    </div>

    <section class="blog-content-area py-4">
        <div class="">

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <div class="row">

                            <div class="col-12">
                                <div class="featured-post-area mb-50">

                                    <div class="post-thumbnail mb-30">
                                        <a href="/news-details"><img style="object-fit: cover" src="{{ asset('img/carousel1.jpg') }}" alt="Dirgahayu"></a>
                                    </div>

                                    <div class="featured-post-content">
                                        <p class="post-date">August 17, 2018</p>
                                        <a href="/news-details" class="post-title" style="color: #20d0ff;">
                                            <h2>Dirgahayu Kemerdekaan Republik Indonesia ke-73</h2>
                                        </a>
                                        <p class="post-excerpt">"Negara Republik Indonesia ini bukan milik sesuatu golongan, bukan milik
                                            sesuatu agama, bukan milik sesuatu suku, bukan milik sesuatu golongan adat-istiadar, tetapi
                                            milik kita semua dari Sabang sampai Merauke" - Ir. Soekarno <br>
                                            <a href="/news-details" style="color: #20d0ff;">Read More</a>
                                        </p>
                                    </div>

                                    <div class="post-meta d-flex align-items-center justify-content-between">

                                        <div class="author-comments">
                                            <a href="#" style="color: #20d0ff;"><span>by</span> admin</a>
                                            <a href="#" style="color: #20d0ff;"> 0 <span>Comments</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">

                                    <div class="post-thumbnail">
                                        <a href="#"><img src="{{ asset('img/carousel2.jpg') }}" alt=""></a>
                                    </div>

                                    <div class="post-content">
                                        <p class="post-date">June 6, 2018</p>
                                        <a href="#" class="post-title">
                                            <h4>491th DKI Jakarta</h4>
                                        </a>
                                        <p class="post-excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                                        <a href="#" style="color: #20d0ff;">Read More</a>
                                            </p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-sm-6">
                                <div class="single-blog-post mb-50">

                                    <div class="post-thumbnail">
                                        <a href="#"><img src="{{ asset('img/carousel3.jpg') }}" alt=""></a>
                                    </div>

                                    <div class="post-content">
                                        <p class="post-date">July 29, 2018</p>
                                        <a href="#" class="post-title">
                                            <h4>Baris Ksatria Jaya</h4>
                                        </a>
                                        <p class="post-excerpt">
                                            This dance was adapted from a Tari Baris Tunggal and Tara Baris Gede which is a sacred dance in Bali. Describing valor and alertness of the soldiers who were practicing before the war. <br>
                                            <a href="#" style="color: #20d0ff;">Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pager">
                        <a href="#"><i class="" aria-hidden="true"></i> Load more</a>
                    </div>
                </div>

                <!-- LATEST NEWS -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="post-sidebar-area scrolling-box">


                        <div class="single-widget-area mb-30 ">

                            <div class="widget-title">
                                <h6>Latest News</h6>
                            </div>

                            <section class="show-five">
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
                            </section>
                            <section class="show-five">
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
                            </section>
                            <section class="show-five">
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
                            </section>
                            <section class="show-five">
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
                            </section>
                            <section class="show-five">
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
                            </section>
                            <section class="show-five">
                                <div class="single-latest-post d-flex">
                                    <div class="post-thumb">
                                        <a href="#"><img src="{{ asset('img/carousel1.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="#" class="post-title">
                                            <h6>Dirgahayu Kemerdekaan Republik Indonesia ke-73</h6>
                                        </a>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
