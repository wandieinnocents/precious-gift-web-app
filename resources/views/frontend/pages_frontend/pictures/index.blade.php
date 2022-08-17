@extends('frontend.layouts_frontend.master')
@section('title')
    Photo Gallery
@endsection
@section('extra_styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .nav-tabs>li {
            float: none;
            display: inline-block;
            zoom: 1;
        }

        .nav-tabs {
            text-align: center;
        }
    </style>
@endsection
@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer"
            style="background-image: url({{ asset('assets/frontend_assets/images/background/bg-title3.png') }});">
        </div>
        <div class="auto-container" style="margin-top:70px;">
            <h1>Gallery</h1>
        </div>
        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Photos</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Banner Section -->
    <section class="activity-section">
        <div class="auto-container" style="margin-top:-60px;">
            <div class="sec-title centered">
                <h2>Animal Saving Activities</h2>
                <div class="text">We believe what we achieve</div>
            </div>
            {{-- TABS --}}
            <ul class="nav nav-pills justify-content-center" style="align:center;">
                <li class="active"><a data-toggle="pill" href="#all">ALL </a></li>
                <li><a data-toggle="pill" href="#school">School </a></li>
                <li><a data-toggle="pill" href="#workshop">Workshop</a></li>
                <li><a data-toggle="pill" href="#education">Education</a></li>
            </ul>
            <div style="height:30px;"></div>
            <div class="tab-content">
                {{-- ALL --}}
                <div id="all" class="tab-pane fade in active">
                    <div class="mixit-gallery">
                        <!--Filter-->
                        <div class="filter-list row clearfix" id="MixItUpD7DD85">
                            @foreach ($photos as $photo)
                                <!--Activity Block-->
                                <div class="activity-block mix all animal education col-md-6 col-sm-12"
                                    style="display: inline-block;" >
                                    <div class="inner-box" >
                                        <figure class="image">
                                            <img src="{{ $photo->gallery_photo }}" alt="" style="max-width: 500px; height: 300px;">
                                            <a href="{{ $photo->gallery_photo }}" class="lightbox-image overlay"
                                                data-fancybox="gallery-two"><span class="icon fa fa-search-plus"></span></a>
                                        </figure>
                                        <div class="caption-box">
                                            <div class="cap-inner">
                                                <h3><a href="#">{{ $photo->gallery_name }}</a></h3>
                                                <div class="cat-info"><a
                                                        href="#">{{ $photo->gallery_category_r->gallery_category_name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
                {{-- CATEGORY 1 --}}
                <div id="school" class="tab-pane fade in ">
                    <div class="mixit-gallery">
                        <!--Filter-->
                        <div class="filter-list row clearfix" id="MixItUpD7DD85">
                            @foreach ($photos_categories_school as $photo)
                                <!--Activity Block-->
                                <div class="activity-block mix all animal education col-md-6 col-sm-12"
                                    style="display: inline-block;">
                                    <div class="inner-box">
                                        <figure class="image">
                                            <img src="{{ $photo->gallery_photo }}" alt="" style="max-width: 500px; height: 300px;">
                                            <a href="{{ $photo->gallery_photo }}" class="lightbox-image overlay"
                                                data-fancybox="gallery-two"><span class="icon fa fa-search-plus"></span></a>
                                        </figure>
                                        <div class="caption-box">
                                            <div class="cap-inner">
                                                <h3><a href="#">{{ $photo->gallery_name }}</a></h3>
                                                <div class="cat-info"><a
                                                        href="#">{{ $photo->gallery_category_r->gallery_category_name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                {{-- CATEGORY 2 --}}
                <div id="workshop" class="tab-pane fade">
                    <div class="mixit-gallery">
                        <!--Filter-->
                        <div class="filter-list row clearfix" id="MixItUpD7DD85">
                            @foreach ($photos_categories_workshop as $photo)
                                <!--Activity Block-->
                                <div class="activity-block mix all animal education col-md-6 col-sm-12"
                                    style="display: inline-block;">
                                    <div class="inner-box">
                                        <figure class="image">
                                            <img src="{{ $photo->gallery_photo }}" alt="" style="max-width: 500px; height: 300px;">
                                            <a href="{{ $photo->gallery_photo }}" class="lightbox-image overlay"
                                                data-fancybox="gallery-two"><span class="icon fa fa-search-plus"></span></a>
                                        </figure>
                                        <div class="caption-box">
                                            <div class="cap-inner">
                                                <h3><a href="#">{{ $photo->gallery_name }}</a></h3>
                                                <div class="cat-info"><a
                                                        href="#">{{ $photo->gallery_category_r->gallery_category_name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                {{-- CATEGORY 3 --}}
                <div id="education" class="tab-pane fade">
                    <div class="mixit-gallery">
                        <!--Filter-->
                        <div class="filter-list row clearfix" id="MixItUpD7DD85">
                            <!--Activity Block-->
                            @foreach ($photos_categories_education as $photo)
                                <div class="activity-block mix all animal education col-md-6 col-sm-12"
                                    style="display: inline-block;">
                                    <div class="inner-box">
                                        <figure class="image" >
                                            <img src="{{ $photo->gallery_photo }}" alt="">
                                            <a href="{{ $photo->gallery_photo }}" class="lightbox-image overlay"
                                                data-fancybox="gallery-two"><span
                                                    class="icon fa fa-search-plus"></span></a>
                                        </figure>
                                        <div class="caption-box">
                                            <div class="cap-inner">
                                                <h3><a href="#">{{ $photo->gallery_name }}</a></h3>
                                                <div class="cat-info"><a
                                                        href="#">{{ $photo->gallery_category_r->gallery_category_name }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            {{-- END OF TABS --}}
        </div>
    </section>
@endsection
@section('extra_scripts')
@endsection
