@extends('layout.master')

<link rel="stylesheet" type="text/css" href="{{ asset('css/contactus.css') }}">

@section('content')

<section class="section-contact mt-4 pt-4" id="form1-4" data-rv-view="7288" style="overflow-x:hidden; margin:0">

    <div class="row justify-content-center">
        <div class="title col-12 col-lg-8">
            <h2 style="text-align: center;">
                CONTACT US</h2>
        </div>
    </div>

    <div id="assetline" class="">
        <div class="mjs-object-content"></div>
    </div>

    <div class="row justify-content-center pt-3">
        <div class="media-container-column col-lg-8" data-form-type="formoid">
            <div data-form-alert="" hidden="">
                Thank you for submitting your form!
            </div>

            <form class="mx-0" action="http://www.kridabudaya.com/" method="post" data-form-title="Krida Budaya"><input type="hidden" data-form-email="true" value="1KZP9iyPD6aKzuC4CRktqrwMWQIgCf2zf+1/8dCn2ldtRQXIV8JsZNf5CS6Rc570OCaj8AUxhvCvxxAV3jFoVHMzggzp0ZaaJRRYwr4I+ahEelXhHzHlnZFhOHrolfaH">
                <div class="row row-sm-offset">
                    <div class="col-md-5" data-for="name">
                        <div class="form-group">
                            <label class="form-control-label " for="name-form1-4">Name</label>
                            <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-4">
                        </div>
                    </div>
                    <div class="col-md-4" data-for="email">
                        <div class="form-group">
                            <label class="form-control-label " for="email-form1-4">Email</label>
                            <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-4">
                        </div>
                    </div>
                    <div class="col-md-3" data-for="phone">
                        <div class="form-group">
                            <label class="form-control-label " for="phone-form1-4">Phone</label>
                            <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-4">
                        </div>
                    </div>
                </div>
                <div class="form-group" data-for="message">
                    <label class="form-control-label " for="message-form1-4">Message</label>
                    <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-4"></textarea>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="updates" id="updates" value="1">
                    <label for="updates" class="form-check-label">Notify me about new updates</label>
                </div>

                <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black-outline display-4">SEND</button></span>
            </form>
        </div>
    </div>



</section>
@endsection
