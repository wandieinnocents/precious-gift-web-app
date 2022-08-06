@extends('frontend.layouts_frontend.master')

@section('title')
    Volunteer
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-title1.png') }});">
        </div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Volunteers</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Volunteers</li>
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
                {{-- <div class="upper-icon"></div> --}}
                <h2>Would like to Join Us?</h2>
                <div class="text">Submit your data to become a volunteer </div>
            </div>
            <div class="row clearfix">
                <!--Form Column--->
                <div class="form-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="shape-box">
                            <h3>Working Together To Make A Difference</h3>
                        </div>
                        <div class="default-form contact-form">
                            <form method="post" action="{{ route('join_volunteers.store') }}" enctype="multipart/form-data"
                                novalidate="novalidate">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Full Name</div>
                                        <input type="text" name="volunteer_name" placeholder="" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Email</div>
                                        <input type="email" name="volunteer_email" placeholder="" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Phone</div>
                                        <input type="text" name="volunteer_phone" placeholder="" required="">
                                    </div>

                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Address</div>
                                        <input type="text" name="volunteer_address" placeholder="" required="">
                                    </div>



                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Education Level</div>
                                        {{-- <input type="text" name="volunteer_level_of_education" placeholder="" required=""> --}}
                                        <select name="volunteer_level_of_education" class="form-select">
                                            <option value="certificate">PLE</option>
                                            <option value="certificate">Certificate</option>
                                            <option value="diploma">Diploma</option>
                                            <option value="masters">Masters</option>
                                            <option value="phd">PHD</option>
                                             <option value="phd">None</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12 form-group">
                                        <div class="field-label">Date of birth</div>
                                        <input type="date" name="volunteer_dob" placeholder="" required="">
                                    </div>
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="field-label">Upload your Photo</div>
                                        <input type="file" class="form-control" name="volunteer_photo" placeholder=""
                                            required>

                                    </div>

                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="field-label">Message</div>
                                        <textarea name="volunteer_reason_to_join" placeholder="Write your message"></textarea>
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
                                src="{{ asset('assets/frontend_assets/images/resource/contact.png') }}" alt="">
                        </figure>
                    </div>
                </div>

            </div>



        </div>
    </section>
@endsection
