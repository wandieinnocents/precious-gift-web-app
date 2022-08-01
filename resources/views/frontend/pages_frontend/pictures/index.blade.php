@extends('frontend.layouts_frontend.master')

@section('title')
    Gallery
@endsection

@section('extra_styles')
    <style>
        .wrap {
            overflow: hidden;
            margin-left: 200px;
        }

        .box {
            float: left;
            position: relative;
            width: 40%;
            padding-bottom: 20%;
        }

        .boxInner {
            position: absolute;
            left: 10px;
            right: 10px;
            top: 10px;
            bottom: 10px;
            overflow: hidden;
        }

        .boxInner img {
            width: 100%;
        }

        .boxInner .titleBox {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin-bottom: -50px;
            background: #fff;
            background: rgba(0, 0, 0, 0.5);
            color: #FFF;
            padding: 10px;
            text-align: center;
            -webkit-transition: all 0.3s ease-out;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }

        section.no-touch .boxInner:hover .titleBox,
        section.touch .boxInner.touchFocus .titleBox {
            margin-bottom: 0;
        }

        @media only screen and (max-width : 480px) {

            /* Smartphone view: 1 tile */
            .box {
                width: 100%;
                padding-bottom: 100%;
            }
        }

        @media only screen and (max-width : 650px) and (min-width : 481px) {

            /* Tablet view: 2 tiles */
            .box {
                width: 50%;
                padding-bottom: 50%;
            }
        }

        @media only screen and (max-width : 1050px) and (min-width : 651px) {

            /* Small desktop / ipad view: 3 tiles */
            .box {
                width: 33.3%;
                padding-bottom: 33.3%;
            }
        }

        @media only screen and (max-width : 1290px) and (min-width : 1051px) {

            /* Medium desktop: 4 tiles */
            .box {
                width: 25%;
                padding-bottom: 25%;
            }
        }
    </style>
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-page-title-2.jpg') }});">
        </div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Gallery</h1>
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
        <div class="sec-title centered">
            <h2>Our Photo Gallery</h2>
            <div class="text">Stay up to date today</div>
        </div>
        <div class="auto-container">

            <div class="row clearfix">

                <!-- Block-->
                @foreach ($photos as $photo)
                    <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms"
                            style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="image-box">
                                <figure class="image"><a><img src="{{ $photo->gallery_photo }}" alt=""
                                            style="width: 100%; height:60%;"></a></a>
                                </figure>

                            </div>

                            <div class="link-box"><a href="javascript::void(0)" class="theme-btn btn-style-two"><span
                                        class="btn-title">View Details</span></a></div>
                        </div>
                    </div>


                   
                @endforeach


            </div>

            {{-- <div class="load-more"><a href="#" class="theme-btn load-more-btn">load more</a></div> --}}

        </div>
    </section>
@endsection
