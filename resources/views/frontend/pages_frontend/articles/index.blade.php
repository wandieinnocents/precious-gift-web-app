@extends('frontend.layouts_frontend.master')

@section('title')
    Blogs
@endsection

@section('content')
    <!-- content  -->
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url(assets/frontend_assets/images/background/bg-page-title-2.jpg);">
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
    <div class="sidebar-page-container sidebar-left">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-posts">
                        <!--News Block Two-->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-single.html"><img
                                                src="assets/frontend_assets/images/resource/cause-image-3.jpg   "
                                                alt=""></a>
                                    </figure>
                                    <div class="date-box"><span>20</span> Aug</div>
                                </div>
                                <div class="lower-box">
                                    <h2><a href="blog-single.html">Millions Collected By Kausid Charity For Poor Families:
                                            By Sources</a></h2>
                                    <div class="text">Consectetur adipisicing elit smod tempor incididunt laboret dolore
                                        magna aliquaut enim mini veniay quis trud exercitation ullamco laboris nisiut
                                        aliquip ex ea consequat. Duis aute dolor prehendrit lorem psum dolor sit amet
                                        consectetur adipisicing.</div>
                                    <div class="bottom-box clearfix">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><a href="#"><span class="far fa-user"></span> By Mark Shawn</a>
                                                </li>
                                                <li><a href="#"><span class="far fa-comment"></span> Comments 845</a>
                                                </li>
                                                <li><a href="#"><span class="far fa-heart"></span> Likes 1.6k</a></li>
                                            </ul>
                                        </div>
                                        <div class="link-box">
                                            <a href="blog-single.html" class="theme-btn btn-style-two"><span
                                                    class="btn-title">Read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--News Block Two-->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <a href="blog-single.html"><img
                                                src="assets/frontend_assets/images/resource/cause-image-3.jpg   "
                                                alt=""></a>
                                    </figure>
                                    <div class="date-box"><span>20</span> Aug</div>
                                </div>
                                <div class="lower-box">
                                    <h2><a href="blog-single.html">Millions Collected By Kausid Charity For Poor Families:
                                            By Sources</a></h2>
                                    <div class="text">Consectetur adipisicing elit smod tempor incididunt laboret dolore
                                        magna aliquaut enim mini veniay quis trud exercitation ullamco laboris nisiut
                                        aliquip ex ea consequat. Duis aute dolor prehendrit lorem psum dolor sit amet
                                        consectetur adipisicing.</div>
                                    <div class="bottom-box clearfix">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><a href="#"><span class="far fa-user"></span> By Mark Shawn</a>
                                                </li>
                                                <li><a href="#"><span class="far fa-comment"></span> Comments 845</a>
                                                </li>
                                                <li><a href="#"><span class="far fa-heart"></span> Likes 1.6k</a></li>
                                            </ul>
                                        </div>
                                        <div class="link-box">
                                            <a href="blog-single.html" class="theme-btn btn-style-two"><span
                                                    class="btn-title">Read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="pagination-box">
                        <ul class="styled-pagination">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><span class="fa fa-arrow-right"></span></a></li>
                        </ul>
                    </div>

                </div>
                <!--End Content Side-->

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <div class="widget-inner">
                                <h3>Search</h3>
                                <div class="widget-content">
                                    <form method="post" action="http://t.commonsupport.xyz/kausid/contact.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value=""
                                                placeholder="Search" required="">
                                            <button type="submit"><span class="icon fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- About -->
                        <div class="sidebar-widget about-widget">
                            <div class="widget-inner">
                                <h3>About Kausid</h3>
                                <div class="widget-content">
                                    <figure class="image"><img src="assets/frontend_assets/resource/blog-image-8.jpg"
                                            alt="" title=""></figure>
                                    <div class="text">Auis nostrud exercitation ullam laboris aliquip exsed consequat
                                        duis aut psum dolore magna aliqua minim</div>
                                </div>
                            </div>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-inner">
                                <h3>Categories</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a class="clearfix" href="blog-single.html">Health &amp; Medical <span
                                                    class="count">93</span></a></li>
                                        <li class="active"><a class="clearfix" href="blog-single.html">Social Welfare
                                                <span class="count">04</span></a></li>
                                        <li><a class="clearfix" href="blog-single.html">Disability <span
                                                    class="count">54</span></a></li>
                                        <li><a class="clearfix" href="blog-single.html">Poor Education <span
                                                    class="count">71</span></a></li>
                                        <li><a class="clearfix" href="blog-single.html">International Aid <span
                                                    class="count">22</span></a></li>
                                        <li><a class="clearfix" href="blog-single.html">Animals &amp; Pets <span
                                                    class="count">31</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Post Widget -->
                        <div class="sidebar-widget recent-donors">
                            <div class="widget-inner">
                                <h3>Recent Supporters</h3>
                                <div class="widget-content">
                                    <div class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="cause-single.html"><img
                                                        src="assets/frontend_assets/resource/author-thumb-5.jpg"
                                                        alt=""></a></figure>
                                            <div class="amount">$60</div>
                                            <h5 class="donor-name"><a href="cause-single.html">Scott William</a></h5>
                                            <div class="post-info">2 Hours Ago</div>
                                            <div class="text">Amazing Charity &amp; Cause!</div>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="cause-single.html"><img
                                                        src="assets/frontend_assets/resource/author-thumb-6.jpg"
                                                        alt=""></a></figure>
                                            <div class="amount">$75</div>
                                            <h5 class="donor-name"><a href="cause-single.html">Scott William</a></h5>
                                            <div class="post-info">2 Hours Ago</div>
                                            <div class="text">Amazing Charity &amp; Cause!</div>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="cause-single.html"><img
                                                        src="assets/frontend_assets/resource/author-thumb-7.jpg"
                                                        alt=""></a></figure>
                                            <div class="amount">$50</div>
                                            <h5 class="donor-name"><a href="cause-single.html">Scott William</a></h5>
                                            <div class="post-info">2 Hours Ago</div>
                                            <div class="text">Amazing Charity &amp; Cause!</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Event Widget -->
                        <div class="sidebar-widget event-widget">
                            <div class="widget-inner">
                                <h3>Upcoming Event</h3>
                                <div class="widget-content">
                                    <figure class="image"><img src="assets/frontend_assets/resource/event-image-7.jpg"
                                            alt="" title=""></figure>
                                    <div class="date"><span>20</span> August 2019</div>
                                    <h4><a href="event-single.html">Water Supply Charity Fundrise Event</a></h4>
                                    <ul class="info">
                                        <li><span class="far fa-clock"></span> Starts 5.00 PM</li>
                                        <li><span class="fa fa-map-marker-alt"></span> 121 Kings St. NY 26038</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget popular-tags">
                            <div class="widget-inner">
                                <h3>Tags</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Health</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Social</a></li>
                                        <li><a href="#">Welfare</a></li>
                                        <li><a href="#">Disability</a></li>
                                        <li><a href="#">Education</a></li>
                                        <li><a href="#">Aid</a></li>
                                        <li><a href="#">Charity</a></li>
                                        <li><a href="#">Animals</a></li>
                                        <li><a href="#">Poor</a></li>
                                        <li><a href="#">Donations</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </aside>
                </div>
                <!--End Sidebar Side-->
            </div>
        </div>
    </div>
@endsection
