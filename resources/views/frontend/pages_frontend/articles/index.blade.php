@extends('frontend.layouts_frontend.master')

@section('title')
    Blogs
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url(assets/frontend_assets/images/background/bg-title1.png);">
        </div>

        <div class="auto-container" style="margin-top:70px;">
            <h1>Blogs</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li class="active">Blogs</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->
    <div class="sidebar-page-container sidebar-left">
        <div class="sec-title centered">
            <h2>All Blog Posts</h2>
            <div class="text">Stay up to date today</div>
        </div>

        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Detail-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-posts">

                        <!--News Block Two-->
                        <div class="row">
                            {{-- FETCH NEWS --}}
                            @foreach ($posts as $post)
                                <div class="col-md-4">
                                    <div class="news-block-two">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <a href="javascript::void(0)"><img src="{{ $post->post_photo }}"
                                                            alt="" style="max-width: 500px; height: 300px;"></a>
                                                </figure>

                                            </div>
                                            <div class="bottom-box clearfix" style="margin-top:30px;">
                                                <div class="post-meta">
                                                    <ul class="clearfix">
                                                        <li><a href="#"><span
                                                                    class="far fa-user"></span>{{ $post->post_created_by }}</a>

                                                        </li>
                                                        <li>

                                                            <span
                                                                class="badge badge-success">{{ $post->post_category_r->post_category_name }}</span>
                                                        </li>
                                                        <li>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="lower-box">
                                                <h2><a href="articles/{{ $post->id }}">{{ $post->post_title }}</a></h2>
                                                <div class="text">{{ $post->post_description }}</div>



                                                {{-- button --}}
                                                <div class="link-box" style="margin-top:30px;">
                                                    <a href="articles/{{ $post->id }}"
                                                        class="theme-btn btn-style-two"><span class="btn-title">Read
                                                            more</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- END FETCH NEWS --}}


                        </div>

                    </div>

                    {{-- <div class="pagination-box">
                        <ul class="styled-pagination">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><span class="fa fa-arrow-right"></span></a></li>
                        </ul>
                    </div> --}}

                </div>
                <!--End Content Side-->



            </div>
        </div>
    </div>
@endsection
