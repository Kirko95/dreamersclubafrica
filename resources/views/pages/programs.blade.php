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
            <div class="col-md-8 text-center heading-section ftco-animate"><br>
                <h2 class="mb-4"><span>Special</span> Package</h2>
                <p>
                We’re conducting our lessons online via zoom! <a href="/contact">Contact us </a> for more information.
                </p>
            </div>
            
        </div>
        <hr><br>
        <div class="row">
        <div class="col-md-12  heading-section ftco-animate">
                <h2 class="mb-4"><span>Our</span> Program</h2>
                <h3 class="mb-4">Financial Fitness for Life</h3>
                <p>
                Financial Fitness for Life (F.F.4.L) is our umbrella program which 
                combines psychology (the right financial mindset), money management, 
                investments and entrepreneurship. Our program is simple but effective 
                and is designed to teach and share revolutionary wisdom with the next 
                generation. We tailor our content and teaching methods to suit each 
                age group. The vital knowledge and experience the children gain will 
                set them free and shift their minds from aiming to work for money, 
                to money working for them.
                </p>
            </div>
            <div class="col-md-12  heading-section ftco-animate">
                <h3 class="mb-4">Who Is This Program For?</h3>
                <p>
                Our Financial Fitness for Life (FF4L) program is aimed at the next 
                generation of doers and is tailored to suit kids (ages 8 – 13), 
                teens (14 – 17) and the youth.

                </p>
            </div>
            <div class="col-md-12  heading-section ftco-animate">
                <h3 class="mb-4">Methods of Delivery</h3>
                <p>
                The FF4L program is delivered through four different channels to 
                suit the needs of you and your children:

                </p>
            </div>
        </div>
<br>
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