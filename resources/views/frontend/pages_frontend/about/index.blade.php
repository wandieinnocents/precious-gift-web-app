@extends('frontend.layouts_frontend.master')

@section('title')

About Us
@endsection

@section('content')
<!-- content  -->
  <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url(assets/frontend_assets/images/background/bg-page-title-2.jpg);"></div>

        <div class="auto-container">
            <h1>About Us</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Pages</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->

    <!--About Section-->
    <section class="about-section-three">
        
        <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-donation"></span></div>


        <div class="icon-four paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="vertical"><span class="flaticon-money-jar"></span></div>

        <div class="icon-five paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-gift-box"></span></div>
        
        <div class="icon-six paroller" data-paroller-factor="0.10" data-paroller-factor-lg="0.15" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-dove-2"></span></div>

        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="sub-title"><span class="icon"></span> We believe what we achieve</div>
                            <h2>Warmth & True Support <br>For Needed People</h2>
                            <div class="lower-title">We make ways to good things happen</div>
                        </div>
                        <div class="lower-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incids dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercital tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore euy fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa.</div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <figure class="image wow slideInRight" data-wow-delay="0ms"><img src="assets/frontend_assets/images/resource/featured-image-5.jpg" alt="" /></figure>
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
                                <div class="text">Auis nostrud exercitation ullam labor offica aliquip exsed consequat duis autpsum natus dolore magna aliqua minim ipsum.</div>
                            </div>
                        </div>
                    </div>
                    <!--Featured Block-->
                    <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-pigeon"></span></div>
                                <h3>Love Your World</h3>
                                <div class="text">Auis nostrud exercitation ullam labor offica aliquip exsed consequat duis autpsum natus dolore magna aliqua minim ipsum.</div>
                            </div>
                        </div>
                    </div>
                    <!--Featured Block-->
                    <div class="featured-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-harvest"></span></div>
                                <h3>Food for Everyone</h3>
                                <div class="text">Auis nostrud exercitation ullam labor offica aliquip exsed consequat duis autpsum natus dolore magna aliqua minim ipsum.</div>
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
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="98520">0</span></div>
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
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="1369">0</span></div>
                            <div class="counter-title">Projects Done</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

  
    <section class="call-to-action alternate-two">
        <div class="image-layer" style="background-image:url('assets/frontend_assets/images/background/bg-pattern-1.png')"></div>
        
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-xl-9 col-lg-12 col-md-12 col-sm-12">
                    <h2>Become a vital part of Kausid &amp; make a real difference to lives of many!</h2>
                </div>
                <div class="link-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-one"><span class="btn-title">join to Volunteer</span></a>
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
                        <div class="text">Auis nostrud exercitation ullam laboris aliquip exsed consequat duis aut psum dolore magna aliqua minim.</div>
                        <div class="info-list">
                            <ul class="clearfix">
                                <li><div class="icon"><span class="flaticon-first-aid-kit"></span></div><span class="title">Medical</span></li>
                                <li><div class="icon"><span class="flaticon-book"></span></div><span class="title">Education</span></li>
                                <li><div class="icon"><span class="flaticon-shelter"></span></div><span class="title">Shelter</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Faq Column-->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                    <div class="accordion-box">
                        <!--Block-->
                        <div class="accordion block current wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="acc-btn active"><span class="icon-box flaticon-world-1"></span> We better help the people in need <div class="icon flaticon-cross"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Alit usmod tempor incididunt laboret doloe magn aliquaut enis veniam quis trud exercitation ullamco laboris nisiut aliquip. Exea consequat duis rue dolor prehendrit lorem sed ipsum torabs.</div>
                                </div>
                            </div>
                        </div> 

                        <!--Block-->
                        <div class="accordion block wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="acc-btn"><span class="icon-box flaticon-blood-2"></span> Our aim to provide clean water <div class="icon flaticon-cross"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Alit usmod tempor incididunt laboret doloe magn aliquaut enis veniam quis trud exercitation ullamco laboris nisiut aliquip. Exea consequat duis rue dolor prehendrit lorem sed ipsum torabs.</div>
                                </div>
                            </div>
                        </div>

                        <!--Block-->
                        <div class="accordion block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="acc-btn"><span class="icon-box flaticon-donation-2"></span> Raise funds in response to a disaster <div class="icon flaticon-cross"></div></div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Alit usmod tempor incididunt laboret doloe magn aliquaut enis veniam quis trud exercitation ullamco laboris nisiut aliquip. Exea consequat duis rue dolor prehendrit lorem sed ipsum torabs.</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--Testimonial Section-->
    <section class="testimonial-section">
        <div class="image-layer" style="background-image:url('assets/frontend_assets/images/background/bg-pattern-2.png')"></div>

        <div class="auto-container">
        
            <div class="sec-title centered">
                <div class="upper-icon"></div>
                <h2>What People Saying About Us!</h2>
            </div>
                        
            <div class="carousel-box">
                <div class="kausid-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" }, "1024":{ "items" : "1" }}}'>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner">
                            <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy.</div>
                            <div class="info">
                                <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                <div class="author">Sandy Thomas</div>
                                <div class="designation">Donator</div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner">
                            <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy.</div>
                            <div class="info">
                                <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                <div class="author">Sandy Thomas</div>
                                <div class="designation">Donator</div>
                            </div>
                        </div>
                    </div>
                    <!--Testimonial Block-->
                    <div class="testimonial-block">
                        <div class="inner">
                            <div class="text">Since vindictively over agile the some far well besides constructively well airy then one during with close excellent grabbed gosh contrary far dalmatian upheld intrepid bought and toucan majestic more some apart dear boa much cast falcon a dwelled ouch busy.</div>
                            <div class="info">
                                <div class="icon"><span class="flaticon-straight-quotes"></span></div>
                                <div class="author">Sandy Thomas</div>
                                <div class="designation">Donator</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="sponsors-outer">
            <div class="auto-container">
                <!--Sponsors Carousel-->
                <div class="kausid-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "800":{ "items" : "3" }, "1024":{ "items" : "4" }}}'>
                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/clients/1.png" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/clients/2.png" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/clients/3.png" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/clients/4.png" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/clients/1.png" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/clients/2.png" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/clients/3.png" alt=""></a></figure></div>
                    <div class="slide-item"><figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/clients/4.png" alt=""></a></figure></div>
                </div>
            </div>
        </div>
    </section>

@endsection