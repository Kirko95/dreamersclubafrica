@extends('layout.app')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('assets/images/banner/banner3.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-4 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Address</h3>
              <p>Nairobi, Kenya</p>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Contact Number</h3>
              <p><a href="tel://254700323810">+254 700 323 810</a></p>
            </div>
        </div>
        <div class="col-md-4 d-flex">
            <div class="bg-light align-self-stretch box p-4 text-center">
                <h3 class="mb-4">Email Address</h3>
              <p><a href="mailto:info@dreamersafrica.com">info@dreamersclubafrica.com</a></p>
            </div>
        </div>
      </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <form action="/contact-us" method="POST" class="contact-us">
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5 contact-button">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="map-placement" style="background-image: url({{asset('assets/images/new/girl.jpg')}}); background-size: contain; background-repeat: no-repeat; width: 100%; height: auto;"></div>
            </div>
        </div>
    </div>
</section>

@endsection
