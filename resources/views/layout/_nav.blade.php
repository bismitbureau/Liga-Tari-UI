
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}">

<nav class="navbar navbar-light bg-white mb-0">
  <a class="navbar-brand " href="/">
    <img src="img/ligtar1.png" class="mt-0" alt="">
  </a>
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

<div class="mt-5">
  <ul class="nav justify-content-center mt-5">
    <li class="nav-item dropdown mr-2 flex-collumn text-center">
      <a class="nav-link text-dark dropdown-toggle" href="/about" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About
          <div id="kotak" class="ml-0"></div>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-dark" href="/about">About Us</a>
          <a class="dropdown-item text-dark" href="#">Achievements</a>
        </div>
    </li>
    <li class="nav-item mr-2 text-center">
      <a class="nav-link text-dark" href="/events">
        Events
        <div id="kotak" class="ml-0"></div>
      </a>
    </li>
    <li class="nav-item mr-2 text-center">
      <a class="nav-link text-dark" href="#">
      Gallery
      <div id="kotak" class="ml-0"></div>
      </a>
    </li>
    <li class="nav-item mr-2 text-center">
      <a class="nav-link text-dark" href="/contact-us">
      Contact
      <div id="kotak" class="ml-0"></div>
      </a>
    </li>
  </ul>
</div>

  <div class="row">
    <div class="col-md-auto col-4">
      <button class="btn btn-outline-info text-dark ">
        <img class="img-responsive mr-1" style="max-width:20px;" src="{{asset('img/person1.png')}}" alt="">
        Liga Tari for Hire
      </button>
    </div>
    <div class="col-md-auto col-4">
      <button class="btn btn-outline-info text-dark mr-1">
        <img class="img-responsive mr-1" style="max-width:15px;" src="{{asset('img/globe.png')}}" alt="">
        English
      </button>
    </div>
  </div>
</nav>
