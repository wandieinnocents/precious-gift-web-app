<!-- Main Header -->
<header class="main-header header-style-two">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left clearfix">
                    <ul class="info clearfix">
                        <li>We are here to support you</li>
                    </ul>
                </div>

                <div class="top-right clearfix">
                    <ul class="info clearfix">
                        {{-- <li>
                                    <div class="change-language">
                                        <div class="language dropdown"><a class="dropdown-toggle clearfix"
                                                id="lang-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" href="#"><span
                                                    class="icon fa fa-globe"></span>Eng <span
                                                    class="arrow flaticon-cheveron-down"></span></a>
                                            <ul class="dropdown-menu style-one" aria-labelledby="lang-dropdown">
                                                <li><a href="#">Arabic</a></li>
                                                <li><a href="#">Chinese</a></li>
                                                <li><a href="#">Spanish</a></li>
                                                <li><a href="#">English</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li> --}}
                    </ul>
                    <ul class="social-links clearfix">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="/" title="Precious Gift"><img
                                src="{{ asset('assets/frontend_assets/images/logo-2.png') }}" alt="Precious Gift"
                                title="Precious Gift"></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="/">Home</a></li>
                                <li class="dropdown"><a href="javascript::void(0)">Know Us</a>
                                    <ul>
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/our_team">Our Staff</a></li>
                                        <li><a href="/our_faqs">Faq's</a></li>

                                    </ul>
                                </li>
                                <li><a href="/our_projects">Projects</a></li>
                                <li><a href="/articles">News</a></li>
                                <li><a href="/pictures">Gallery</a></li>


                                <li><a href="/contact/create">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="donate-link">
                        <a href="{{ route('donate.create') }}" class="theme-btn btn-style-one"><span class="btn-title">Donate
                                Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img
                        src="{{ asset('assets/frontend_assets/images/sticky-logo.png') }}" alt=""
                        title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img
                        src="{{ asset('assets/frontend_assets/images/nav-logo.png') }}" alt=""
                        title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<!-- End Main Header -->
