@extends('layout/master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/people.css') }}">

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
<div class="card container mx-auto shadow mt-5">
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

            <div class="col-md-6 mx-auto px-auto overflow-x-show order-1 order-md-2 ">

                <img class="mx-auto people-img" src="{{ asset('images/dibyo.jpg') }}" alt="Dibyo">


            </div>
        </div>
    </div>
</div>


<!--CARD 2-->
<div class="card container mx-auto shadow mt-5">
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

            <div class="col-md-6 mx-auto px-auto overflow-x-show order-1 order-md-2 ">

                <img class="mx-auto people-img" src="{{ asset('images/niniek.jpg') }}" alt="Dibyo">


            </div>
        </div>
    </div>
</div>
