@extends('frontend.layouts_frontend.master')

@section('title')
    About Us
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url(assets/frontend_assets/images/background/bg-page-title-2.jpg);">
        </div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>About Us</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section-three">

        <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-donation"></span></div>


        <div class="icon-four paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="vertical"><span
                class="flaticon-money-jar"></span></div>

        <div class="icon-five paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-gift-box"></span></div>

        <div class="icon-six paroller" data-paroller-factor="0.10" data-paroller-factor-lg="0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span
                class="flaticon-dove-2"></span></div>

        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="sub-title">Know</div>
                            <h2>About Us</h2>
                        </div>
                        <div class="lower-text">Located in the hills of Mityana District of Uganda is Mboona Village which
                            serves as a hub to all all the 7 (Seven) villages which make kibale parish in bulera subcounty.

                            The village has got one water source which is also accessed by the other surrounding villages. A
                            primary school which gives foundation to all the rest of the villages is also in Mboona Village.
                            To add on that is a small health center with a capacity of admitting one patient at time which
                            according to the community was donated by the area member of parliament which too serves the
                            rest of the communities around.

                            Just to note, at the time when we visited Mboona Village we found the health center closed
                            simply because the two nurses had also been sick and one admitted. This tells you the condition
                            of the community. Imagine what happens to the patients if the doctors too are admitted and no
                            one is left to attend to the patients? The answer is yours to think about.

                            In a summary, if Mboona catches a cough then the rest of the other community stands chance of
                            contamination simply because it serves as a hub. We are saying let’s give a ray of hope to these
                            seven villages by uplifting the standards of Mboona Village.</div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <figure class="image wow slideInRight" data-wow-delay="0ms"><img
                            src="assets/frontend_assets/images/resource/featured-image-5.jpg" alt="" /></figure>
                </div>
            </div>

            <!--Featured Blocks-->
            <div class="featured-blocks">
                <div class="row clearfix">
                    <!--Featured Block-->
                    <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-care"></span></div>
                                <h3>Helping Mankind</h3>
                                <div class="text">Auis nostrud exercitation ullam labor offica aliquip exsed consequat
                                    duis autpsum natus dolore magna aliqua minim ipsum.</div>
                            </div>
                        </div>
                    </div>
                    <!--Featured Block-->
                    <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-pigeon"></span></div>
                                <h3>Love Your World</h3>
                                <div class="text">Auis nostrud exercitation ullam labor offica aliquip exsed consequat
                                    duis autpsum natus dolore magna aliqua minim ipsum.</div>
                            </div>
                        </div>
                    </div>
                    <!--Featured Block-->
                    <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-harvest"></span></div>
                                <h3>Food for Everyone</h3>
                                <div class="text">Auis nostrud exercitation ullam labor offica aliquip exsed consequat
                                    duis autpsum natus dolore magna aliqua minim ipsum.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Fun Facts Section-->
    <section class="fun-facts-section">
        <div class="auto-container">
            <div class="fact-counter">
                <div class="row clearfix">

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="98520">0</span>
                            </div>
                            <div class="counter-title">raised Donations</div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="1500" data-stop="306">0</span></div>
                            <div class="counter-title">Causes Solved</div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="1500" data-stop="84">0</span></div>
                            <div class="counter-title">Volunteers</div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                        <div class="inner-box">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="1369">0</span>
                            </div>
                            <div class="counter-title">Projects Done</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="call-to-action alternate-two">
        <div class="image-layer"
            style="background-image:url('assets/frontend_assets/images/background/bg-pattern-1.png')"></div>

        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-xl-9 col-lg-12 col-md-12 col-sm-12">
                    <h2>Become a vital part of Kausid &amp; make a real difference to lives of many!</h2>
                </div>
                <div class="link-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">join to
                                Volunteer</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">

            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <h2>Don’t Just Give. Make Your Money Count Everywhere!</h2>
                        <div class="text">Auis nostrud exercitation ullam laboris aliquip exsed consequat duis aut psum
                            dolore magna aliqua minim.</div>
                        <div class="info-list">
                            <ul class="clearfix">
                                <li>
                                    <div class="icon"><span class="flaticon-first-aid-kit"></span></div><span
                                        class="title">Medical</span>
                                </li>
                                <li>
                                    <div class="icon"><span class="flaticon-book"></span></div><span
                                        class="title">Education</span>
                                </li>
                                <li>
                                    <div class="icon"><span class="flaticon-shelter"></span></div><span
                                        class="title">Shelter</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Faq Column-->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                    <div class="accordion-box">
                        <!--Block-->
                        <div class="accordion block current wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="acc-btn active"><span class="icon-box flaticon-world-1"></span> We better help the
                                people in need <div class="icon flaticon-cross"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Alit usmod tempor incididunt laboret doloe magn aliquaut enis
                                        veniam quis trud exercitation ullamco laboris nisiut aliquip. Exea consequat duis
                                        rue dolor prehendrit lorem sed ipsum torabs.</div>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="accordion block wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="acc-btn"><span class="icon-box flaticon-blood-2"></span> Our aim to provide clean
                                water <div class="icon flaticon-cross"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Alit usmod tempor incididunt laboret doloe magn aliquaut enis
                                        veniam quis trud exercitation ullamco laboris nisiut aliquip. Exea consequat duis
                                        rue dolor prehendrit lorem sed ipsum torabs.</div>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="accordion block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="acc-btn"><span class="icon-box flaticon-donation-2"></span> Raise funds in
                                response to a disaster <div class="icon flaticon-cross"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Alit usmod tempor incididunt laboret doloe magn aliquaut enis
                                        veniam quis trud exercitation ullamco laboris nisiut aliquip. Exea consequat duis
                                        rue dolor prehendrit lorem sed ipsum torabs.</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
