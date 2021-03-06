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
            <h1 style="margin-top:90px; ">Staff</h1>
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

        <div class="sec-title centered">
            {{-- <div class="upper-icon"></div> --}}
            <h2> International Staff</h2>
            <div class="text">Our International staff members</div>
        </div>

        <div class="auto-container">
            <div class="row clearfix">


                <!--Team Block-->
                @foreach($staff_members_international as $staff_member_int)
                
                    <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-delay="0ms"
                    style="visibility: visible; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ $staff_member_int->team_photo }}" alt=""></a>
                        </figure>
                        <h3><a href="#">{{ $staff_member_int->team_name }}</a></h3>
                        <div class="designation">{{ $staff_member_int->team_category }} | {{ $staff_member_int->team_role }}</div>
                    </div>
                </div>

                @endforeach
               
               


            </div>
        </div>


    {{-- INTERNATIONAL STAFF --}}
     <div class="sec-title centered">
            {{-- <div class="upper-icon"></div> --}}
            <h2>Local</h2>
            <div class="text">Our Local members</div>
        </div>

        <div class="auto-container">
            <div class="row clearfix">


                <!--Team Block-->
                @foreach($staff_members_local as $staff_member_local)
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft animated" data-wow-delay="0ms"
                    style="visibility: visible; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="inner-box">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ $staff_member_local->team_photo }}" alt=""></a>
                        </figure>
                        <h3><a href="#">{{ $staff_member_local->team_name }}</a></h3>
                        <div class="designation">{{ $staff_member_local->team_category }} |  {{ $staff_member_local->team_role }}</div>
                    </div>
                </div>
                @endforeach
               
               


            </div>
        </div>

    
    </section>
@endsection
