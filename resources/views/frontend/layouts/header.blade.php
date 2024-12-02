<header class="site-header header-style-6 mobile-sider-drawer-menu">

    <div class="top-bar site-bg-primary">
        <div class="container">
            <div class="row">
                <div class="clearfix">
                    <div class="wt-topbar-left">
                        <ul class="list-unstyled e-p-bx pull-left">
                            <li><i class="fa fa-envelope"></i>mail@o3em.com</li>
                            <li><i class="fa fa-phone"></i>(+251) 000-000-000</li>
                        </ul>
                    </div>

                    <div class="wt-topbar-right">
                        <div class=" language-select pull-right">
                              <div class="dropdown">
                                    <button class="btn dropdown-bs-toggle" type="button" data-bs-toggle="dropdown">Language
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                      <li><a href="#">English</a></li>
                                      <li><a href="#">Amharic</a></li>
                                    </ul>
                              </div>
                        </div>

                        <ul class="list-unstyled e-p-bx pull-right">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#Login-form"><i class="fa fa-user"></i>Login</a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#Register-form"><i class="fa fa-sign-in"></i>Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Link -->

    <!-- Search Form -->
    <div class="main-bar header-middle bg-white">
        <div class="container">
            <div class="logo-header">
                <a href="index.html">
                    <img src="{{ asset('frontend/images/logos.png') }}" width="216" height="37" alt="" />
                </a>
            </div>
            <div class="header-info">
                <ul>
                    <li>
                        <div>
                            <div class="icon-sm">
                                <span class="icon-cell  site-text-primary"><i class="iconmoon-travel"></i></span>
                            </div>
                            <div class="icon-content">
                                <strong>Our Location </strong>
                                <span>Addis Ababa, Ethiopia</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div>
                            <div class="icon-sm">
                                <span class="icon-cell  site-text-primary"><i class="iconmoon-smartphone-1"></i></span>
                            </div>
                            <div class="icon-content">
                                <strong>Phone Number</strong>
                                <span>(+251)-0000-000-000</span>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <!-- Search Form -->
    <div class="sticky-header main-bar-wraper">
        <div class="main-bar header-botton nav-bg-secondry">
            <div class="container">
                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>
                <!-- ETRA Nav -->

                <!-- MAIN Vav -->
                <div class="header-nav navbar-collapse collapse ">
                    <ul class=" nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li class="active"><a href="services">Services</a></li>
                        <li class="active"><a href="about-us">About us</a></li>
                        <li class="active"><a href="blog">Blog</a></li>
                        <li class="active"><a href="faq">FAQ</a></li>
                        <li class="active"><a href="contact-us">Contact us</a></li>
                    </ul>
                </div>

                <div class="extra-nav">
                    <div class="extra-cell">
                        <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                    </div>
                 </div>
                <!-- SITE Search -->
                <div id="search">
                    <span class="close"></span>
                    <form role="search" id="searchform" action="https://thewebmax.org/search" method="get" class="radius-xl">
                        <div class="input-group">
                            <input value="" name="q" type="search" placeholder="Type to search"/>
                            <span class="input-group-btn"><button type="button" class="search-btn"><i class="fa fa-search"></i></button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header>
