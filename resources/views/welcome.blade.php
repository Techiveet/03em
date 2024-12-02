@extends('frontend.layouts.frontend')
@section('title','Home')
@section('content')
<div class="page-content">
    <!-- SLIDER START -->
    <div class="main-slider style-two default-banner">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <!-- START REVOLUTION SLIDER 5.4.1 -->
                <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                    data-alias="typewriter-effect" data-source="gallery">
                    <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                        <ul>

                            <!-- SLIDE 1 -->
                            <li data-index="rs-1000" data-transition="slidingoverlayhorizontal"
                                data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="{{ asset('frontend/images/main-slider/slider3/slide1.jpg')}}"
                                data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/main-slider/slider3/slide1.jpg') }}" alt=""
                                    data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-100-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                    data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[
                                    {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 12;background-color:rgba(2, 14, 34, 0.9);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>
                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-100-layer-2"
                                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['208','208','208','208']"
                                    data-fontsize="['60','60','60','60']" data-lineheight="['110','110','110','110']"
                                    data-width="['6','6','6','6']" data-height="['110,'110','110','110']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;white-space: normal;">

                                    <div class="site-bg-primary">&nbsp;</div>
                                </div>

                                <!-- LAYER NR. 3 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-100-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                    data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                    data-fontsize="['55','55','55','45']" data-lineheight="['60','60','60','65']"
                                    data-width="['700','700','700','700']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;white-space: normal;font-weight: 700;color: rgb(75, 57, 65);border-width:0px;">

                                    <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase;">
                                        <span class="text-white" style="padding-right:10px;">Secure</span>
                                        <span class="site-text-primary">& Reliable</span>
                                    </div>
                                </div>

                                <!-- LAYER NR. 4 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-100-layer-4"
                                    data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                    data-y="['top','top','top','top']" data-voffset="['260','260','260','260']"
                                    data-fontsize="['53','53','53','45']" data-lineheight="['70','70','70','75']"
                                    data-width="['700','700','700','700']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;white-space: normal;font-weight: 700;border-width:0px;">
                                    <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                                        <span class="site-text-primary" style="padding-right:10px;">Crypto</span>
                                        <span class="text-white">Mining</span>
                                    </div>
                                </div>

                                <!-- LAYER NR. 5 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-100-layer-5"
                                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                    data-y="['top','top','top','top']" data-voffset="['340','340','340','340']"
                                    data-fontsize="['16','16','16','30']" data-lineheight="['30','30','30','40']"
                                    data-width="['600','600','600','600']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;font-weight: 500;color:#fff;border-width:0px;">
                                    <span style="font-family: 'Poppins', sans-serif;">Join O3EM and experience unmatched reliability, efficiency, and profitability in cryptocurrency mining.</span>
                                </div>

                                <!-- LAYER NR. 6 [ for see all service botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-100-layer-6"
                                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                    data-y="['top','top','top','top']" data-voffset="['430','430','430','600']"
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
                                    <a href="/contact-us" class="site-button slider-btn-left">Contact Us</a>
                                </div>

                                <!-- LAYER NR. 7 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-100-layer-7"
                                    data-x="['left','left','left','left']" data-hoffset="['220','220','220','320']"
                                    data-y="['top','top','top','top']" data-voffset="['430','430','430','600']"
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index:13;text-transform:uppercase;font-weight:500;">
                                    <a href="javascript:;" class=" site-button white slider-btn-right">Join Us</a>
                                </div>

                                <!-- LAYER NR. 8 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-100-layer-8"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']"
                                    data-voffset="['100','100','100','100']" data-frames='[
                                    {"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                    ]' style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider3/earth-2.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 9 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-100-layer-9"
                                    data-x="['right','right','right','right']" data-hoffset="['100','100','100','100']"
                                    data-y="['top','top','top','top']" data-voffset="['150','150','150','150']"
                                    data-height="none" data-whitespace="nowrap" data-type="image"
                                    data-responsive_offset="on" data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":4500,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider3/map-marker.png') }}" alt=""
                                        class="floating">
                                </div>






                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-1001" data-transition="slidingoverlayhorizontal"
                                data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="{{ asset('frontend/images/main-slider/slider3/slide1.jpg') }}"
                                data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/main-slider/slider3/slide1.jpg') }}" alt=""
                                    data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-101-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                    data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 12;background-color:rgba(2, 14, 34, 0.9);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-101-layer-2"
                                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['208','208','208','208']"
                                    data-fontsize="['60','60','60','60']" data-lineheight="['110','110','110','110']"
                                    data-width="['6','6','6','6']" data-height="['110,'110','110','110']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;">

                                    <div class="site-bg-primary">&nbsp;</div>
                                </div>

                                <!-- LAYER NR. 3 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-101-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                    data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                    data-fontsize="['55','55','55','45']" data-lineheight="['60','60','60','65']"
                                    data-width="['700','700','700','700']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;
                                    font-weight: 700;color: rgb(75, 57, 65);border-width:0px;">

                                    <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase; ">
                                        <span class="text-white" style="padding-right:10px;">Invest </span><span
                                            class="site-text-primary">in Crypto </span>
                                    </div>
                                </div>

                                <!-- LAYER NR. 4 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-101-layer-4"
                                    data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                    data-y="['top','top','top','top']" data-voffset="['260','260','260','260']"
                                    data-fontsize="['53','53','53','45']" data-lineheight="['70','70','70','70']"
                                    data-width="['700','700','700','700']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;font-weight: 700;border-width:0px;">
                                    <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                                        <span class="site-text-primary" style="padding-right:10px;">with
                                        </span><span class="text-white">Confidence</span>
                                    </div>
                                </div>

                                <!-- LAYER NR. 5 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-101-layer-5"
                                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                    data-y="['top','top','top','top']" data-voffset="['340','340','340','340']"
                                    data-fontsize="['16','16','16','30']" data-lineheight="['30','30','30','40']"
                                    data-width="['600','600','600','600']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    font-weight: 500;color:#fff;border-width:0px;">
                                    <span style="font-family: 'Poppins', sans-serif;">O3EM makes crypto investing easy and rewarding.</span>
                                </div>

                                <!-- LAYER NR. 6 [ for see all service botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-101-layer-6"
                                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                    data-y="['top','top','top','top']" data-voffset="['430','430','430','600']"
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
                                    <a href="javascript:;" class="site-button slider-btn-left">Contact Us</a>
                                </div>

                                <!-- LAYER NR. 7 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-101-layer-7"
                                    data-x="['left','left','left','left']" data-hoffset="['220','220','220','320']"
                                    data-y="['top','top','top','top']" data-voffset="['430','430','430','600']"
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index:13;text-transform:uppercase;font-weight:500;">
                                    <a href="javascript:;" class=" site-button white slider-btn-right">Join Us</a>
                                </div>

                                <!-- LAYER NR. 8 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-101-layer-8"
                                    data-x="['right','right','right','right']" data-hoffset="['279','279','279','279']"
                                    data-y="['top','top','top','top']" data-voffset="['73','73','73','73']"
                                    data-frames='[{"from":"x:-100;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider3/b-left.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 9 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-101-layer-9"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['top','top','top','top']" data-voffset="[''73,'73','73','73']"
                                    data-frames='[{"from":"x:100;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 13;">
                                    <img src="{{ asset('frontend/images/main-slider/slider3/b-right.png') }}" alt="">
                                </div>

                                <!-- LAYER NR. 10 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-101-layer-10"
                                    data-x="['right','right','right','right']" data-hoffset="['-80','-80','-80','-80']"
                                    data-y="['top','top','top','top']" data-voffset="[''100,'100','100','100']"
                                    data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":4000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' style="z-index: 12;">
                                    <img src="{{ asset('frontend/images/main-slider/slider3/shadow-bg1.png') }}" alt="">
                                </div>
                            </li>

                             <!-- SLIDE 3 -->
                            <li data-index="rs-1002" data-transition="slidingoverlayhorizontal"
                                data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                data-easein="default" data-easeout="default" data-masterspeed="default"
                                data-thumb="{{ asset('frontend/images/main-slider/slider3/slide1.jpg') }}"
                                data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="{{ asset('frontend/images/main-slider/slider3/slide1.jpg') }}" alt=""
                                    data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"
                                    class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper " id="slide-101-layer-1"
                                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                    data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                    data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape"
                                    data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                    data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]"
                                    style="z-index: 12;background-color:rgba(2, 14, 34, 0.9);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-101-layer-2"
                                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
                                    data-y="['top','top','top','top']" data-voffset="['208','208','208','208']"
                                    data-fontsize="['60','60','60','60']" data-lineheight="['110','110','110','110']"
                                    data-width="['6','6','6','6']" data-height="['110,'110','110','110']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;">

                                    <div class="site-bg-primary">&nbsp;</div>
                                </div>

                                <!-- LAYER NR. 3 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-101-layer-3"
                                    data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                    data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                    data-fontsize="['55','55','55','45']" data-lineheight="['60','60','60','65']"
                                    data-width="['700','700','700','700']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13; white-space: normal;
                                    font-weight: 700;color: rgb(75, 57, 65);border-width:0px;">

                                    <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase; ">
                                        <span class="text-white" style="padding-right:10px;">Innovating </span><span
                                            class="site-text-primary">the </span>
                                    </div>
                                </div>

                                <!-- LAYER NR. 4 [ for title ] -->
                                <div class="tp-caption   tp-resizeme" id="slide-101-layer-4"
                                    data-x="['left','left','left','left']" data-hoffset="['60','60','60','100']"
                                    data-y="['top','top','top','top']" data-voffset="['260','260','260','260']"
                                    data-fontsize="['53','53','53','45']" data-lineheight="['70','70','70','70']"
                                    data-width="['700','700','700','700']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    white-space: normal;font-weight: 700;border-width:0px;">
                                    <div style="font-family: 'Poppins', sans-serif; text-transform:uppercase ;">
                                        <span class="site-text-primary" style="padding-right:10px;">Future of
                                        </span><span class="text-white">Crypto</span>
                                    </div>
                                </div>

                                <!-- LAYER NR. 5 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme" id="slide-101-layer-5"
                                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                    data-y="['top','top','top','top']" data-voffset="['340','340','340','340']"
                                    data-fontsize="['16','16','16','30']" data-lineheight="['30','30','30','40']"
                                    data-width="['600','600','600','600']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[{"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index: 13;
                                    font-weight: 500;color:#fff;border-width:0px;">
                                    <span style="font-family: 'Poppins', sans-serif;">Join O3EM for secure and scalable crypto mining.</span>
                                </div>

                                <!-- LAYER NR. 6 [ for see all service botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-101-layer-6"
                                    data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                    data-y="['top','top','top','top']" data-voffset="['430','430','430','600']"
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index:13; text-transform:uppercase;">
                                    <a href="javascript:;" class="site-button slider-btn-left">Contact Us</a>
                                </div>

                                <!-- LAYER NR. 7 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-101-layer-7"
                                    data-x="['left','left','left','left']" data-hoffset="['220','220','220','320']"
                                    data-y="['top','top','top','top']" data-voffset="['430','430','430','600']"
                                    data-lineheight="['none','none','none','none']"
                                    data-width="['300','300','300','300']" data-height="['none','none','none','none']"
                                    data-whitespace="['normal','normal','normal','normal']" data-type="text"
                                    data-responsive_offset="on" data-frames='[
                                    {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                    data-paddingleft="[0,0,0,0]" style="z-index:13;text-transform:uppercase;font-weight:500;">
                                    <a href="javascript:;" class=" site-button white slider-btn-right">Join Us</a>
                                </div>

                                <!-- LAYER NR. 8 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-101-layer-8"
                                    data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['30','30','30','30']"
                                    data-frames='[{"from":"y:200px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                    {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                    style="z-index: 13;">
                                    <img src="frontend/images/main-slider/slider2/earth.png" alt="" class="spin-city">
                                </div>

                                <!-- LAYER NR. 9 [ for more detail botton ] -->
                                <div class="tp-caption tp-resizeme" id="slide-101-layer-9"
                                    data-x="['right','right','right','right']" data-hoffset="['120','120','120','120']"
                                    data-y="['bottom','bottom','bottom','bottom']" data-voffset="['110','110','110','110']"
                                    data-height="none"data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                    data-frames='[{"from":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3000,"ease":"Power3.easeOut"},
                                    {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                    data-textAlign="['left','left','left','left']"data-paddingtop="[0,0,0,0]"data-paddingright="[0,0,0,0]"
                                    data-paddingbottom="[0,0,0,0]"data-paddingleft="[0,0,0,0]" style="z-index: 13;">
                                    <img src="frontend/images/main-slider/slider2/bitcoin.png" alt="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>
    </div>
    <!-- SLIDER END -->

    <!-- MARQUEE SCROLL -->
    <div class="bg-black marquee">
        <div class="TickerNews" id="T1">
            <div class="ti_wrapper">
                <div class="ti_slide">
                    <div id="cryptoTicker" class="ti_content">
                        <!-- Crypto ticker content will be dynamically inserted here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MARQUEE SCROLL SECTION  END -->

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
  <!-- ABOUT COMPANY SECTION  END -->

    <!-- OUR SERVICES SECTION START -->
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
    <!-- OUR SERVICES SECTION END -->


    <!-- SECTION Converter START -->
    <div class="section-full  p-t80 p-b50 bg-full-height bg-repeat-x graph-slide-image" style="background-image:url({{ asset('frontend/images/background/bg-1.jp') }}g);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 m-b30 clearfix">
                    <div class="bit-converter p-a40 bg-white">
                        <div class="wt-box">
                            <h2 class="text-uppercase m-t0 site-text-primary">Currency convertor</h2>
                            <p>Highlights the ability to convert cryptocurrencies with live exchange rates, emphasizing simplicity and efficiency.</p>
                        </div>

                        <div class="currency-calculator sp-one">
                            <div style="width: 100%;">
                                <crypto-converter-widget
                                    live
                                    shadow
                                    symbol
                                    fiat="united-states-dollar"
                                    crypto="bitcoin"
                                    amount="1"
                                    border-radius="0.60rem"
                                    background-color="#171f2c"
                                    decimal-places="2">
                                    <a href="https://cr.today/" rel="noopener">Converter Widget</a>
                                </crypto-converter-widget>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 m-b30">
                    <div class="wt-box graph-part-right text-white">
                        <strong class="text-uppercase title-first">cryptocurrency</strong>
                        <span class="text-uppercase site-text-primary display-block title-second">Start selling, buying and trading</span>
                        <p><strong>Encourages users to engage in cryptocurrency trading and outlines the benefits of using your platform.</strong></p>
                        <ul class="list-check-circle primary">
                            <li>Instant conversions.</li>
                            <li>User-friendly tools.</li>
                            <li>Secure blockchain-backed transactions. </li>
                            <li>Support for users at all levels. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION Converter  END -->

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

    <!-- COMPANY DETAIL SECTION START -->
    <div class="section-full p-t80 p-b50 overlay-wraper bg-parallax clouds1 bg-repeat"
        data-stellar-background-ratio="0.5" style="background-image:url(frontend/images/background/bg-9.jpg);">
        <div class="overlay-main bg-secondry opacity-05"></div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-md-12 m-b30">
                    <div class="rocket-pic">
                        <div class="rocket-animation ">
                            <img src="frontend/images/rocket.png" alt="Rocket Launch" class="floating" />
                            <div class="rocket-fire">
                                <img src="frontend/images/fire.gif" alt="Rocket Fire Animation" class="floating" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 m-b30">
                    <div class="awesome-counter text-right text-white">
                        <h3 class="font-24">Fueling the Crypto Revolution</h3>
                        <h2 class="font-60 font-weight-600"><span class="site-text-primary"> KEY METRICS</span></h2>
                        <p>
                            Join the journey to redefine financial freedom with cryptocurrency. At O3EM, we empower
                            innovation and sustainability while delivering high-performance solutions for the future
                            of digital assets. Explore the metrics driving our success and leadership in the industry.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="status-marks text-white m-tb10">
                                <div class="status-value text-right">
                                    <span class="counter">2000</span>
                                    <i class="fa fa-building font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-right">SUCCESSFUL PROJECTS</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="status-marks text-white m-tb10">
                                <div class="status-value text-right">
                                    <span class="counter">8000</span>
                                    <i class="fa fa-users font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">SATISFIED INVESTORS</h6>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="status-marks text-white m-tb10">
                                <div class="status-value text-right">
                                    <span class="counter">1200</span>
                                    <i class="fa fa-globe font-26 m-l15"></i>
                                </div>
                                <h6 class="text-uppercase text-white text-right">GLOBAL PARTNERS</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COMPANY DETAIL SECTION End -->

    {{-- Testimonial --}}
    <div class="section-full p-t80 p-b50 bg-center bg-full-height bg-no-repeat" style="background-image:url(images/background/bg-testimonial.jpg);">
        <div class="container">
            <!-- TITLE START -->
            <div class="section-head text-center">
                <span class="wt-title-subline font-16 text-gray-dark m-b15">Our Clients</span>
                <h2 class="text-uppercase">Our Client Say</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
            </div>
            <!-- TITLE END -->

            <!-- TESTIMONIAL 4 START ON BACKGROUND -->
            <div class="section-content">
                <div class="owl-carousel home-carousel-1 m-b30 owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1161px, 0px, 0px); transition: all; width: 4644px;">
                            <!-- Testimonial 1 -->
                            <div class="owl-item cloned" style="width: 565.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="testimonial-5">
                                        <div class="testimonial-pic-block radius-bx">
                                            <div class="testimonial-pic radius">
                                                <img src="{{ asset('frontend/images/testimonials/pic1.jpg') }}" width="132" height="132" alt="John Doe">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                            <div class="testimonial-paragraph">
                                                <span class="fa fa-quote-left site-text-primary"></span>
                                                <p>
                                                    "O3EM has completely transformed how I manage my cryptocurrency portfolio. Their tools are intuitive, and their support team is always available to guide you through any challenges."
                                                </p>
                                            </div>
                                            <div class="testimonial-detail clearfix">
                                                <strong class="testimonial-name">John Doe</strong>
                                                <span class="testimonial-position site-text-primary p-t10">Crypto Investor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 2 -->
                            <div class="owl-item cloned" style="width: 565.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="testimonial-5">
                                        <div class="testimonial-pic-block radius-bx">
                                            <div class="testimonial-pic radius">
                                                <img src="{{ asset('frontend/images/testimonials/pic2.jpg') }}" width="132" height="132" alt="Jane Smith">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                            <div class="testimonial-paragraph">
                                                <span class="fa fa-quote-left site-text-primary"></span>
                                                <p>
                                                    "I’ve never felt more confident about trading cryptocurrency. O3EM provides the most accurate data and a seamless trading experience."
                                                </p>
                                            </div>
                                            <div class="testimonial-detail clearfix">
                                                <strong class="testimonial-name">Jane Smith</strong>
                                                <span class="testimonial-position site-text-primary p-t10">Financial Analyst</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 3 -->
                            <div class="owl-item active" style="width: 565.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="testimonial-5">
                                        <div class="testimonial-pic-block radius-bx">
                                            <div class="testimonial-pic radius">
                                                <img src="{{ asset('frontend/images/testimonials/pic3.jpg') }}" width="132" height="132" alt="Michael Lee">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                            <div class="testimonial-paragraph">
                                                <span class="fa fa-quote-left site-text-primary"></span>
                                                <p>
                                                    "The level of transparency and security offered by O3EM is unmatched. It’s my go-to platform for all my crypto trading and investment needs."
                                                </p>
                                            </div>
                                            <div class="testimonial-detail clearfix">
                                                <strong class="testimonial-name">Michael Lee</strong>
                                                <span class="testimonial-position site-text-primary p-t10">Blockchain Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 4 -->
                            <div class="owl-item active" style="width: 565.5px; margin-right: 15px;">
                                <div class="item">
                                    <div class="testimonial-5">
                                        <div class="testimonial-pic-block radius-bx">
                                            <div class="testimonial-pic radius">
                                                <img src="{{ asset('frontend/images/testimonials/pic4.jpg') }}" width="132" height="132" alt="Emily Davis">
                                            </div>
                                        </div>
                                        <div class="testimonial-text clearfix">
                                            <div class="testimonial-paragraph">
                                                <span class="fa fa-quote-left site-text-primary"></span>
                                                <p>
                                                    "O3EM’s platform has made it incredibly easy for me to buy and sell digital assets. The user experience is top-notch, and the resources available are invaluable."
                                                </p>
                                            </div>
                                            <div class="testimonial-detail clearfix">
                                                <strong class="testimonial-name">Emily Davis</strong>
                                                <span class="testimonial-position site-text-primary p-t10">Entrepreneur</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev">
                            <i class="fa fa-chevron-left"></i>
                        </button>

                        <button type="button" role="presentation" class="owl-next">
                            <i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ANY QUERY SECTION CONTENT START -->
    <div class="section-full no-col-gap bg-repeat">
        <div class="container-fluid">
            <div class="row">
                <!-- Any Query Section -->
                <div class="col-md-6 col-sm-6 bg-secondry">
                    <div class="section-content p-tb60 p-r30 clearfix">
                        <div class="wt-left-part any-query">
                            <img src="frontend/images/any-query.png" alt="Query Support">
                            <div class="text-center">
                                <h3 class="text-uppercase font-weight-500 text-white">Have Any Questions?</h3>
                                <p class="text-white">Our dedicated support team is here to assist you with any inquiries about our cryptocurrency services. Reach out today!</p>
                                <h4 class="site-text-primary m-b0">+251 000 000 000</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Us Section -->
                <div class="col-md-6 col-sm-6 site-bg-primary">
                    <div class="section-content p-tb60 p-l30 clearfix">
                        <div class="wt-right-part any-query-contact">
                            <img src="frontend/images/any-query-contact.png" alt="Contact Us">
                            <div class="text-center">
                                <h3 class="text-uppercase font-weight-500 text-white">Get In Touch</h3>
                                <p class="text-white">We’re here to help! Contact us via email for support, partnerships, or general information about O3EM.</p>
                                <h4 class="text-secondry m-b0">info@o3em.com</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ANY QUERY SECTION CONTENT END -->

      <!-- LATEST BLOG SECTION START -->
      <div class="section-full latest-blog bg-gray p-t80 p-b50">
        <div class="container">
            <!-- TITLE -->
            <div class="section-head text-center">
                <h2 class="text-uppercase">Latest Blog Posts</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator site-bg-primary"></div>
                </div>
                <p>Explore the latest trends, insights, and tips in the world of cryptocurrency. Stay informed and ahead of the curve with our curated articles.</p>
            </div>
            <!-- TITLE -->

            <div class="section-content">
                <div class="row d-flex justify-content-center">
                    <!-- BLOG POST 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post latest-blog-1 date-style-1">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="javascript:;"><img src="frontend/images/blog/blog-small/pic1.jpg" alt="Bitcoin and Altcoins"></a>
                            </div>
                            <div class="wt-post-info p-a30 p-b20 bg-white">
                                <div class="wt-post-title">
                                    <h3 class="post-title"><a href="javascript:;">Understanding Bitcoin and Altcoins</a></h3>
                                </div>
                                <div class="wt-post-meta">
                                    <ul>
                                        <li class="post-date"><i class="fa fa-calendar"></i><strong>10 Dec</strong> <span>2023</span></li>
                                        <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">John</a></li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comments</a></li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>Discover the fundamental differences between Bitcoin and altcoins, and learn how to navigate the dynamic world of cryptocurrency.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BLOG POST 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post latest-blog-1 date-style-1">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="javascript:;"><img src="frontend/images/blog/blog-small/pic4.jpg" alt="Crypto Trading Tips"></a>
                            </div>
                            <div class="wt-post-info p-a30 p-b20 bg-white">
                                <div class="wt-post-title">
                                    <h3 class="post-title"><a href="javascript:;">8 Must-Read Tips for Crypto Trading</a></h3>
                                </div>
                                <div class="wt-post-meta">
                                    <ul>
                                        <li class="post-date"><i class="fa fa-calendar"></i><strong>10 Dec</strong> <span>2023</span></li>
                                        <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">John</a></li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comments</a></li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>Enhance your trading strategy with these expert tips designed for both beginners and seasoned traders in the crypto space.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BLOG POST 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-post latest-blog-1 date-style-1">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="javascript:;"><img src="frontend/images/blog/blog-small/pic7.jpg" alt="Crypto Analysis"></a>
                            </div>
                            <div class="wt-post-info p-a30 p-b20 bg-white">
                                <div class="wt-post-title">
                                    <h3 class="post-title"><a href="javascript:;">Market Analysis for Beginners</a></h3>
                                </div>
                                <div class="wt-post-meta">
                                    <ul>
                                        <li class="post-date"><i class="fa fa-calendar"></i><strong>10 Dec</strong> <span>2023</span></li>
                                        <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:;">John</a></li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:;">0 comments</a></li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>New to cryptocurrency? Learn the basics of market analysis and how to interpret key trends to make informed investment decisions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LATEST BLOG SECTION END -->


    <!-- OUR CLIENT SLIDER START -->
    <div class="section-full overlay-wraper bg-cover bg-repeat-x site-bg-primary"
        style="background-image:url(frontend/images/background/bg-7.png)">
        <div class="container">

            <!-- IMAGE CAROUSEL START -->
            <div class="section-content">
                <div class="owl-carousel home-logo-carousel">

                    <!-- COLUMNS 1 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w1.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w3.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 4 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 5 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w5.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 6 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w6.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 7 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w1.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 8 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 9 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w3.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 10 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 11 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w5.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 12 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="frontend/images/client-logo/w6.png" alt=""></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- IMAGE CAROUSEL START -->
        </div>

    </div>
    <!-- OUR CLIENT SLIDER END -->

</div>
@endsection
