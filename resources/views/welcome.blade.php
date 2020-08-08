@extends('layout.app')

@section('content')
<section class="home-slider owl-carousel banner-container">

    <div class="slider-item" style="background-image:url({{ asset('assets/images/banner/banner4.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h2 style="color: white; padding-top: 220px;" class="mb-4">FINANCIAL FREEDOM FOR YOUR CHILDREN</h2>
                    {{-- <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url({{ asset('assets/images/banner/banner1.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h2 style="color: white; padding-top: 220px;" class="mb-4">TEACHING FINANCIAL LITERACY AND ENTREPRENEURSHIP TO THE NEXT GENERATION OF DOERS</h2>
                    {{-- <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url({{ asset('assets/images/banner/banner3.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h2 style="color: white; padding-top: 230px;" class="mb-4 head-size">GIVE YOUR CHILDREN A FINANCIAL HEAD START</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url({{ asset('assets/images/gallery/5.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h2 style="color: white; padding-top: 230px;" class="mb-4 head-size">We’re conducting our lessons online via Zoom!</h2>
                     <p><a href="/contact" class="btn btn-secondary px-4 py-3 mt-3"> Contact us</a></p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-teacher"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Interactive</h3>
                        <p>Tell me and I’ll forget; Show me and I may remember. Involve me and I’ll learn.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary box-color1">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-reading"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Innovative</h3>
                        <p>Innovation is seeing what everybody has seen and thinking what nobody has thought.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth box-color2">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-books"></span>
                    </div>
                    <div class="media-body p-2 mt-3 ">
                        <h3 class="heading">Fun</h3>
                        <p>Creativity is intelligence having fun.</p>
                    </div>
                </div>
            </div>
            <div
                class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary box-color3">
                <div class="media block-6 d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-diploma"></span>
                    </div>
                    <div class="media-body p-2 mt-3">
                        <h3 class="heading">Engaging</h3>
                        <p>If you want engagement, be engaging. Ask questions. Leave room for your audience to add
                            their voice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">

            <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
                <div class="text-center heading-section ftco-animate">
					<h2 class="mb-4"><span>What We Offer</span></h2>
					<p>Your opportunity to give your young ones the financial head start you missed out on. We teach money management, investments & entrepreneurship through our fun and engaging program at home, at school, on weekends or on holidays.</p>
				</div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-security"></span></div>
                            <div class="text">
                                <h3>Money management</h3>
                                <p style="text-align:justify;">Money management is a life skill because it is a significant part of every day of our lives. You must gain control over your money or else the lack of control will forever control you. The myth that teaching children about money is not ‘good’ leads to the latter. There is enough evidence out in the open to demonstrate that most adults struggle with personal finance. Like other skills fostered from a tender age such as music, football, etc. money management should not be ignored.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-education"></span></div>
                            <div class="text">
                                <h3>Power of The Mind</h3>
                                <p style="text-align:justify;">Before you can transform your wallet from poor to rich, you have to transform your mind from poor to rich. The size of your success is measured by the strength of your desire; the size of your dream; and how you handle disappointments along the way. Failure defeats losers. Failure inspires winners. These ideas and more are at the center of the mind – subconscious and conscious.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-reading"></span></div>
                            <div class="text">
                                <h3>Investments</h3>
                                <p style="text-align:justify;">Investments are about making money work for you and not vice versa. The secret to
                                    real financial freedom or the way to
                                    wealth is through cash flowing assets. The philosophy of the rich and the poor
                                    is this: the rich invest their money and
                                    spend what is left. The poor spend their money and invest what is left.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-2 d-flex">
                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span
                                    class="flaticon-diploma"></span></div>
                            <div class="text">
                                <h3>Entrepreneurship</h3>
                                <p style="text-align:justify;">We cannot solve our problems with the same thinking we used when we created them.
                                    Inside every problem lies an
                                    opportunity. Therefore, innovation is at the center of true entrepreneurship.
                                    Most people never get wealthy simply
                                    because they are not trained to recognize opportunities right in front of them.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-intro" style="background-image: url({{ asset('assets/images/banner/banner3.jpg') }});"
    data-stellar-background-ratio="0.5">
    <div class="overlay1"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            </div>
            <div class="col-md-6 ftco-animate align-items-center">
                <h2>Teaching Kids Money Management, Investments and Entrepreneurship.</h2>
                <p class="mb-0" >These three elements are so deeply embedded in our daily lives that they have become life skills. By teaching our children early on about how the real world works, we empower them with these life skills. Most parents already know the importance of teaching these skills but there’s a big difference between knowing and taking action.</p>
                <p class="mb-0"><a href="/register" class="btn btn-secondary px-4 py-3">Register</a></p>
            </div>
        </div>
    </div>
</section>

<section id="courses" class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="text-center heading-section ftco-animate">
                <h2 class="mb-4 text-center"><span>Our </span> Program</h2>
                <p style="text-align:justify;">Financial Fitness for Life (F.F.4.L) is our umbrella program which combines psychology (the right financial mindset), money management, investments and entrepreneurship. Our program is simple but effective and is designed to teach and share revolutionary wisdom with the next generation. We tailor our content and teaching methods to suit each age group. The vital knowledge and experience the children gain will set them free and shift their minds from aiming to work for money, to money working for them. </p>
            </div>
        </div>
        <div class="row">
            <div class="course d-lg-flex ftco-animate">
                <div class="img col-md-6" style="background-image: url({{ asset('assets/images/quadrant.png') }}); background-size: contain;"></div>
                <div class="text bg-light p-4 col-md-6">
                   <a href="/programs"> <h3>Financial Fitness for Life</h3></a>
                    <p class="subheading"><span>CLASS TIME</span></p>
                    <p class="subheading"><span>Ages 7 – 9 :<br></span> 3:00pm – 4:00pm </p>
                    <p class="subheading"><span>Ages 10 – 13 :<br></span> 4:15pm – 5:15pm </p>
                    <p class="subheading"><span>Ages 14 – 17 :<br></span> 5:30pm – 6:30pm </p>
                    <p>Our program is designed to shift kids’ and teens’ minds from the left side of the cash-flow quadrant to the right side. 
                    That is, from aiming and dreaming to work for money to money working for them.
                    <br><br>
                        We’re conducting our lessons online via zoom! <a href="/contact">Contact us </a> for more information.
                    </p>
                    <br>
                    <div class="btn-read row">
                        <div class="col-6">
                            <p><a href="/register" class="btn btn-primary px-3 py-1">Book Now</a></p>
                        </div>
                        <div class="col-6">
                            <p><a href="/programs" class="btn btn-secondary px-3 py-1">Read More</a></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
            </div>

        </div>
    </div>
</section>

<section class="ftco-intro" style="background-image: url({{ asset('assets/images/dreamers.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Why Join Dreamers Club Africa? </h2>
                <p class="mb-0">A few lessons and outcomes from the program after graduation.</p>
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <p class="mb-0"><a href="/reasons" class="btn btn-secondary px-4 py-3">Why Join?</a></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url({{ asset('assets/images/bg_4.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                <h2 class="mb-4"><span>Over 20 Years of</span> Experience</h2>
            </div>
        </div>
        <div class="row d-md-flex align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="100">0 </strong>
                                <span>Number of Classes</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="270">0</strong>
                                <span>Happy Parents</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="310">0</strong>
                                <span>Kids & teens who completed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('components.testimony')
<br><br>
<div class="container justify-content-center">
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb"
    style="background-image: url({{ asset('assets/images/new/quote.jpg') }}); background-size: contain; background-repeat: no-repeat;"
    data-stellar-background-ratio="1">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5 bg-primary">
                <div class="heading-section heading-section-white ftco-animate mb-5">
                    <h2 class="mb-4">Request a Quote</h2>
                    <p>
                        The cost will depend on the following:<br>
                        * Agreed duration.<br>
                        * Program length for each level.<br>
                        * Number of children per age group.
                    </p>
                </div>
                <form id="quote_form" action="/quote" method="POST" class="appointment-form ftco-animate">
                    @csrf
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="form-group ml-md-4">
                            <input name="kids_number" type="number" class="form-control"
                                placeholder="Number of Kids" required>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group ">
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group ml-md-4">
                            <input name="phone" type="text" class="form-control" placeholder="Phone" required>
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea name="message" id="" cols="30" rows="2" class="form-control"
                                placeholder="Message"></textarea>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Request A Quote"
                                class="btn btn-secondary py-3 px-4 quote_button">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</div>

<br><br>


{{-- <section id="blog" class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Blog</span> Posts</h2>
                <p>An eye opening truth - Why most adults have unhealthy personal habits.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="part_one.html" class="block-20 d-flex align-items-end"
                        style="background-image: url({{asset('assets/images/banner/banner3.jpg')}});">
                        <div class="meta-date text-center p-2">
                            <span class="day">6</span>
                            <span class="mos">January</span>
                            <span class="yr">2020</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="blog_detail_dreamers.html">Part 1 - Personal Finance Statistics in Kenya</a></h3>
                        <p>This is the first blog for Dreamers Club Africa and it aims to point out why most adults, especially in
                            Africa, have unhealthy personal finance habits.</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="meta-chat"><span class="icon-chat"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="1blog-single.html" class="block-20 d-flex align-items-end"
                        style="background-image: url({{asset('assets/images/new/mind.jpg')}});">
                        <div class="meta-date text-center p-2">
                            <span class="day">27</span>
                            <span class="mos">January</span>
                            <span class="yr">2020</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Part 2 - The Subconscious and Conscious Mind</a></h3>
                        <p>First of all, did you know that the brain grows to about 80% of its size by the age of 3 years? Contemplate
                            that for a while and picture how crucial those ...</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="1blog-single.html" class="block-20 d-flex align-items-end"
                        style="background-image: url({{asset('assets/images/new/idea.jpg')}});">
                        <div class="meta-date text-center p-2">
                            <span class="day">3</span>
                            <span class="mos">February</span>
                            <span class="yr">2020</span>
                        </div>
                    </a>
                    <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Part 3 - TheShortfalls of our Education System</a></h3>
                        <p>We first acknowledge that no system is perfect. Having said that, based on our view, we wish to highlight,
                            three points which we consider to be flaws in our education...</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-secondary">Read More <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<br>
@endsection
