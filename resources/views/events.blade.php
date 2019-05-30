@extends('layout.master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/events.css') }}">

<section class="mt-6 py-4">
    <h2 style="text-align: center" class="pt-4">EVENTS</h2>
    <div id="assetline" class="">
        <div class="mjs-object-content"></div>
    </div>
    <div class="row">
        <div class="card container mx-4 py-4 px-4 shadow col-md-4 col-sm-12" style="border-radius: 48px;">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FJakarta" style="border-width:0" width="400" height="300" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="card container mx-auto my-auto shadow col-md-7" style="border-radius: 48px">
            <div class="firstSection pt-5 px-4">
                <div class="py-4 px-3">
                    <div class="row px-4 overflow-x-show">
                        <h2 class="date-title">30 May 2019</h2>

                        <p style="text-align: justify; color: black" class="py-4">Liga Tari Mahasiswa Universitas Indonesia Krida Budaya
                            is a student organization focusing on preserving and developing folklore dances and
                            music. Founded on February, 17th 1983, the group with great name of the country’s
                            leading university: Universitas Indonesia; and has been participating in various
                            competitions and festivals, both domestic and international area.
                            <a href="/event-details" style="color: #20d0ff;">Read More</a>
                        </p>

                    </div>
                    <div id="assetline" class="">
                        <div class="mjs-object-content"></div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</section>
