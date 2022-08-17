@extends('frontend.layouts_frontend.master')

@section('title')
    Donate
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-title1.png') }});"></div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Donate</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Donate</li>
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
                        {{-- German account --}}
                        <h2>Donation</h2>
                        <div class="text">We use the donations to support the community and make this world a better place
                            , we work as a team to deliver the best to the world.</div>
                        <p class="text" style="margin-top:-30px;"><strong>BENEFICIARY NAME </strong>: Precious Gift e. V.
                        </p>
                        <p class="text" style="margin-top:-40px;"><strong>BANK NAME</strong> : Deutsche Postbank AG​</p>
                        <p class="text" style="margin-top:-40px;"><strong>IBAN</strong>: DE90100100100941776103​</p>
                        <p class="text" style="margin-top:-40px;"><strong>BIC</strong>: PBNKDEFF​

                        </p>
                    </div>

                    {{-- Uganda account --}}
                    <div class="inner">
                        {{-- German account --}}
                        <h2># Uganda  Account</h2><br>
                       
                        <p class="text" style="margin-top:-30px;"><strong>BENEFICIARY NAME :</strong>
                        Precious child development Center
                        </p>
                        <p class="text" style="margin-top:-40px;"><strong>BANK NAME</strong> : Equity Bank​</p>
                        <p class="text" style="margin-top:-40px;"><strong>IBAN</strong>: 101612244659</p>

                        </p>
                    </div>
                </div>
                <!--Faq Column-->
                <div class="faq-column col-lg-6 col-md-12 col-sm-12">
                    <div class="accordion-box">
                        <!--Block-->
                        <div class="accordion block current wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="acc-btn active"><span class="icon-box flaticon-world-1"></span> How to donate<div
                                    class="icon flaticon-cross"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">To make a donation , use the account numbers on our platform , the
                                        beneficiary name is Precious Gift e. V then make a donation which will go to
                                        precious child account.</div>
                                </div>
                            </div>
                        </div>



                        <!--Block-->
                        <div class="accordion block wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="acc-btn"><span class="icon-box flaticon-donation-2"></span> Payment Platforms <div
                                    class="icon flaticon-cross"></div>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">We use bank to make direct deposits for the donations.</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
