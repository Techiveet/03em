@extends('frontend.layouts.frontend')
@section('title','About Us')
@section('content')
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{ asset('frontend/images/banner/about-banner.jpg') }});">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">About Us</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li>
                    <a href="javascript:void(0);">
                        <i class="fa fa-home"></i>
                        Home
                    </a>
                </li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB  ROW END -->

    <!-- ABOUT COMPANY SECTION START -->
    <div class="section-full home-about-section p-t80 p-b0 bg-no-repeat bg-bottom-right" style="background-image:url({{ asset('frontend/images/background/bg-coin.png') }})">
        <div class="container-fluid ">
          <div class="row d-flex justify-content-center align-items-end">
              <div class="col-lg-6 col-md-12">
                  <div class="wt-box text-right">
                      <img src="{{ asset('frontend/images/background/about-us.png') }}" alt="">
                  </div>
              </div>
              <div class="col-lg-6 col-md-9 m-b30">
                  <div class="wt-right-part">
                      <!-- TITLE START -->
                      <div class="section-head text-left">
                          <span class="wt-title-subline font-16 text-gray-dark m-b15">About O3EM<</span>
                          <h2 class="text-uppercase">Leading in Crypto Mining</h2>
                          <div class="wt-separator-outer">
                              <div class="wt-separator site-bg-primary"></div>
                          </div>
                      </div>
                      <!-- TITLE END -->
                      <div class="section-content m-b60">
                            <div class="wt-box">
                                <p>
                                    <strong>At O3EM, we redefine cryptocurrency mining by combining cutting-edge technology with sustainable and efficient practices. Founded on the principles of innovation and trust, O3EM specializes in providing advanced mining solutions for Bitcoin, Ethereum, and other cryptocurrencies.</strong>
                                </p>
                                <p>With a focus on maximizing profitability while minimizing environmental impact, we utilize eco-friendly operations and the latest blockchain advancements. Our 24/7 customer support ensures a seamless experience for investors and miners alike, making us a trusted partner in the dynamic world of crypto.</p>

                                <a href="#" class="site-button text-uppercase m-r15">Read More</a>
                                <a href="#" class="site-button-secondry text-uppercase">Contact Us</a>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->

    <!-- WHY CHOOSE US SECTION START  -->
    <div class="section-full bg-white p-t80 p-b50 ">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <span class="wt-title-subline font-16 text-gray-dark m-b15">Our Services</span>
                <h2 class="text-uppercase">Why Choose us</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>

            <!-- TITLE END-->
            <div class="section-content hover-block-outer" data-bs-toggle="tab-hover">
                <div class="row nav nav-tab">
                    <div class="col-md-4 col-sm-12 m-b30  p-t30">
                        <div class="nav-item">
                            <a class="nav-link active wt-icon-box-wraper right p-a20" href="#tab1" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary">
                                    <span class="icon-cell  site-text-primary">
                                        <img src="{{ asset('frontend/images/icon/pick-17.png') }}" alt="">
                                    </span>
                                </div>

                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Safe and Secure</h4>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra. </p>
                                </div>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper right p-a20" href="#tab2" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary">
                                    <span class="icon-cell  site-text-primary">
                                        <img src="{{ asset('frontend/images/icon/pick-29.png') }}" alt="">
                                    </span>
                                </div>

                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Instant Trading</h4>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra. </p>
                                </div>
                            </a>
                        </div>

                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper right p-a20" href="#tab3" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary">
                                    <span class="icon-cell  site-text-primary"><img src="images/icon/pick-28.png" alt=""></span>
                                </div>

                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Recurring Buying</h4>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra. </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 m-b30 circle-content-pic ">
                        <div class="tab-content ">
                            <div id="tab1" class="tab-pane in active">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20 text-center">
                                        <img src="{{ asset('frontend/images/ipad/safe.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab2" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20 text-center">
                                        <img src="{{ asset('frontend/images/ipad/Trading.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab3" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20 text-center">
                                        <img src="{{ asset('frontend/images/ipad/buying.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab4" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20 text-center">
                                        <img src="{{ asset('frontend/images/ipad/investment.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab5" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20 text-center">
                                        <img src="{{ asset('frontend/images/ipad/insurance.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                            <div id="tab6" class="tab-pane">
                                <div class="wt-box">
                                    <div class="wt-media site-text-primary m-b20 text-center">
                                        <img src="{{ asset('frontend/images/ipad/transaction.png')}}" alt="">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 m-b30  p-t30">
                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a20" href="#tab4" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary">
                                    <span class="icon-cell  site-text-primary">
                                        <img src="{{ asset('frontend/images/icon/pick-19.png')}}" alt="">
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Investment Planning</h4>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra. </p>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a20" href="#tab5" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary">
                                    <span class="icon-cell  site-text-primary">
                                        <img src="{{ asset('frontend/images/icon/pick-12.png')}}" alt="">
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Covered By Insurance</h4>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra. </p>
                                </div>
                            </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link wt-icon-box-wraper left p-a20" href="#tab6" data-bs-toggle="tab">
                                <div class="icon-md site-text-primary">
                                    <span class="icon-cell  site-text-primary">
                                        <img src="{{ asset('frontend/images/icon/pick-38.png')}}" alt="">
                                    </span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte text-uppercase">Bitcoin Transaction</h4>
                                    <p>Vitae adipiscing turpis. Aenean ligula nibh, molestie id viverra. </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- WHY CHOOSE US SECTION END -->

    <!-- SECTION CONTENT -->
    <div class="section-full site-bg-primary p-t50 p-b30">
        <div class="container">
            <div class="section-content">
                <div class="row">

                    <div class="col-md-3 col-sm-6">
                        <div class="text-black wt-icon-box-wraper center">
                            <div class="counter font-70 font-weight-800 m-b5">35</div>
                            <span class="font-18">Support Countries</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 text-black wt-icon-box-wraper center">
                            <div class="font-70 font-weight-800 m-b5"><span class="counter">700</span></div>
                            <span class="font-18">BitCoin ATMs</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 text-black wt-icon-box-wraper center">
                            <div class="counter font-70 font-weight-800 m-b5">300</div>
                            <span class="font-18">Producers</span>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="m-b30 wt-icon-box-wraper center text-black">
                            <div class="counter font-70 font-weight-800 m-b5">55</div>
                            <span class="font-18">Operators</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

    <!-- OUR TEAM MEMBER SECTION START -->
    <div class="section-full text-center wt-our-team bg-gray p-t80 p-b50">
        <div class="container">

            <!-- TITTLE START -->
            <div class="section-head text-center">

                <h2 class="text-uppercase">Our Consultants</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
            <!-- TITLE END -->

            <div class="section-content">
                <div class="row d-flex justify-content-center">

                    <!-- COLUMNS 1 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="wt-team-one bg-white">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('frontend/images/our-team/pic1.jpg') }}"  class="" alt="">
                                </a>
                            </div>
                            <div class="wt-team-info text-center bg-white p-a20">
                                <h4 class="wt-team-title">
                                    <a href="javascript:void(0);">Richard Wagner</a>
                                </h4>
                                <p>Consultant</p>
                                <ul class="social-icons social-square social-dark m-b0">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="wt-team-one bg-white">
                            <div class="wt-team-media ">
                                <a href="javascript:void(0);">
                                    <img src="frontend/images/our-team/pic2.jpg" alt="">
                                </a>
                            </div>
                            <div class="wt-team-info text-center bg-white p-a20">
                                <h4 class="wt-team-title">
                                    <a href="javascript:void(0);">Lisa Anderson</a>
                                </h4>
                                <p>Ceo & Founder</p>
                                <ul class="social-icons social-square social-dark m-b0">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="wt-team-one  bg-white">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);">
                                    <img src="frontend/images/our-team/pic3.jpg" alt="">
                                </a>
                            </div>
                            <div class="wt-team-info text-center bg-white p-a20">
                                <h4 class="wt-team-title">
                                    <a href="javascript:void(0);">Tommy Atkins</a>
                                </h4>
                                <p>Manager</p>
                                <ul class="social-icons social-square social-dark m-b0">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <!-- OUR TEAM MEMBER SECTION END -->

</div>
@endsection
