@extends('layout/master')
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/gallery.css') }}">

@section('title', 'Homepage')

@section('content')
<div class="mt-5 mb-3">
    <h2 style="text-align: center" class="pt-4">GALLERY </h2>
    <div id="assetline" class="">
        <div class="mjs-object-content"></div>
    </div>

    <div class="row">
        <div class="col py-5 align-self-center">
            <div class="col my-4 justify-content-center text-center">
                <button class="btn btn-outline-info text-dark my-1">Aceh</button>
                <button class="btn btn-outline-info text-dark my-1">Bali</button>
                <button class="btn btn-outline-info text-dark my-1">Bengkulu</button>
                <button class="btn btn-outline-info text-dark my-1">DKI Jakarta</button>
                <button class="btn btn-outline-info text-dark my-1">Jambi</button>
            </div>
            <div class="col my-3 text-center">
                <button class="btn btn-outline-info text-dark my-1">Jawa Barat</button>
                <button class="btn btn-outline-info text-dark my-1">Jawa Tengah</button>
                <button class="btn btn-outline-info text-dark my-1">Jawa Timur</button>
                <button class="btn btn-outline-info text-dark my-1">Kalimantan Barat</button>
                <button class="btn btn-outline-info text-dark my-1">Kalimantan Timur</button>
            </div>
            <div class="col my-4 text-center">
                <button class="btn btn-outline-info text-dark my-1">Kepulauan Riau</button>
                <button class="btn btn-outline-info text-dark my-1">Nusa Tenggara Timur</button>
                <button class="btn btn-outline-info text-dark my-1">Papua</button>
                <button class="btn btn-outline-info text-dark my-1">Sulawesi Selatan</button>
            </div>
            <div class="col my-4 text-center">
                <button class="btn btn-outline-info text-dark my-1">Sumatera Barat</button>
                <button class="btn btn-outline-info text-dark my-1">Sumatera Selatan</button>
                <button class="btn btn-outline-info text-dark my-1">Sumatera Utara</button>
            </div>
        </div>


        <div class="col">

            <!--Photo carousel-->
            <div class="card container mx-auto shadow mt-5" style="border-radius: 48px">
                <div class="firstSection mx-auto px-4 col-lg-12 py-3 px-2">
                    <div class="row py-0 overflow-x-show">
                        <h2 class="judulDaerah"><strong>DKI Jakarta</strong></h2>
                            <div id="carouselTestimony" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselTestimony" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselTestimony" data-slide-to="1"></li>
                                    <li data-target="#carouselTestimony" data-slide-to="2"></li>
                                    <li data-target="#carouselTestimony" data-slide-to="3"></li>
                                    <li data-target="#carouselTestimony" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="isiCarousel">
                                            <div class="col text-center">
                                                <h5>Burung Hong</P>
                                                <img class="d-block w-100" src="{{ asset('img/DKI/burunghong.jpg') }}">
                                                <p class="mt-3">This dance tells the story of the Princess Ong Tien's most beloved pet bird. She was a princess from China while who was married to the prince of Jayakarta, he was named after the capital city of Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="isiCarousel">
                                            <div class="col text-center">
                                                <h5>Burung Hong</P>
                                                <img class="d-block w-100" src="{{ asset('img/DKI/burunghong.jpg') }}">
                                                <p class="mt-3">This dance tells the story of the Princess Ong Tien's most beloved pet bird. She was a princess from China while who was married to the prince of Jayakarta, he was named after the capital city of Indonesia</p>
                                            </div>
                                        </div>
                                    </div>
                        
                                </div>
                                <a class="carousel-control-prev" href="#carouselTestimony" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselTestimony" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection