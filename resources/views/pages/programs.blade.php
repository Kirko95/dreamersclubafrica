@extends('layout.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/banner/banner3.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Our Program</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Our Programs <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section id="packages" class="ftco-section position-spacing">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Special</span> Package</h2>
                <p>
                    Our different programs fall under an umbrella program we call Financial Fitness for Life (F.F.4.L). It has a
                    combination of psychology (the right financial mindset), money management, investments and entrepreneurship.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-left">
                    <div>
                        <h3 class="text-center">After School Club</h3>
                    </div>
                    <div class="img" style="background-image: url({{ asset('assets/images/new/school.jpg') }});"></div>
                    <div class="package">
                        <ul>
                            <li><b>Teaching Format :</b> Instructor-Led, Classroom Activities, Competitions, Events
                            </li>
                            <li><b>Program Length :</b> Continuous as agreed with school.</li>
                            <li><b>Duration :</b>As agreed with school.</li>
                        </ul>
                    </div>
                    <br> <br>
                    <p class="button text-center"><a href="/packages/school" class="btn btn-primary px-4 py-3">Learn More</a></p>

                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-left">
                    <div>
                        <h3 class="mb-3 text-center">Home Schooling</h3>
                    </div>
                    <div class="img" style="background-image: url({{ asset('assets/images/new/home.jpg') }});"></div>
                    <div class="package">
                        <ul>
                            <li><b>Teaching Format :</b> Instructor-Led, Classroom Activities, Home Activities,
                                Events
                            </li>
                            <li><b>Program length :</b>Continous as agrees with parent/school.</li>
                            <li><b>Duration :</b>10 lessons per semester/term. Duration as agreed with parent/school.</li>
                        </ul>
                    </div>
                    <p class="button text-center"><a href="/packages/home" class="btn btn-secondary px-4 py-3">Learn More</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light active pb-4 text-left">
                    <div>
                        <h3 class="mb-3 text-center">Weekends</h3>
                    </div>
                    <div class="img" style="background-image: url({{ asset('assets/images/new/weekends.jpg') }});"></div>
                    <div class="package">
                        <ul>
                            <li><b>Teaching Format :</b> Instructor-Led, Classroom Activities, Home Activities,
                                Events
                            </li>
                            <li><b>Program Length :</b>Six weeks.</li>
                            <li><b>Duration :</b>Two hours every saturday.</li>
                        </ul>
                    </div>
                    <br> <br>
                    <p class="button text-center"><a href="/packages/weekend" class="btn btn-tertiary px-4 py-3">Learn More</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-left">
                    <div>
                        <h3 class="mb-3 text-center">Holiday Camps</h3>
                    </div>
                    <div class="img" style="background-image: url({{ asset('assets/images/course/camp.jpg') }});"></div>
                    <div class="package">
                        <ul>
                            <li><b>Teaching Format :</b> Instructor-Led, Classroom Activities, Home Activities,
                                Events
                            </li>
                            <li><b>Program Length :</b>One week.</li>
                            <li><b>Duration :</b>Two hours per day.</li>
                        </ul>
                    </div>
                    <br> <br> <br>
                    <p class="button text-center"><a href="/packages/holiday" class="btn btn-quarternary px-4 py-3">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection