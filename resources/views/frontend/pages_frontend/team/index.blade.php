@extends('frontend.layouts_frontend.master')

@section('title')
    Gallery
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-page-title-2.jpg') }});">
        </div>

        <div class="auto-container">
            <h1>Staff</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Pages</a></li>
                    <li class="active">Staff</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->
    <section class="team-section">
        <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20"
            data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"
            style="transform: translateX(-160px); transition: transform 0s linear 0s; will-change: transform;"><span
                class="flaticon-tshirt"></span></div>

        <div class="auto-container">

            <div class="sec-title centered">
                <div class="upper-icon"></div>
                <h2>Our Volunters</h2>
                <div class="text">We believe what we achieve</div>
            </div>

            <div class="carousel-box">
                <div class="kausid-carousel owl-theme owl-carousel owl-loaded owl-drag"
                    data-options="{&quot;loop&quot;: true, &quot;margin&quot;: 30, &quot;autoheight&quot;:true, &quot;lazyload&quot;:true, &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 6000, &quot;smartSpeed&quot;: 300, &quot;responsive&quot;:{ &quot;0&quot; :{ &quot;items&quot;: &quot;1&quot; }, &quot;600&quot; :{ &quot;items&quot; : &quot;1&quot; }, &quot;768&quot; :{ &quot;items&quot; : &quot;2&quot; } , &quot;800&quot;:{ &quot;items&quot; : &quot;2&quot; }, &quot;1024&quot;:{ &quot;items&quot; : &quot;3&quot; }}}">


                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-6298px, 0px, 0px); transition: all 0.3s ease 0s; width: 9206px;">
                            <div class="owl-item cloned" style="width: 454.5px; margin-right: 30px;">
                                <div class="team-block">
                                    <div class="inner-box">
                                        <figure class="image-box"><a href="#"><img
                                                    src="assets/frontend_assets/images/resource/team-image-2.jpg"
                                                    alt=""></a></figure>
                                        <h3><a href="#">Liam Irvines</a></h3>
                                        <div class="designation">Senior Admin</div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 454.5px; margin-right: 30px;">
                                <div class="team-block">
                                    <div class="inner-box">
                                        <figure class="image-box"><a href="#"><img
                                                    src="assets/frontend_assets/images/resource/team-image-3.jpg"
                                                    alt=""></a></figure>
                                        <h3><a href="#">Diana Leslie</a></h3>
                                        <div class="designation">Junior Volunteer</div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item cloned" style="width: 454.5px; margin-right: 30px;">
                                <div class="team-block">
                                    <div class="inner-box">
                                        <figure class="image-box"><a href="#"><img
                                                    src="assets/frontend_assets/images/resource/team-image-1.jpg"
                                                    alt=""></a></figure>
                                        <h3><a href="#">Scott William</a></h3>
                                        <div class="designation">Head of Team</div>
                                    </div>
                                </div>
                            </div>









                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                            role="button" class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot"><span></span></button><button role="button"
                            class="owl-dot active"><span></span></button></div>
                </div>
            </div>
        </div>
    </section>
@endsection
