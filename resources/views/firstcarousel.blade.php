<link rel="stylesheet" type="text/css" href="{{ asset('css/firstcarousel.css') }}">
<!-- @section('title', 'Page Title') -->


<section class="" style="margin-bottom: 3em;">

    <!--Carousel Wrapper-->
    <div id="carousel-1" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active firstcarousel">
                <img class="d-block w-100" src="{{ asset('images/dirgahayu.jpg') }}">
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item firstcarousel">
                <img class="d-block w-100" src="{{ asset('images/dirgahayu2.jpg') }}">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item firstcarousel">
                <img class="d-block w-100" src="{{ asset('images/dirgahayu3.jpg') }}">
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
</section>

<section id="ai-center my-auto" class="py-5">
    <div class="card container mx-auto shadow" style="border-radius: 48px">
        <div class="firstSection">
            <div class=" py-4 px-3">
                <div class="row py-0 overflow-x-show">
                    <div class="col-lg-6">
                        <div class="title-area overflow-x-show">
                            <h2><strong>1st Place Nanyang University Cultural Night </strong></h2>

                            <div id="assetline" class="">
                                <div class="mjs-object-content"></div>
                            </div>

                            <p class="description" style="text-align:justify">
                                Liga Tari Mahasiswa Universitas Indonesia Krida Budaya is a
                                student organization focusing on preserving and developing
                                folklore dances and music. Founded on February, 17th 1983,
                                the group with great name of the country’s leading university:
                                Universitas Indonesia; and has been participating in various
                                competitions and festivals, both domestic and international area.
                                <br> <a href="/about" style="color: #20d0ff;">Read More</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="title-area" style="overflow-x: hidden">
                            <div class="my-auto youtube">

                                <iframe width="560" height="315" src="https://www.youtube.com/embed/5sDv75FJhGo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
