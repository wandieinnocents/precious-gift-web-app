@extends('frontend.layouts_frontend.master')
@section('title')
    Home - Precious Gift
@endsection
@section('content')
    <!-- Banner Section -->
    @include('frontend.includes_frontend.slider')
    <!--End Banner Section -->
    <!--Moto Section-->
    <section class="our-moto">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-care"></span></div>
                                <h3>Mission</h3>
                                <div class="text">
                                    To Love and Care for the vulnerable Children to develop socially,
                                    physically, Economically and spiritualy into responsible people/ citizens.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-pigeon"></span></div>
                                <h3>Vision</h3>
                                <div class="text">To serve as children advocates to enable them lead better lives.​</div>
                            </div>
                        </div>
                    </div>
                    <!--Moto Block-->
                    <div class="moto-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="inner">
                                <div class="icon"><span class="flaticon-harvest"></span></div>
                                <h3>Core Values</h3>
                                <div class="text">Integrity, Stewardship, Excellence, and Dignity.​</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Section Two-->
    <section class="about-section-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="sub-title"> Get to Know</div>
                            <h2>Our Background</h2>
                        </div>
                        <div class="text">
                            Precious Child Development Centre is an organization based in a rural area and its major aim is
                            helping the vulnerable children and the community at large (in poverty stricken households) so
                            as to enhance development and to improve livelihoods. PCDC operates in Kibale Parish, Bulera
                            Sub-County in Mityana District and Kakiri in Wakiso District in Uganda.
                        </div><br>
                        <div class="text">
                            Kibaale Parish is located in Bulera sub-county, Mityana district of the republic of Uganda, 20km
                            from Mityana Taxi Park. The parish serves as a hub for ten villages of Buleeya, Bulwanyamayinja,
                            Bombo, Buligiya, Buwalantaama, Nalulangadde, Lubanyi, Kigabi, Kayunga, and Lusaana. The Parish
                            is identified with scarce poor water sources, poor accommodation, poor sanitation, and high
                            numbers of school dropouts and young mothers. A primary school which gives foundation to the
                            rest of the villages and a small healthy centre with limited out patient services which
                            according to the community was donated by area Member of Parliament also serving the rest of the
                            communities.
                        </div><br>
                        <div class="text">
                            The core values of the organization are integrity, stewardship, excellence, and dignity. Our
                            objectives are To educate, support and monitor the registered children and their families
                            towards a sustainable healthy and development.
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft">
                        <figure class="image-box"><img src="assets/frontend_assets/images/resource/owner-1.png"
                                alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fun Facts Section-->
    <section class="fun-facts-two">
        <div class="image-layer" style="background-image:url('assets/frontend_assets/images/background/a.png')">
        </div>
        <div class="auto-container">
            <div class="lower-content">
                <div class="row clearfix">
                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <h2>You can be part of <br>Our organization</h2>
                            <div class="text">PRECIOUS GIFT E.V is a community based organisation aimed to carry out the
                                developments of Kibale Parish, Bulera Sub-County, Mityana district in Uganda.
                            </div> <br>
                            <div class="text">PRECIOUS GIFT E.V also helps people who are living with ALBINISM in Uganda.
                                They need alot of help in many different fields because there is too much discrimination on
                                them, Also daily special sun cream, specia sun glasses, hats, etc.
                            </div>
                        </div>
                    </div>
                    <div class="facts-column col-lg-6 col-md-12 col-sm-12">
                        <div class="fact-counter">
                            <div class="row clearfix">
                                <!--Column-->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="count-box"><span class="count-text" data-speed="3000"
                                                data-stop="30">0</span></div>
                                        <div class="counter-title">Cities</div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                                    <div class="inner-box">
                                        <div class="count-box"><span class="count-text" data-speed="1500"
                                                data-stop="306">0</span></div>
                                        <div class="counter-title">Causes Solved</div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                                    <div class="inner-box">
                                        <div class="count-box"><span class="count-text" data-speed="1500"
                                                data-stop="14">0</span></div>
                                        <div class="counter-title">Volunteers</div>
                                    </div>
                                </div>
                                <!--Column-->
                                <div class="counter-column col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                                    data-wow-delay="1200ms">
                                    <div class="inner-box">
                                        <div class="count-box"><span class="count-text" data-speed="3000"
                                                data-stop="12">0</span></div>
                                        <div class="counter-title">Projects Done</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Upcoming Events Section-->
    <!-- <section class="coming-events">
                    <div class="icon-one paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15"
                        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal">
                        <span class="flaticon-heart-2"></span>
                    </div>
                    <div class="icon-two paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.15"
                        data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal">
                        <span class="flaticon-gift-box"></span>
                    </div>
                    <div class="auto-container">
                        <div class="sec-title centered">
                            <div class="upper-icon"></div>
                            <h2>Upcoming Events</h2>
                            <div class="text">Lovely events for everyone to join</div>
                        </div>
                        <div class="carousel-box">
                            <div class="kausid-carousel owl-theme owl-carousel"
                                data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1024":{ "items" : "2" }}}'>
                                <div class="slide-item">
                                    <div class="event-block-two">
                                        <div class="inner-box">
                                            <figure class="image-box"><a href="event-single.html"><img
                                                        src="assets/frontend_assets//resource/event-image-1.jpg" alt=""></a></figure>
                                            <div class="lower-box">
                                                <div class="date"><span>18</span> Aug <br>2019</div>
                                                <h3><a href="event-single.html">Water Supply Charity & Fundrising Event For
                                                        Needy People</a></h3>
                                                <div class="info clearfix">
                                                    <span class="time">From 4:30 PM to 9:30 PM</span>
                                                    <span class="location">Melbourne, Australia</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide-item">
                                    <div class="event-block-two blue-theme">
                                        <div class="inner-box">
                                            <figure class="image-box"><a href="event-single.html"><img
                                                        src="assets/frontend_assets//resource/event-image-2.jpg" alt=""></a></figure>
                                            <div class="lower-box">
                                                <div class="date"><span>31</span> Aug<br>2019</div>
                                                <h3><a href="event-single.html">Grow More Trees And Save Our Planet Fundrising
                                                        Program</a></h3>
                                                <div class="info clearfix">
                                                    <span class="time">From 4:30 PM to 9:30 PM</span>
                                                    <span class="location">Kansas City, Newyork</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->
    <section class="call-to-action alternate" style="background-color:red;">
        <div class="image-layer"
            style="background-image:url('assets/frontend_assets/images/background/bg-pattern-1.png')"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-xl-9 col-lg-12 col-md-12 col-sm-12">
                    <h2>Fundraise To Help A Child Today</h2>
                    <p>We offer assistance to a large number of children in Uganda, your assistance means alot to us,
                        <br>Help a child by offering to donate anything.
                    </p>
                </div>
                <div class="link-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="link-box">
                        <a href="{{ route('contact.create') }}" class="theme-btn btn-style-one"><span
                                class="btn-title">Talk to Us
                                Today!</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials Two Section-->
    <!-- News Section -->
    <section class="news-section">
        <div class="image-layer"
            style="background-image:url('assets/frontend_assets/images/background/bg-pattern-1.png')"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-xl-6 col-lg-6 col-md-12">
                    <div class="sec-title">
                        <div class="sub-title"></span> Get updates on our works, </div>
                        <h2>Read The Articles</h2>
                    </div>
                </div>
                <div class="link-column col-xl-6 col-lg-6 col-md-12">
                    <div class="link-box"><a href="/articles" class="theme-btn btn-style-one"><span class="btn-title"
                                style="background-color:red;">More articles</span></a></div>
                </div>
            </div>
            <div class="row clearfix">
                <!--News Block-->
                @foreach ($posts as $post)
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms">
                            <figure class="image-box"><a href="articles/{{ $post->id }}"><img
                                        src="{{ $post->post_photo }}" alt=""
                                        style="max-width: 500px; height: 300px;"></a>
                            </figure>
                            <div class="lower-box">
                                <div class="info">Posted By : {{ $post->post_created_by }} &ensp;|&ensp;
                                    {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }} | </div>
                                <h3><a href="articles/{{ $post->id }}">{{ $post->post_title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- <div class="sponsors-outer">
            <div class="auto-container">
                <!--Sponsors Carousel-->
                <div class="kausid-carousel owl-theme owl-carousel"
                    data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "3" }, "768" :{ "items" : "3" } , "800":{ "items" : "4" }, "1024":{ "items" : "5" }}}'>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/1.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/2.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/3.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/4.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/1.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/2.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/3.png" alt=""></a></figure>
                    </div>
                    <div class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="assets/frontend_assets/images/clients/4.png" alt=""></a></figure>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
@endsection
