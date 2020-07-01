@extends('layout.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/banner/banner3.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">About Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
                <div class="heading-section">
                    <h2 class="mb-4 text-center"><span>What is </span>Dreamers Club Africa?</h2>
                </div> <br>
                <p style="text-align:justify;">
                    Dreamers Club Africa is a fun club whose vision is to empower the next generation to be smart money managers capable of building and growing wealth. Our goal is to increase the financial literacy of the next generation of future entrepreneurs. We offer money management, investments and entrepreneurship education for kids and teens to equip them with essential knowledge and life skills for the 21st century. Our methodology simulates the real world and is based on interactive and fun learning, debate, action and reflection with emphasis on social responsibility. Our programs are aligned with the United Nation’s Sustainable Development Goals (SDGs).
                </p>

                <h3 class="mb-4 text-left">Why Dreamers Club Africa</h3>
                <p style="text-align:justify;">
                    Dreamers Club Africa is a believer in information based on real data. Research is therefore in our DNA and at the heart of our philosophy. Before the formation of the club, we conducted research to understand the level of financial literacy in Kenya. We interviewed retirees who had prime jobs during their working days and the working nation.
                </p>

                <p style="text-align:justify;">
                    Over 95% of these retirees heavily rely on their pensions and upkeep from their children for survival. The business ventures they set up after retirement were not successful. They observe lack of money management, investment and entrepreneurship knowledge and skills as the root cause of this. Their greatest concern, however, was that the working nation was heading in the same direction but when warned or advised, they do not listen.
                </p>

                <p style="text-align:justify;">
                    As for the working nation, we simply asked two questions. The first was “if you had the financial knowledge you have today before you started working, how different do you think your life would have been today?” All (100%) the respondents were of the view that their lives would have been far much better financially. The second question was “Given the knowledge you have acquired so far, what have you done or are you doing to ensure your children gain that knowledge before they start working?” Over 92% had either never thought of it this way or had done nothing. 
                </p>

                <p style="text-align:justify;">
                    Most parents/caregiver already know how important it is to teach their kids about money and how to manage it properly. But there’s a difference between knowing and taking action. The question then became, why or what stops them from taking action? The answer to this question lies in the psychology of understanding the difference between the conscious and the subconscious mind and how they operate. It is this understanding that differentiates Dreamers Club Africa. 
                </p>
            </div>
            <div class="col-md-12 order-md-last wrap-about py-5 wrap-about bg-light">
                <div class="text px-4 ftco-animate">
                    <h2 class="mb-4">In Summary:</h2>
                    <ol class="text-justify">
                        <li>
                            Our programs are designed yield powerful results. Psychology is used to develop the proper mindset i.e. fostering behavioral change at a subconscious level and then instilling the intended life skills. In essence, if the mindset is wrong, then it doesn't matter how powerful the program is. This is why most adults attend motivational talks but despite the electrifying outcome, their behavior stays the same.
                        </li><br>
                        <li>
                            We teach ‘how’ to think (diverging the mind), not ‘what’ to think (converging the mind).
                        </li><br>
                        <li>
                            We are data driven meaning any information we use has to be driven by data or some strong assumptions where data is not present.
                        </li><br>
                        <li>
                            We measure and track your child’s progress.
                        </li><br>
                        <li>
                            We believe being different is more important than being the best.
                        </li><br>
                        <li>
                            No one is perfect, so we allow and encourage mistakes. This removes the element of fear and encourages our students to do their best. It is through these mistakes they learn vital lessons that last a lifetime.
                        </li><br>
                        <li>
                            We believe that great financial, investment and entrepreneurship knowledge and skills empower people to better manage their money, make money work for them and improve their quality of life.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<br>

<section class="ftco-section ftco-no-pb">
    <div class="container">
         <div class="col-md-12 text-center heading-section ftco-animate">
             <h2 class="mb-4"><span>Meet</span> The Team </h2>
         </div><br>
        <div class="row text-center">		
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/team/kibe.jpg')}});background-size: contain;"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Andrew Kibe</h3>
                        <span class="position mb-2">Director</span>
                        <div class="faded">
                            <p>
                                Andrew is the founder of Dreamers Club Africa. He is a consultant in financial ...
                            </p>
                            <a class="uk-button uk-button-default" href="#modal-container" uk-toggle>Read More</a>
                            <div id="modal-container" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <h2 class="uk-modal-title">Andrew Kibe - Founder</h2>
                                    <p>
                                        Andrew is the founder of Dreamers Club Africa. He is a consultant in financial risk management with a 
                                        background in Actuarial Mathematics, Financial Modelling, Risk Management and Derivatives. He attained 
                                        these in Scotland and South Africa. He has over 14 years of experience having worked in different finance 
                                        sectors: Capital Markets, Banking, Credit Reference Bureau and the Pension Industry. As a father, Andrew 
                                        is deeply concerned about the future of the next generation. He loves sharing with kids and teens things 
                                        that he has learnt in his life that help him every day - things that he wishes he had been taught at a 
                                        young age. He enjoys talking to curious minds and listening to their refreshing views and observing their 
                                        sincere reactions. He enjoys every single encounter and it makes him proud to see Dreamers Club Africa 
                                        students discuss important issues, thinking, wondering and investigating by themselves. Finally, Andrew 
                                        loves the idea of expanding human potential, and he believes there is no better place to start than 
                                        educating children. He feels honored to be proven right with the Dreamers Club Africa success stories 
                                        he had last year (2019)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/team/peter.jpg')}}); background-size: contain;"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Peter Chege</h3>
                        <span class="position mb-2">Director</span>
                        <div class="faded">
                            <p>Peter is a performance driven and experienced Software Engineer and has been working in Data / Business Intelligence roles for over 5 years.</p>
                            <a class="uk-button uk-button-default" href="#modal-container1" uk-toggle>Read More</a>
                            <div id="modal-container1" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <h2 class="uk-modal-title">Peter Chege - Software Developer</h2>
                                    <p>
                                        Peter is a performance driven and experienced Software Engineer and has been working in Data / Business Intelligence roles for over 5 years. He
is passionate in the information technology and skilled in Mobile Application, Web and Desktop Development, User Experience (UX), User Interface
Design, Cloud Computing, Big Data Analytics and Real-Time Data. Peter is also driven to empower children and youths in a holistic manner. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch" style="background-image: url({{asset('assets/images/team/wanjiru.jpg')}}); background-size: contain;"></div>
                    </div>
                    <div class="text pt-3 text-center">
                        <h3>Wanjiru Muita</h3>
                        <span class="position mb-2">Director</span>
                        <div class="faded">
                            <p>
                                Wanjiru is a finance professional with over 20 years experience in both ...
                            </p>
                            <a class="uk-button uk-button-default" href="#modal-container2" uk-toggle>Read More</a>
                            <div id="modal-container2" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <h2 class="uk-modal-title">Wanjiru Muita - Director</h2>
                                    <p>
                                        Wanjiru is a finance professional with over 20 years experience in both private and public 
                                        sectors in the East African Region.  She is  widely equipped in financial management, 
                                        strategic management, operations management and team leadership.   She is a fellow member 
                                        of the Association of Chartered Certified Accountants.  She holds a Bachelors degree in 
                                        Accounting and a Masters degree in Business Administartion.  She is married with two children.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 order-md-last wrap-about py-5 wrap-about bg-light">
                <div class="text px-4 ftco-animate">
                    <h2 class="mb-4">Letter from the Founder</h2>
                <p class="text-center">
                  Why I created Dreamers Club Africa
              </p>
              <p class="text-left" style="text-align:justify;">
                I am Andrew Kibe, a dad, a risk consultant and founder of Dreamers Club Africa. I am passionate about educating the next generation, especially on financial literacy and entrepreneurship. Before creating Dreamers Club Africa I worked in the financial sector specifically on pension actuarial valuations, health insurance, banking, credit reference bureau and the securities exchange.
              </p>
              <p style="text-align:justify;">
                In my corporate life, I was repeatedly moved by how painful and difficult it was for many adults to deal with even the most basic concepts of personal finance. As a parent and from personal experience, I used to worry that useful information such as money management, something that people use, each and every day of their lives, is completely overlooked in the education system. While the education system can be useful in certain ways, it really falls short in equipping our children with the financial knowledge they need to be able to function as self-sufficient, well-balanced adults once they are out of the school system and living on their own. I knew this was a problem for a lot of families. In 2018 I decided to do something about this and founded Dreamers Club Africa. 
              </p>
              <p style="text-align:justify;">
                Before developing a comprehensive and result oriented program that I knew kids and teens needed, I first developed a basic one to start off with. I used the basic program to conduct a pilot test in 2019 by volunteering to teach entrepreneurship and money management in my local NGO called ‘CAP Youth Empowerment Institute’ (http://capyei.org/about-us/) in Athi River. I also partnered with Mavuno Church Hillside, PCEA Kitengela, Kiuini and Anthena Preparatory Schools to teach their kids and teens this basic program. Armed with the success of the pilot, overwhelming positive feedback from parties involved including parents, and along with the responsibility I felt towards my own child, I developed the comprehensive program called ‘Financial Fitness for Life’ aimed at parents/caregivers who see the need for this.
              </p>

              <p style="text-align:justify;">
                Dreamers Club Africa aims to reach and teach the next generation about money, investments and entrepreneurship at a time in their lives when they are shaping their behavior, when they are open to the message, and most importantly, early enough for them to practice and develop good money habits that they can rely on throughout the many stages of their lives. The goal of Dreamers Club Africa, therefore, is to get out in front of money management behavior before bad habits set in.
              </p>

              <p style="text-align:justify;">
                The vision is to empower the next generation to be smart money managers, build and grow wealth so they can not only survive but, more importantly, so that they thrive. We have taken the time and made the effort in the development phase of our programs to optimize them. Optimization is not just about making sure something "works" right, but also making sure our programs touch the next generation emotionally and change their behavior.
              </p>

              <p style="text-align:justify;">
                We love sharing with kids and teens things that we have learned in our lives that help us every day - things that we wish we had been taught at a young age. It enlightens us to talk to curious minds and listen to their refreshing views and observe their sincere reactions. We enjoy every single encounter and it makes us proud to see our students discuss important issues, thinking, wondering and investigating by themselves. And we know our students love “Dreamers Club Africa” and enjoy our lessons as much as we do. We love the idea of expanding our human potential, and we think there is no better place to start than educating children. We’d be honored if you would become a part of our community, sign your child up to our programs or simply pass this idea on to others.
              </p>
                  
              <p>
                  Sincerely,
              </p>
              <p>
                  Andrew Kibe
                  P.S. Please visit our <a href="/#blog">blog</a>
              </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/banner/banner1.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/banner/banner1.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/banner/banner3.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/banner/banner3.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/banner/banner2.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/banner/banner2.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="{{asset('assets/images/banner/kid.jpg')}}" class="gallery image-popup img d-flex align-items-center"
                    style="background-image: url({{asset('assets/images/banner/kid.jpg')}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-instagram"></span>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
