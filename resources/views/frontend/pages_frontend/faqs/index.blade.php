@extends('frontend.layouts_frontend.master')

@section('title')
    Faq
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-title1.png') }});">
        </div>

        <div class="auto-container" style="margin-top:70px;">
        <h1>Faqs</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Faqs</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->






    <!--Default Section-->
    <section class="default-section">
     <div class="sec-title centered">
            <h2>Our Faq's</h2>
            <div class="text">Frequently Asked Questions</div>
        </div>
        <div class="auto-container">

            <div class="row clearfix">
               
                <!--Faq Column-->
                <div class="faq-column col-lg-12 col-md-12 col-sm-12">
                    <div class="accordion-box">
                        <!--Block-->
                        @foreach($faqs as $faq)
                        <div class="accordion block  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="acc-btn active"><span class="icon-box flaticon-world-1"></span> {{$faq->question}} <div class="icon flaticon-cross"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">{{$faq->answer}}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                       

                        <!--Block-->
                        {{-- <div class="accordion block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="acc-btn"><span class="icon-box flaticon-donation-2"></span> Raise funds in response
                                to a disaster <div class="icon flaticon-cross"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">Alit usmod tempor incididunt laboret doloe magn aliquaut enis veniam
                                        quis trud exercitation ullamco laboris nisiut aliquip. Exea consequat duis rue dolor
                                        prehendrit lorem sed ipsum torabs.</div>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
