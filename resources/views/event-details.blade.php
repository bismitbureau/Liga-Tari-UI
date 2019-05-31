@extends('layout.master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/event-details.css') }}">

@section('content')

<section class="mt-6 py-4">
<h6 class="pt-4 ml-4"><a href="/events" style="color: #20d0ff;">Return</a></h6>
    <div class="row">
        <div class="card container mx-auto my-auto shadow col-md-7 col-sm-10" style="border-radius: 48px">
            <div class="firstSection pt-5 px-4">
                <div class="py-4 px-3">
                    <div class="row px-4 overflow-x-show">
                        <h2 class="date-title">Pagelaran Liga Tari Mahasiswa UI Krida Budaya</h2>
                        <h6 class="date-title">May 30th, 2019</h6>

                        <p style="text-align: justify; color: black" class="py-4">Liga Tari Mahasiswa Universitas Indonesia Krida Budaya
                            is a student organization focusing on preserving and developing folklore dances and
                            music. Founded on February, 17th 1983, the group with great name of the country’s
                            leading university: Universitas Indonesia; and has been participating in various
                            competitions and festivals, both domestic and international area.
                            <a href="/event-details" style="color: #20d0ff;">Read More</a>
                        </p>

                    </div>



                </div>
            </div>
        </div>
        <div class="card container mx-4 py-4 px-4 shadow col-md-4 col-sm-10" style="border-radius: 48px; z-index:-100">
        <h3 style="text-align: center; margin:0;">Location </h3>
        <div id="assetline" style="z-index:-99">
        <div class="mjs-object-content"></div>
    </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.37729327798!2d106.8218314!3d-6.1850105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3cda9a45cf815f85!2sBPPT+II+Building+Auditorium!5e0!3m2!1sen!2sid!4v1559224387906!5m2!1sen!2sid" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
@endsection
