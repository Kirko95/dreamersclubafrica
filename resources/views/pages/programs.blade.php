@extends('layout.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/banner/class.jpg') }});">
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
                Our Financial Fitness for Life (FF4L) program is aimed at the next generation 
                of doers and is tailored to suit kids, teens and the youth.


                </p>
            </div>
            <div class="col-md-12  heading-section ftco-animate">
                <h3 class="mb-4">Subjects Covered</h3>
                <ol>
                    <li> Financial Mindset </li>
                    <li> Money Management </li>
                    <li> Entrepreneurship </li>
                    <li> Investments </li>
                </ol>
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
                        <h3 class="mb-3 text-center">Online classes</h3>
                    </div>
                    <div class="img" style="background-image: url({{ asset('assets/images/course/camp.gif') }});"></div>
                    <div class="package">
                        <ul>
                            <li><b>Teaching Format :</b> Instructor-Led, Classroom Activities, Home Activities,
                                Events
                            </li>
                            <li><b>Program Length :</b>10 to 15 weeks depending on age.</li>
                            <li><b>Duration :</b>1 hour, lessons twice a week.</li>
                        </ul>
                    </div>
                    <br> 
                    <p class="button text-center"><a href="/packages/holiday" class="btn btn-quarternary px-4 py-3">Learn More</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12  heading-section ftco-animate">
                <h2 class="mt-5 pb-3"><span>Sustainable Development</span> Goals</h2>
                <p>
                Dreamers Club at schools will also teach, discuss, debate and engage 
                its members on the United Nation’s Sustainable Development Goals.
                </p>
                <p>
                Why? Because children are born with an innate sense of 
                <a href="http://happysciencemom.com/are-children-born-with-compassion/">charity and 
                compassion</a> At Dreamers Club Africa we refer this as humanitarian 
                responsibility because we believe we are responsible for taking good 
                care of our planet and all that is within it. Children naturally look 
                for ways to make a contribution and help others. But just as we give 
                our children opportunities to use their legs when they are learning 
                to walk, we need to give them opportunities to exercise their humanitarian 
                responsibility muscles so that giving a helping hand becomes a natural 
                part of their life. It is important to teach young ones that they are 
                part of a larger community and that we are responsible for everything 
                around us because we were given dominion over all things.
                </p>

            </div>

            <div class="col-md-12  heading-section ftco-animate">
                <p>
                Children enrolled in Dreamers Club Africa are taught and guided on 
                how to generate new business ideas by focusing on day to day 
                problems, needs, frustrations and looking for ways to solve them. 
                The goal is to nurture them to be looking for solutions where problems, 
                needs and frustrations exist. To encourage them to develop this skill, 
                there will be a yearly competition in idea generation and the crafting 
                of solutions to address these problems as a business. The members of 
                Dreamers Club Africa from one school will therefore compete against 
                members from other schools to come up with workable and sustainable 
                solutions to address the Sustainable Development Goals.
                </p>
                
            </div>
      
        </div>
    </div>
</section>
@endsection