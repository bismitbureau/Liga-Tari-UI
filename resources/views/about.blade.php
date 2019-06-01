@extends('layout.master')
@section('title', 'About')
<link rel="stylesheet" type="text/css" href="{{ asset('css/firstabout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/people.css') }}">


@section('content')

<section class="mt-6 py-4" style="background-color: #FDE25D">
    <div class="mb-4">
        <h2 style="background-image: url('img/panah-judul.png'); z-index: 999; color: white; padding: 1em; overflow-y: hidden; background-repeat: no-repeat">LIGA TARI MAHASISWA
            UNIVERSITAS INDONESIA KRIDA BUDAYA</h2>
    </div>
    <div class="card container mx-auto my-auto shadow" style="border-radius: 48px">
        <div class="firstSection pt-5 px-4">
            <div class="py-4 px-3">
                <div class="row px-4 overflow-x-show">
                    <div class="my-auto px-5 youtube video-container" style="text-align: center!important;">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/5sDv75FJhGo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;
                            picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p style="text-align: justify; color: black" class="py-4">Liga Tari Mahasiswa Universitas Indonesia Krida Budaya
                        is a student organization focusing on preserving and developing folklore dances and
                        music. Founded on February, 17th 1983, the group with great name of the country’s
                        leading university: Universitas Indonesia; and has been participating in various
                        competitions and festivals, both domestic and international area.

                        In the course of time, Krida Budaya has grown into a phenomenal dance group that
                        focused to wider dance perspectives. Its members, nowadays, also learn basic ballet,
                        contemporary dance, and modern dance in additional to folklore dance. The group
                        would not have come this far without guidance from numerous highly dedicated
                        people that constantly accompanying them; the seniors, dance mentors, Tom Ibnur
                        (as the Artistic Director) and A.G. Sudibyo (as the Advisor).
                    </p>
                </div>
            </div>
        </div>
    </div>

</section>


<section class="mt-5">
    <h2 style="text-align: center" class="pt-4">PEOPLE </h2>
    <div id="assetline" class="">
        <div class="mjs-object-content"></div>
    </div>

    <div class="row">
        <div class="col-md-16">
            <div class="col-sm-4" id="membersize">


            </div>
        </div>
    </div>

    <!--CARD 1-->
    <div class="card container mx-auto shadow mt-5" style="border-radius: 48px">
        <div class="firstSection mx-auto px-4 col-lg-12 py-3 px-2">
            <div class="row py-0 overflow-x-show">
                <div class="col-md-6 py-5 order-md-1 order-2 ">
                    <div class="title-area overflow-x-show">
                        <h2 class="peoplename"><strong>Drs. AG Sudibyo, M.Si</strong></h2>
                        <h4 class="peoplename">Counsellor</h4>
                        <p class="description" style="text-align:justify">
                            Universitas Indonesia phenomenal figure that has accompanied the journey Liga
                            Tari UI Student Activities of Culture for 30 years. Besides being active as a
                            lecturer at the Faculty of Social and Political Sciences and has won an award
                            from the Indonesian Record Museum (MURI) as the initiator biggest choir. <br>
                            Together LTMUIKB, lecturer familiarly called Mr. Dibyo has 5 times down directly
                            oversee European Cultural Mission and became one of the performers in the
                            European Cultural Mission in 2015 as a singer and guitar player Solo. Services
                            legendary existence LTMUIKB help strengthen both the national and international arena.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mx-auto px-auto py-5 order-1 order-md-2 ">
                    <div class="people1 mx-auto my-auto ">
                        <img class="people-img" src="{{ asset('img/dibyo.jpg') }}" alt="Dibyo">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--CARD 2-->
    <div class="card container mx-auto shadow mt-5" style="border-radius: 48px">
        <div class="firstSection mx-auto px-4 col-lg-12 py-3 px-2">
            <div class="row py-0 overflow-x-show">
                <div class="col-md-6 py-5 order-md-1 order-2 ">
                    <div class="title-area overflow-x-show">
                        <h2 class="peoplename"><strong>Tom Ibnur</strong></h2>
                        <h4 class="peoplename">Artistic Advisor of Liga Tari Mahasiswa Universitas Indonesia Krida Budaya</h4>
                        <p class="description" style="text-align:justify">
                            Arison Ibnur Ibrahim familiar as Tom Ibnur is Liga Tari Mahasiswa
                            Universitas Indonesia Krida Budaya's artistic advisor. He is one
                            of the founders of LTM-UI Krida Budaya. Tom Ibnur is well-known
                            choreographer in Indonesia. His bacis dances are from Minangkabau
                            and Malay, such as Zapin. More than 300 dances has performed in
                            various places, such as: Singapore, Malaysia, USA, Australia,
                            France, Spain, Italy, Korea, and Japan.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mx-auto px-auto py-5 order-1 order-md-2 ">
                    <div class="people1 mx-auto my-auto">
                        <img class="people-img" src="{{ asset('img/tom.jpg') }}" alt="Tom">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--CARD 3-->
    <div class="card container mx-auto shadow mt-5" style="border-radius: 48px">
        <div class="firstSection mx-auto px-4 col-lg-12 py-3 px-2">
            <div class="row py-0 overflow-x-show">
                <div class="col-md-6 py-5 order-md-1 order-2 ">
                    <div class="title-area overflow-x-show">
                        <h2 class="peoplename"><strong>Niniek L. Karim</strong></h2>
                        <h4 class="peoplename">Advisor of Liga Tari Mahasiswa Universitas Krida Budaya</h4>
                        <p class="description" style="text-align:justify">
                            She is an advisor of Liga Tari Mahasiswa Universitas Indonesia.
                            She is also a famous actress in Indonesia. Besides her professions as
                            an actress, she is also a lecturer in Faculty of Psychology Universitas
                            Indonesia. Niniek L. Karim had won Piala Citra as best supporting actress
                            in "Ibunda". In the middle of her activities, she always takes time to help
                            and support the activities of LTM-UI Krida Budaya.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mx-auto px-auto py-5 order-1 order-md-2 ">
                    <div class="people1 mx-auto my-auto">
                        <img class="people-img" src="{{ asset('img/niniek.jpg') }}" alt="Niniek">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--CARD 4-->
    <div class="card container mx-auto shadow my-5" style="border-radius: 48px">
        <div class="firstSection mx-auto px-4 col-lg-12 py-3 px-2">
            <div class="row py-0 overflow-x-show">
                <div class="col-md-6 py-5 order-md-1 order-2 ">
                    <div class="title-area overflow-x-show">
                        <h2 class="peoplename"><strong>Anusirwan Irwan</strong></h2>
                        <h4 class="peoplename">Music Advisor of Liga Tari Mahasiswa Universitas Indonesia Krida Budaya</h4>
                        <p class="description" style="text-align:justify">
                            Anursiwan is the best composser in Indonesia. He is a lecture in
                            Institut Kesenian Jakarta since 1997. Moreover, he is also the member
                            of Dewan Kesenian Jakarta Komite Musik and he is a founder of the
                            music community "Altajaru".
                        </p>
                    </div>
                </div>

                <div class="col-md-6 mx-auto px-auto py-5 order-1 order-md-2 ">
                    <div class="people1 mx-auto my-auto">
                        <img class="people-img" src="{{ asset('img/Anusirwan.jpg') }}" alt="Anusirwan">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
