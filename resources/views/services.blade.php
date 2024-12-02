@extends('frontend.layouts.frontend')
@section('title','Services')
@section('content')
<div class="page-content  bg-white">
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(frontend/images/banner/services.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Services</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

   <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-2">
                <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT -->
    <div class="section-full  p-t80 p-b50 bg-gray">
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <h2 class="text-uppercase">Our Services</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>

            <!-- TITLE END-->
            <div class="section-content">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell">
                                    <img src="{{ asset('frontend/images/icon/pick-29.png') }}" alt=""></a>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase font-weight-500">Instant Trading</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 2 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell">
                                    <img src="{{ asset('frontend/images/icon/pick-28.png') }}" alt=""></a>
                            </div>
                            <div class="icon-content ">
                                <h4 class="wt-tilte text-uppercase font-weight-500">Recurring Buying</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 3 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell">
                                    <img src="{{ asset('frontend/images/icon/pick-17.png') }}" alt=""></a>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase font-weight-500">Safe and Secure</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 4 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell">
                                    <img src="{{ asset('frontend/images/icon/pick-19.png') }}" alt="">
                                </a>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase font-weight-500">Investment Planning</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 5 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell">
                                    <img src="{{ asset('frontend/images/icon/pick-12.png') }}" alt=""></a>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase font-weight-500">Covered By Insurance</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 6 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell">
                                    <img src="{{ asset('frontend/images/icon/pick-38.png') }}" alt=""></a>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase font-weight-500">Bitcoin Transaction</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 7 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell">
                                    <img src="{{ asset('frontend/images/icon/pick-1.png') }}" alt=""></a>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase font-weight-500">Instant Trading</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 8 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell">
                                    <img src="{{ asset('frontend/images/icon/pick-2.png') }}" alt=""></a>
                            </div>
                            <div class="icon-content ">
                                <h4 class="wt-tilte text-uppercase font-weight-500">Recurring Buying</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMNS 9 -->
                    <div class="col-lg-4 col-md-6 m-b30 animate_line">
                        <div class="wt-icon-box-wraper  p-a30 center bg-white m-a5">
                            <div class="icon-lg site-text-primary m-b20">
                                <a href="#" class="icon-cell">
                                    <img src="{{ asset('frontend/images/icon/pick-3.png') }}" alt=""></a>
                            </div>
                            <div class="icon-content">
                                <h4 class="wt-tilte text-uppercase font-weight-500">Safe and Secure</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesg indtrysum has been the Ipsum dummy of the printing indus .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->



     <!-- COMPANY DETAIL SECTION START -->
    <div class="section-full p-t80 p-b50 overlay-wraper bg-parallax"  data-stellar-background-ratio="0.5" style="background-image:url({{ asset('frontend/images/background/bg4.jpg')}});">
        <div class="overlay-main opacity-07 bg-black"></div>
        <div class="container ">
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="text-left text-white">
                        <h2>A New Money Cryptocurrency</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a metus pellentesque, scelerisque ex sed. </p>
                    </div>
                 </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="row">
                        <div class="col-md-4 m-b30">
                            <div class="status-marks  text-white">
                                <div class="status-value text-right">
                                    <span class="counter">750</span>
                                    <i class="flaticon-network-1 font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">Countries Accepted</h6>
                            </div>
                        </div>
                        <div class="col-md-4 m-b30">
                            <div class="status-marks  text-white">
                                <div class="status-value text-right">
                                    <span class="counter">200</span>
                                    <i class="flaticon-bitcoin-2 font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">Million Wallets</h6>
                            </div>
                        </div>
                        <div class="col-md-4 m-b30">
                            <div class="status-marks  text-white">
                                <div class="status-value text-right">
                                    <span class="counter">4522</span>
                                    <i class="flaticon-profits font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">Transactions</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COMPANY DETAIL SECTION End -->

 <!-- SECTION TABLE START -->
 <div class="section-full p-t80 p-b50">
    <div class="container">
        <!-- TABLE RESPONSIVE -->
        <div class="section-head text-center">
            <h2 class="text-uppercase">Cryptocurrency Prices</h2>
            <div class="wt-separator-outer">
                <div class="wt-separator site-bg-primary"></div>
            </div>
            <p>Live cryptocurrency prices, 24-hour changes, volume, and supply, fetched directly from the CoinLore API.</p>
        </div>

        <div id="no-more-tables">
            <table
                class="col-md-12 m-b30 table-bordered table-striped table-condensed cf wt-responsive-table text-black">
                <thead class="cf">
                    <tr>
                        <th>Cryptocurrency</th>
                        <th>Price</th>
                        <th class="numeric">24h % Change</th>
                        <th class="numeric">24h Volume (coin)</th>
                        <th class="numeric">Supply</th>
                    </tr>
                </thead>
                <tbody id="cryptoTableBody">
                    <!-- Rows will be dynamically added here -->
                </tbody>
            </table>
        </div>
        <!-- Pagination Controls -->
        <div id="paginationControls" class="text-center m-t20"></div>
    </div>
</div>
<!-- SECTION TABLE  END -->

</div>
@endsection
