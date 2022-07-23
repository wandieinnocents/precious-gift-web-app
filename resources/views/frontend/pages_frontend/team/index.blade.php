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
    <section class="team-section team-page">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Team Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-delay="0ms"
                    style="visibility: visible; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/resource/team-image-1.jpg"
                                    alt=""></a></figure>
                        <h3><a href="#">Scott William</a></h3>
                        <div class="designation">Head of Team</div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-delay="300ms"
                    style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/resource/team-image-2.jpg"
                                    alt=""></a></figure>
                        <h3><a href="#">Liam Irvines</a></h3>
                        <div class="designation">Senior Admin</div>
                    </div>
                </div>
                <!--Team Block-->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-delay="600ms"
                    style="visibility: visible; animation-delay: 600ms; animation-name: fadeInLeft;">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img src="assets/frontend_assets/images/resource/team-image-3.jpg"
                                    alt=""></a></figure>
                        <h3><a href="#">Diana Leslie</a></h3>
                        <div class="designation">Junior Volunteer</div>
                    </div>
                </div>
               

            </div>
        </div>
    </section>
@endsection
