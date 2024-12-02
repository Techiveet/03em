@extends('frontend.layouts.frontend')
@section('title','Blog')
@section('content')
<div class="page-content">

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(frontend/images/banner/blog-banner.jpg);">
        <div class="overlay-main bg-black opacity-07"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Blog</h1>
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
                <li>Blog</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->

    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">

                <!-- LEFT PART START -->
                <div class="col-lg-9 col-md-12">
                    <!-- BLOG GRID START -->
                    <div  class="portfolio-wrap wt-blog-grid-2 row">

                        <!-- COLUMNS 1 -->
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/P-Wxd_D2vQs?si=g4fz2o9PjH5veFE1"></iframe>
                                </div>
                                <div class="wt-post-info p-t30 p-m30 bg-white">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="javascript:void(0);">Blogpost With Youtube</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Dec</strong> <span> 2023</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Asperiores, tenetur, blanditiis, quaerat odit exercitation pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt.</p>
                                    </div>
                                    <div class="clearfix">
                                        <div class="wt-post-readmore pull-left">
                                                <a href="javascript:void(0);" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                                        </div>
                                        <div class="widget_social_inks pull-right">
                                            <ul class="social-icons social-radius social-dark m-b0">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- COLUMNS 3 -->
                        <div class="post masonry-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-1">
                                <div class="wt-post-media">
                                    <!--Fade slider-->
                                    <div class="owl-carousel owl-fade-slider-one owl-btn-vertical-center owl-dots-bottom-right">

                                        <div class="item">
                                            <div class="wt-media">
                                                <img src="frontend/images/blog/grid/pic1.jpg" alt="">
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="wt-media">
                                                <img src="frontend/images/blog/grid/pic2.jpg" alt="">
                                            </div>
                                        </div>

                                        <div class="item">
                                            <div class="wt-media">
                                                <img src="frontend/images/blog/grid/pic3.jpg" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <!--fade slider END-->
                                </div>
                                <div class="wt-post-info p-t30 p-m30 bg-white">
                                    <div class="wt-post-title ">
                                        <h3 class="post-title"><a href="javascript:void(0);">Blogpost With Image Slider</a></h3>
                                    </div>
                                    <div class="wt-post-meta ">
                                        <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>20 Dec</strong> <span> 2023</span> </li>
                                        <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>John</span></a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-text">
                                        <p>Asperiores, tenetur, blanditiis, quaerat odit exercitation pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt.</p>
                                    </div>
                                    <div class="clearfix">
                                        <div class="wt-post-readmore pull-left">
                                                <a href="javascript:void(0);" title="READ MORE" rel="bookmark" class="site-button-link">Read More</a>
                                        </div>
                                        <div class="widget_social_inks pull-right">
                                            <ul class="social-icons social-radius social-dark m-b0">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
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
                    <!-- BLOG GRID END -->

                    <!-- PAGINATION START -->
                    <div class="pagination-bx col-lg-12 clearfix ">
                        <ul class = "custom-pagination pagination-1">
                            <li><a href = "#">&laquo;</a></li>
                            <li class = "active"><a href = "#">1</a></li>
                            <li><a href = "#">2</a></li>
                            <li><a href = "#">3</a></li>
                            <li><a href = "#">4</a></li>
                            <li><a href = "#">5</a></li>
                            <li><a href = "#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->
                </div>
                <!-- LEFT PART END -->

                <!-- RIGHT PART START -->

                    <!-- SIDE BAR START -->
                    <div class="col-lg-3 col-md-12">

                        <aside  class="side-bar">

                                <!-- 13. SEARCH -->
                                <div class="widget bg-white ">
                                    <h4 class="widget-title">Search</h4>
                                    <div class="search-bx">
                                        <form role="search" method="post">
                                            <div class="input-group">
                                                <input name="news-letter" type="text" class="form-control" placeholder="Write your text">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="site-button"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- 2. RECENT POSTS -->
                                <div class="widget bg-white  recent-posts-entry">
                                    <h4 class="widget-title">Posts</h4>
                                    <div class="section-content">
                                        <div class="wt-tabs tabs-default border">
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#web-design-1">Recent</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" data-bs-toggle="tab" href="#graphic-design-1">Popular</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">

                                                <div id="web-design-1" class="tab-pane active ">
                                                    <div class="widget-post-bx">
                                                        <div class="widget-post clearfix bg-gray">
                                                            <div class="wt-post-media">
                                                                <img src="frontend/images/blog/recent-blog/pic1.jpg"  alt="" class="radius-bx">
                                                            </div>
                                                            <div class="wt-post-info">
                                                                <div class="wt-post-header">
                                                                    <h6 class="post-title">Lorem ipsum dolor sit amet</h6>
                                                                </div>
                                                                <div class="wt-post-meta">
                                                                    <ul>
                                                                        <li class="post-author">25 Dec</li>
                                                                        <li class="post-comment"><i class="fa fa-comments"></i> 20comment</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div id="graphic-design-1" class="tab-pane">
                                                    <div class="widget-post-bx">
                                                        <div class="widget-post clearfix bg-gray">
                                                            <div class="wt-post-media">
                                                                <img src="frontend/images/blog/recent-blog/pic3.jpg" alt=""  class="radius-bx">
                                                            </div>
                                                            <div class="wt-post-info">
                                                                <div class="wt-post-header">
                                                                    <h6 class="post-title">Blog post title doler sit amet</h6>
                                                                </div>
                                                                <div class="wt-post-meta">
                                                                    <ul>
                                                                        <li class="post-author">25 Dec</li>
                                                                        <li class="post-comment"><i class="fa fa-comments"></i> 10 comment</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 4. OUR GALLERY  -->
                                <div class="widget widget_gallery mfp-gallery">
                                    <h4 class="widget-title">Our Gallery</h4>
                                    <ul>
                                        <li>
                                            <div class="wt-post-thum">
                                                <a href="frontend/images/gallery/pic1.jpg" class="mfp-link" ><img src="frontend/images/gallery/thumb/pic1.jpg" alt=""></a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="frontend/images/gallery/pic2.jpg" class="mfp-link"><img src="frontend/images/gallery/thumb/pic2.jpg" alt=""></a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="wt-post-thum  ">
                                                <a href="frontend/images/gallery/pic3.jpg" class="mfp-link"><img src="frontend/images/gallery/thumb/pic3.jpg" alt=""></a>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="wt-post-thum ">
                                                <a href="frontend/images/gallery/pic4.jpg" class="mfp-link"><img src="frontend/images/gallery/thumb/pic4.jpg" alt=""></a>
                                            </div>
                                        </li>


                                    </ul>

                                </div>
                                <!-- 7. OUR CLIENT -->
                                <div class="widget">
                                    <h4 class="widget-title">Our Client</h4>
                                    <div class="owl-carousel widget-client p-t10">

                                        <!-- COLUMNS 1 -->
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo wt-img-effect on-color">
                                                    <a href="#"><img src="frontend/images/client-logo/logo1.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 2 -->
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo wt-img-effect on-color">
                                                    <a href="#"><img src="frontend/images/client-logo/logo2.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- COLUMNS 3 -->
                                        <div class="item">
                                            <div class="ow-client-logo">
                                                <div class="client-logo wt-img-effect on-color">
                                                    <a href="#"><img src="frontend/images/client-logo/logo3.png" alt=""></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- 6. NEWSLETTER -->
                                <div class="widget widget_newsletter-2 bg-white  ">
                                    <h4 class="widget-title">Newsletter</h4>
                                    <div class="newsletter-bx p-a30">
                                        <div class="newsletter-icon">
                                            <i class="fa fa-envelope-o"></i>
                                        </div>

                                        <div class="newsletter-content">
                                            <i>Enter your e-mail and subscribe to our newsletter. Sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis</i>
                                        </div>
                                        <div class="m-t20">
                                            <form role="search" method="post">
                                            <div class="input-group">
                                                <input name="news-letter" class="form-control" placeholder="ENTER YOUR EMAIL" type="text">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- 12. TAGS -->
                                <div class="widget bg-white  widget_tag_cloud">
                                    <h4 class="widget-title">Tags</h4>
                                    <div class="tagcloud">
                                        <a href="javascript:void(0);">Trouble </a>
                                        <a href="javascript:void(0);">Programmers</a>
                                        <a href="javascript:void(0);">Never</a>
                                        <a href="javascript:void(0);">Tell</a>
                                    </div>
                                </div>

                        </aside>

                    </div>
                    <!-- RIGHT PART END -->
            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

</div>
@endsection
