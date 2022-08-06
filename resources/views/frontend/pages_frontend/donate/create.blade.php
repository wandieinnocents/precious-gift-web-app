@extends('frontend.layouts_frontend.master')

@section('title')
Gallery
@endsection

@section('content')
<!-- content  -->
  <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-page-title-2.jpg') }});"></div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Donate</h1>
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

  

  
  
    <!--Default Section-->
    <section class="default-section">
        <div class="auto-container">

            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <h2>Donation</h2>
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
                                    <div class="text">iam quis trud exercitation ullamco laboris nisiut aliquip. Exea consequat duis rue dolor prehendrit lorem sed ipsum torabs.</div>
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

   

    

@endsection