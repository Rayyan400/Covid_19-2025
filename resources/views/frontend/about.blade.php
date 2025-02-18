@section('contant')
@extends('frontend.index')

<div class="hero-v1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mr-auto text-center text-lg-left">
          <span class="d-block subheading">About</span>
          <h1 class="heading mb-3">About Us</h1>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
          <p class="mb-4"><a href="#" class="btn btn-primary">How to prevent</a></p>



        </div>
        <div class="col-lg-6">
          <figure class="illustration">
            <img src="images/illustration.png" alt="Image" class="img-fluid">
          </figure>
        </div>
        
      </div>
    </div>
  </div>


  <!-- MAIN -->




  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <figure class="img-play-vid">
            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
            <div class="absolute-block d-flex">
              <span class="text">Watch the Video</span>
              <a href="https://www.youtube.com/watch?v=9pVy8sRC440" data-fancybox class="btn-play">
                <span class="icon-play"></span>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-lg-5 ml-auto">
          <h2 class="mb-4 section-heading">What is Coronavirus?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
          <ul class="list-check list-unstyled mb-5">
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipisicing elit</li>
            <li>Unde doloremque</li>
          </ul>
          <p><a href="#" class="btn btn-primary">Learn more</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="section-heading">Team</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, voluptate!</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="team">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid">
            <h3>Jane Smith</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut commodi accusantium eveniet nemo maiores deleniti rerum animi, deserunt veniam error.</p>
            <p>
              <span class="d-block mb-2"><strong>Connect on social</strong></span>
              <a href="#" class="p-2 icon-facebook"></a>
              <a href="#" class="p-2 icon-twitter"></a>
              <a href="#" class="p-2 icon-linkedin"></a>
              <a href="#" class="p-2 icon-instagram"></a>
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid">
            <h3>Cynthia Anderson</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut commodi accusantium eveniet nemo maiores deleniti rerum animi, deserunt veniam error.</p>
            <p>
              <span class="d-block mb-2"><strong>Connect on social</strong></span>
              <a href="#" class="p-2 icon-facebook"></a>
              <a href="#" class="p-2 icon-twitter"></a>
              <a href="#" class="p-2 icon-linkedin"></a>
              <a href="#" class="p-2 icon-instagram"></a>
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team">
            <img src="images/person_3.jpg" alt="Image" class="img-fluid">
            <h3>Gregg Wallace</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut commodi accusantium eveniet nemo maiores deleniti rerum animi, deserunt veniam error.</p>
            <p>
              <span class="d-block mb-2"><strong>Connect on social</strong></span>
              <a href="#" class="p-2 icon-facebook"></a>
              <a href="#" class="p-2 icon-twitter"></a>
              <a href="#" class="p-2 icon-linkedin"></a>
              <a href="#" class="p-2 icon-instagram"></a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section stats">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="section-heading">Coronavirus Statistics</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, voluptate!</p>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">14,112,077</strong>
            <span class="label">Active Cases</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">595,685</strong>
            <span class="label">Deaths</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number">8,397,665</strong>
            <span class="label">Recovered Cases</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <span class="subheading">What you need to do</span>
          <h2 class="mb-4 section-heading">How To Protect Yourself</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 ">
          <div class="row mt-5 pt-5">
            <div class="col-lg-6 do ">
              <h3>You should do</h3>
              <ul class="list-unstyled check">
                <li>Stay at home</li>
                <li>Wear mask</li>
                <li>Use Sanitizer</li>
                <li>Disinfect your home</li>
                <li>Wash your hands</li>
                <li>Frequent self-isolation</li>
              </ul>
            </div>
            <div class="col-lg-6 dont ">
              <h3>You should avoid</h3>
              <ul class="list-unstyled cross">
                <li>Avoid infected people</li>
                <li>Avoid animals</li>
                <li>Avoid handshaking</li>
                <li>Aviod infected surfaces</li>
                <li>Don't touch your face</li>
                <li>Avoid droplets</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="images/protect.png" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

@endsection