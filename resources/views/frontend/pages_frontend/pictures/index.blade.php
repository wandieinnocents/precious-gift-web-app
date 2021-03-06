@extends('frontend.layouts_frontend.master')

@section('title')
    Gallery
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
    <section class="activity-section">

        <div class="auto-container" style="margin-top:-60px;">
            <div class="sec-title centered">
                <h2>Animal Saving Activities</h2>
                <div class="text">We believe what we achieve</div>
            </div>

            {{-- TABS --}}

            <ul class="nav nav-pills justify-content-center" style="align:center;">
                <li class="active"><a data-toggle="pill" href="#category1">CATEGORY 1 </a></li>
                <li><a data-toggle="pill" href="#category2">CATEGORY 2</a></li>
                <li><a data-toggle="pill" href="#category3">CATEGORY 3</a></li>
            </ul>
            <div style="height:30px;"></div>


            <div class="tab-content">
                {{-- CATEGORY 1 --}}
                <div id="category1" class="tab-pane fade in active">
                    <div class="mixit-gallery">
                        <!--Filter-->

                        <div class="filter-list row clearfix" id="MixItUpD7DD85">
                            <!--Activity Block-->
                            <div class="activity-block mix all animal education col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/14.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/14.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Look After Animals</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Activity Block-->
                            <div class="activity-block mix all medical education shelter col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/15.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/15.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Win for Dolfins</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Activity Block-->
                            <div class="activity-block mix all animal shelter medical col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/16.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/16.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Work for Beers</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Activity Block-->
                            <div class="activity-block mix all shelter medical education col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/17.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/17.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Tigers are missing</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- CATEGORY 2 --}}
                <div id="category2" class="tab-pane fade">
                    <div class="mixit-gallery">
                        <!--Filter-->

                        <div class="filter-list row clearfix" id="MixItUpD7DD85">
                            <!--Activity Block-->
                            <div class="activity-block mix all animal education col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/14.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/14.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Look After Animals</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Activity Block-->
                            <div class="activity-block mix all medical education shelter col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/15.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/15.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Win for Dolfins</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Activity Block-->
                            <div class="activity-block mix all animal shelter medical col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/16.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/16.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Work for Beers</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Activity Block-->
                            <div class="activity-block mix all shelter medical education col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/17.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/17.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Tigers are missing</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- CATEGORY 3 --}}
                <div id="category3" class="tab-pane fade">
                    <div class="mixit-gallery">
                        <!--Filter-->

                        <div class="filter-list row clearfix" id="MixItUpD7DD85">
                            <!--Activity Block-->
                            <div class="activity-block mix all animal education col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/14.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/14.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Look After Animals</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Activity Block-->
                            <div class="activity-block mix all medical education shelter col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/15.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/15.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Win for Dolfins</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Activity Block-->
                            <div class="activity-block mix all animal shelter medical col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/16.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/16.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Work for Beers</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Activity Block-->
                            <div class="activity-block mix all shelter medical education col-md-6 col-sm-12"
                                style="display: inline-block;">
                                <div class="inner-box">
                                    <figure class="image">
                                        <img src="assets/frontend_assets/images/gallery/17.jpg" alt="">
                                        <a href="assets/frontend_assets/images/gallery/17.jpg"
                                            class="lightbox-image overlay" data-fancybox="gallery-two"><span
                                                class="icon fa fa-search-plus"></span></a>
                                    </figure>
                                    <div class="caption-box">
                                        <div class="cap-inner">
                                            <h3><a href="#">Tigers are missing</a></h3>
                                            <div class="cat-info"><a href="#">Save Animals</a>,<a
                                                    href="#">Charity</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
