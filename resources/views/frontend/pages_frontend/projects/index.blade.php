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



    <section class="causes-section causes-page load-more-section" data-load-number="3">
        <div class="auto-container">

            <div class="row clearfix">

                <!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms"
                        style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="image-box">
                            <figure class="image"><a href="cause-single.html"><img
                                        src="assets/frontend_assets/images/resource/cause-image-1.jpg" alt=""></a>
                            </figure>
                          
                        </div>
                        <div class="lower-content">
                            <h3><a href="cause-single.html">Medical Treatment</a></h3>
                            <div class="cause-title">Medicine</div>
                            <div class="text">Auis nostrud exercitation ullam laboris aliquip exsed consequat duis aut
                                psum dolore magna aliqua minim.</div>
                            {{-- <div class="donate-info clearfix">
                                <div class="goal"><i class="fa fa-crosshairs"></i> <span>Goal:</span>
                                    <strong>$10,000</strong>
                                </div>
                                <div class="raised"><i class="fa fa-chart-line"></i> <span>Raised:</span>
                                    <strong>$6,500</strong>
                                </div>
                            </div> --}}
                        </div>
                        <div class="link-box"><a href="donate.html" class="theme-btn btn-style-two"><span
                                    class="btn-title">View Details</span></a></div>
                    </div>
                </div>

                <!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms"
                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="image-box">
                            <figure class="image"><a href="cause-single.html"><img
                                        src="assets/frontend_assets/images/resource/cause-image-2.jpg" alt=""></a>
                            </figure>
                            
                        </div>
                        <div class="lower-content">
                            <h3><a href="cause-single.html">Feed Hungry Children</a></h3>
                            <div class="cause-title">Food &amp; Water</div>
                            <div class="text">Auis nostrud exercitation ullam laboris aliquip exsed consequat duis aut
                                psum dolore magna aliqua minim.</div>
                            {{-- <div class="donate-info clearfix">
                                <div class="goal"><i class="fa fa-crosshairs"></i> <span>Goal:</span>
                                    <strong>$10,000</strong>
                                </div>
                                <div class="raised"><i class="fa fa-chart-line"></i> <span>Raised:</span>
                                    <strong>$6,500</strong>
                                </div>
                            </div> --}}
                        </div>
                        <div class="link-box"><a href="donate.html" class="theme-btn btn-style-two"><span
                                    class="btn-title">View Details</span></a></div>
                    </div>
                </div>

                <!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="600ms"
                        style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="image-box">
                            <figure class="image"><a href="cause-single.html"><img
                                        src="assets/frontend_assets/images/resource/cause-image-3.jpg" alt=""></a>
                            </figure>

                        </div>
                        <div class="lower-content">
                            <h3><a href="cause-single.html">Education For People</a></h3>
                            <div class="cause-title">Education</div>
                            <div class="text">Auis nostrud exercitation ullam laboris aliquip exsed consequat duis aut
                                psum dolore magna aliqua minim.</div>
                            {{-- <div class="donate-info clearfix">
                                <div class="goal"><i class="fa fa-crosshairs"></i> <span>Goal:</span>
                                    <strong>$10,000</strong>
                                </div>
                                <div class="raised"><i class="fa fa-chart-line"></i> <span>Raised:</span>
                                    <strong>$6,500</strong>
                                </div>
                            </div> --}}
                        </div>
                        <div class="link-box"><a href="donate.html" class="theme-btn btn-style-two"><span
                                    class="btn-title">View Details</span></a></div>
                    </div>
                </div>


            </div>

            <div class="load-more"><a href="#" class="theme-btn load-more-btn">load more</a></div>

        </div>
    </section>
@endsection
