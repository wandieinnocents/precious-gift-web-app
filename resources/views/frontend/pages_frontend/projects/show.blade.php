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

        <div class="auto-container" style="margin-top:70px;">
            <h1>Projects</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Pages</a></li>
                    <li class="active">Projects</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side / Blog Detail-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="post-details">
                        <!--Cause Details-->
                        <div class="cause-details">
                            <div class="upper-box">
                                <figure class="image"><a href="cause-single.html"><img src="images/resource/cause-image-7.jpg" alt=""></a></figure>
                                <div class="progress-box">
                                    <div class="bar">
                                        <div class="bar-inner count-bar counted" data-percent="80%" style="width: 80%;"><div class="count-text">80%</div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-box">
                                <h2>Educate Poor Children</h2>
                                <div class="info-box clearfix">
                                    <div class="cause-info">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fa fa-crosshairs"></span> Goal: <span>$10,000</span></a></li>
                                            <li><a href="#"><span class="fa fa-chart-line"></span> Raised: <span>$6,500</span></a></li>
                                            <li><a href="#"><span class="far fa-user"></span> Supporters: <span>10,590</span></a></li>
                                            <li><a href="#"><span class="far fa-heart"></span> donators: <span>258,600</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="link-box">
                                        <a href="donate.html" class="theme-btn btn-style-two"><span class="btn-title">Donate Now</span></a>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h3>About This Cause</h3>
                                    <p>Consectetur adipisicing elit usmod tempor incididut laboret ipsum dolore magna aliquaut enim mini veniam quis trud exercitation ullamco sed labo nisiut aliquip ex ea consequat duis aute rue dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                    </p>
                                    <p>Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cilum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>
                                    <p>sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesci- unt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                                    <div class="row clearfix">
                                        <div class="image-column col-md-6 col-sm-12">
                                            <figure><img src="images/resource/blog-image-10.jpg" alt=""></figure>
                                        </div>
                                        <div class="image-column col-md-6 col-sm-12">
                                            <figure><img src="images/resource/blog-image-11.jpg" alt=""></figure>
                                        </div>
                                    </div>
                                    <p class="big-text">People like you are helping &amp; making good things happen.</p>
                                    <p>Quis trud exercitation ullamco sed labo nisiut aliquip ex ea consequat duis aute rue dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Nisi ut aliquip ex ea commodo consequat.  Duis aute irure dolor in reprehenderit in voluptate velit esse cilum.</p>
                                    <div class="featured-video-box">
                                        <div class="inner">
                                            <div class="image">
                                                <img src="images/resource/video-image-1.jpg" alt="">
                                                <a href="https://www.youtube.com/watch?v=C9rVAbcQH_U" class="lightbox-image">
                                                    <span class="fa fa-play"></span>
                                                </a>
                                            </div>
                                            <h4><a href="https://www.youtube.com/watch?v=C9rVAbcQH_U" class="lightbox-image">Watch The Cause Video</a></h4>
                                            <div class="link-box"><a href="#" class="default-link">Download brochure</a></div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="image-column col-md-6 col-sm-12">
                                            <figure><img src="images/resource/blog-image-12.jpg" alt=""></figure>
                                        </div>
                                        <div class="column col-md-6 col-sm-12">
                                            <div class="inner">
                                                <!--Accordion-->
                                                <div class="accordion-box">
                                                    <!--Block-->
                                                    <div class="accordion block current wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                                        <div class="acc-btn active">A book to help people <div class="icon flaticon-cross"></div></div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Alit usmod tempor incididunt laboret doloe  quis trud exercitation ullamco laboris nisiut rue dolor prehendrit lorem.</div>
                                                            </div>
                                                        </div>
                                                    </div> 

                                                    <!--Block-->
                                                    <div class="accordion block wow fadeInUp animated" data-wow-delay="100ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInUp;">
                                                        <div class="acc-btn">Our mission to achieve <div class="icon flaticon-cross"></div></div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Alit usmod tempor incididunt laboret doloe  quis trud exercitation ullamco laboris nisiut rue dolor prehendrit lorem.</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--Block-->
                                                    <div class="accordion block wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                                        <div class="acc-btn">Show support for needy<div class="icon flaticon-cross"></div></div>
                                                        <div class="acc-content">
                                                            <div class="content">
                                                                <div class="text">Alit usmod tempor incididunt laboret doloe  quis trud exercitation ullamco laboris nisiut rue dolor prehendrit lorem.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--End Accordion-->
                                            </div>
                                        </div>
                                    </div>
                                    <p>Sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesci- unt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                                </div>
                            </div>
                            <div class="share-post clearfix">
                                <div class="share-title">Share This</div>
                                <ul class="social-links clearfix">
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Comments Area-->
                        <div class="comments-area">
                            <div class="group-title"><h2>Comments</h2></div>
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb">
                                        <figure class="thumb"><img src="images/resource/author-thumb-8.jpg" alt=""></figure>
                                    </div> 
                                    <h4 class="name">Scott William</h4>
                                    <div class="text">Auis nostrud exercitation ullam laboris nisitm sed aliquip consequat duis autesre dolor aliqua nim ad minim quis nostrud exercitation modo consequat.</div>
                                    <div class="info">August 31, 2019   <a href="#" class="reply-btn">Reply</a></div>
                                </div>
                            </div>

                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb">
                                        <figure class="thumb"><img src="images/resource/author-thumb-9.jpg" alt=""></figure>
                                    </div> 
                                    <h4 class="name">Liam Irvines</h4>
                                    <div class="text">Auis nostrud exercitation ullam laboris nisitm sed aliquip consequat duis autesre dolor aliqua nim ad minim quis nostrud exercitation modo consequat.</div>
                                    <div class="info">August 30, 2019   <a href="#" class="reply-btn">Reply</a></div>
                                </div>
                            </div>
                        </div>

                        <!--Leave Comment Form-->
                        <div class="leave-comments">
                            <div class="group-title"><h2>Leave a Comment</h2></div>
                            <div class="default-form comment-form">
                                <form method="post" action="http://t.commonsupport.xyz/kausid/contact.html">
                                    <div class="row clearfix">                                    
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="field-label">Your Name</div>
                                            <input type="text" name="username" placeholder="" required="">
                                        </div>
                                        
                                        <div class="col-md-6 col-sm-12 form-group">
                                            <div class="field-label">Email</div>
                                            <input type="email" name="email" placeholder="" required="">
                                        </div>

                                        <div class="col-md-12 col-sm-12 form-group">
                                            <div class="field-label">Your Comments</div>
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                
                                        <div class="col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Post Comment</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                <!--End Content Side-->

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <div class="widget-inner">
                                <h3>Find a Cause</h3>
                                <div class="widget-content">
                                    <form method="post" action="http://t.commonsupport.xyz/kausid/contact.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="Search" required="">
                                            <button type="submit"><span class="icon fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--Organizer Widget-->
                        <div class="sidebar-widget organizer-widget">
                            <div class="widget-inner">
                                <h3>About Cause</h3>
                                <div class="widget-content">
                                    <div class="upper-box">
                                        <figure class="image"><a href="#"><img src="images/resource/author-thumb-4.jpg" alt=""></a></figure>
                                        <h5>Organizer:</h5>
                                        <div class="organized-by"><a href="#">Timy benson</a></div>
                                        <div class="date">August 31, 2019</div>
                                        <div class="location">Sydney, Australia</div>
                                    </div>
                                    <div class="text">Auis nostrud exercitation ullam laboris aliquip exsed consequat duis aut psum dolore magna aliqua minim</div>
                                </div>
                            </div>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-inner">
                                <h3>Categories</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a class="clearfix" href="blog-single.html">Health &amp; Medical <span class="count">93</span></a></li>
                                        <li class="active"><a class="clearfix" href="blog-single.html">Social Welfare <span class="count">04</span></a></li>
                                        <li><a class="clearfix" href="blog-single.html">Disability <span class="count">54</span></a></li>
                                        <li><a class="clearfix" href="blog-single.html">Poor Education <span class="count">71</span></a></li>
                                        <li><a class="clearfix" href="blog-single.html">International Aid <span class="count">22</span></a></li>
                                        <li><a class="clearfix" href="blog-single.html">Animals &amp; Pets <span class="count">31</span></a></li>
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
                                            <figure class="post-thumb"><a href="cause-single.html"><img src="images/resource/author-thumb-5.jpg" alt=""></a></figure>
                                            <div class="amount">$60</div>
                                            <h5 class="donor-name"><a href="cause-single.html">Scott William</a></h5>
                                            <div class="post-info">2 Hours Ago</div>
                                            <div class="text">Amazing Charity &amp; Cause!</div>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="cause-single.html"><img src="images/resource/author-thumb-6.jpg" alt=""></a></figure>
                                            <div class="amount">$75</div>
                                            <h5 class="donor-name"><a href="cause-single.html">Scott William</a></h5>
                                            <div class="post-info">2 Hours Ago</div>
                                            <div class="text">Amazing Charity &amp; Cause!</div>
                                        </div>
                                    </div>
                                    <div class="post">
                                        <div class="post-inner">
                                            <figure class="post-thumb"><a href="cause-single.html"><img src="images/resource/author-thumb-7.jpg" alt=""></a></figure>
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
                                    <figure class="image"><img src="images/resource/event-image-7.jpg" alt="" title=""></figure>
                                    <div class="date"><span>20</span> August 2019</div>
                                    <h4><a href="event-single.html">Water Supply Charity Fundrise Event</a></h4>
                                    <ul class="info">
                                        <li><span class="far fa-clock"></span> Starts 5.00 PM</li>
                                        <li><span class="fa fa-map-marker-alt"></span> 121 Kings St. NY 26038</li>
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
