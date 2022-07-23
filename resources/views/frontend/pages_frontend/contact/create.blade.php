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



    <section class="contact-section contact-page">
        <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20"
            data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"
            style="transform: translateX(-214px); transition: transform 0s linear 0s; will-change: transform;"><span
                class="flaticon-heart-2"></span></div>

        <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"
            style="transform: translateX(44px); transition: transform 0s linear 0s; will-change: transform;"><span
                class="flaticon-heart-2"></span></div>

        <div class="icon-three paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15"
            data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"
            style="transform: translateX(-138px); transition: transform 0s linear 0s; will-change: transform;"><span
                class="flaticon-dove"></span></div>

        <div class="auto-container">

            <div class="sec-title centered">
                <div class="upper-icon"></div>
                <h2>Spread The Love &amp; Get Involved!</h2>
                <div class="text">Join Us To Save The World Of Humanitarian And Feel Happy To Support</div>
            </div>
            <div class="row clearfix">
                <!--Form Column--->
                <div class="form-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="shape-box">
                            <h3>Working Together To Make A Difference</h3>
                        </div>
                        <div class="default-form contact-form">
                            <form method="post" action="" id="contact-form" novalidate="novalidate">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Your Name</div>
                                        <input type="text" name="username" placeholder="" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Email</div>
                                        <input type="email" name="email" placeholder="" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Phone</div>
                                        <input type="text" name="phone" placeholder="" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">How we can help?</div>
                                        <input type="text" name="subject" placeholder="" required="">
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="field-label">Message</div>
                                        <textarea name="message" placeholder="Write your message"></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                                class="btn-title">Send Message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Image Column--->
                <div class="image-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="icon-1 paroller" data-paroller-factor="-0.30" data-paroller-factor-lg="-0.20"
                            data-paroller-factor-sm="-0.20" data-paroller-type="foreground"
                            data-paroller-direction="vertical"
                            style="transform: translateY(-222px); transition: transform 0s linear 0s; will-change: transform;">
                        </div>
                        <div class="icon-2 paroller" data-paroller-factor="0.30" data-paroller-factor-lg="0.20"
                            data-paroller-factor-sm="0.10" data-paroller-type="foreground"
                            data-paroller-direction="vertical"
                            style="transform: translateY(402px); transition: transform 0s linear 0s; will-change: transform;">
                        </div>
                        <figure class="image"><img
                                src="{{ asset('assets/frontend_assets/images/resource/featured-image-3.jpg') }}"
                                alt=""></figure>
                    </div>
                </div>

            </div>

            <div class="info-container">
                <div class="row clearfix">
                    <!--Info Block-->
                    <div class="info-block bg-blue col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner">
                            <h3>Newyork</h3>
                            <ul class="info">
                                <li><span class="fa fa-map-marker-alt"></span> 91 Glenview Drive, Florence, Newyork 29501
                                    USA</li>
                                <li><span class="fa fa-phone-alt"></span> <a href="tel:812-070-3692">Phone
                                        812-070-3692</a></li>
                                <li><span class="fa fa-envelope-open"></span> <a
                                        href="mailto:donations@example.org">donations@example.org</a></li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-block bg-light-blue col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner">
                            <h3>North Carolina</h3>
                            <ul class="info">
                                <li><span class="fa fa-map-marker-alt"></span> 91 Glenview Drive, Florence, Newyork 29501
                                    USA</li>
                                <li><span class="fa fa-phone-alt"></span> <a href="tel:812-070-3692">Phone
                                        812-070-3692</a></li>
                                <li><span class="fa fa-envelope-open"></span> <a
                                        href="mailto:donations@example.org">donations@example.org</a></li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-block bg-red col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner">
                            <h3>Kenya &amp; Uganda</h3>
                            <ul class="info">
                                <li><span class="fa fa-map-marker-alt"></span> 91 Glenview Drive, Florence, Newyork 29501
                                    USA</li>
                                <li><span class="fa fa-phone-alt"></span> <a href="tel:812-070-3692">Phone
                                        812-070-3692</a></li>
                                <li><span class="fa fa-envelope-open"></span> <a
                                        href="mailto:donations@example.org">donations@example.org</a></li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-vimeo-v"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
