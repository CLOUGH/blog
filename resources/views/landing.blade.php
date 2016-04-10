@extends('layouts.app')

@section('page-title','Home')
@section('body-class','bg-color-light')

@section('promo-block')
<!--========== REVOLUTION SLIDER ==========-->
<div class="rev_slider_wrapper fullwidthbanner-container" style="margin: 0 auto; background-color: #f7f8fa; padding: 0; color: #fff; margin-top: 0; margin-bottom: 0;">
    <div id="rev-slider1" class="rev_slider fullwidthabanner" style="display: none;">
        <ul>
            <!-- Slide -->
            <li data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Join Us">
                <!-- Main Image -->
                <img src="{{ url('/images/rsz_photo-1414509613498-f53000d3rd2c1.jpg') }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- Layers -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-140','-140','-140','-90']"
                    data-fontsize="['40','40','40','30']"
                    data-lineheight="['55','55','55','45']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="500"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">
                    Welcome to
                </div>
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','-0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-15']"
                    data-fontsize="['110','110','110','55']"
                    data-lineheight="['130','130','130','75']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:0px;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">
                    My Website
                </div>
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['80','80','80','60']"
                    data-fontsize="['30','30','30','20']"
                    data-lineheight="['40','40','40','30']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; font-style: italic; white-space: nowrap;">
                    Here you will be able to find out more about me and projects im working on
                </div>
                <div class="tp-caption"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['200','220','220','200']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="2000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-responsive="off"
                    style="z-index: 9; white-space: nowrap;">
                    <button type="button" class="btn-white-bg btn-base-md radius-3">Read More</button>
                </div>
            </li>
            <!-- End Slide -->
            <!-- Slide -->
            <li data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="Creative People">
                <!-- Main Image -->
                <img src="{{ url('/images/rsz_1photo-1454165804606-c3d57bc86b40.jpg') }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- Layers -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-140','-140','-140','-90']"
                    data-fontsize="['40','40','40','30']"
                    data-lineheight="['55','55','55','45']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="500"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">
                    I am a
                </div>
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','-0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-15']"
                    data-fontsize="['110','110','110','55']"
                    data-lineheight="['130','130','130','75']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:0px;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">
                    Software Developer
                </div>
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['80','80','80','60']"
                    data-fontsize="['30','30','30','20']"
                    data-lineheight="['40','40','40','30']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; font-style: italic; white-space: nowrap;">
                    Software development is not just a career path but a passion
                </div>
                <div class="tp-caption"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['200','220','220','200']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="2000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-responsive="off"
                    style="z-index: 9; white-space: nowrap;">
                    <button type="button" class="btn-white-bg btn-base-md radius-3">About Me</button>
                </div>
            </li>
            <!-- End Slide -->

            <!-- Slide -->
            <li data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0" data-saveperformance="off" data-title="First Priority">
                <!-- Main Image -->
                <img src="{{ url("/images/rsz_photo-1414509613498-f53000d3d2c1.jpg") }}" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500" data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- Layers -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-140','-140','-140','-90']"
                    data-fontsize="['40','40','40','30']"
                    data-lineheight="['55','55','55','45']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="500"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">
                    Our clients are our
                </div>
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-15']"
                    data-fontsize="['110','110','110','55']"
                    data-lineheight="['130','130','130','75']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                    data-mask_in="x:0px;y:0px;"
                    data-mask_out="x:inherit;y:inherit;"
                    data-start="1000"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; white-space: nowrap;">
                    First Priority
                </div>
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['-275,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['80','80','80','90']"
                    data-fontsize="['30','30','30','20']"
                    data-lineheight="['40','40','40','30']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; font-style: italic; white-space: nowrap;">
                    Create a new website for your Business,
                </div>
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 color-white"
                    data-x="['center','center','center','center']" data-hoffset="['275,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['80','120','120','60']"
                    data-fontsize="['30','30','30','20']"
                    data-lineheight="['40','40','40','30']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-basealign="slide"
                    data-responsive_offset="on"
                    style="z-index: 6; font-style: italic; white-space: nowrap;">
                    Portfolio, Agency, E-Commerce &amp; much more!
                </div>
                <div class="tp-caption"
                    data-x="['center','center','center','center']" data-hoffset="['0,'0','0','0']"
                    data-y="['middle','middle','middle','middle']" data-voffset="['200','220','220','200']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;"
                    data-transform_out="y:50px;opacity:0;s:1000;s:1000;"
                    data-start="2000"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-responsive="off"
                    style="z-index: 9; white-space: nowrap;">
                    <button type="button" class="btn-white-bg btn-base-md radius-3">Read More</button>
                </div>
            </li>
            <!-- End Slide -->
        </ul>
        <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
    </div>
</div>
<!--========== END REVOLUTION SLIDER ==========-->

@endsection
@section('content')
<!--========== PAGE CONTENT ==========-->
    <!-- Biography -->
    <div class="content-md container">
        <!-- Heading v1 -->
        <div class="heading-v1 text-center margin-b-80">
            <h2 class="heading-v1-title">Think basics, think Ark. Designing like a pro, <br/> Ark ups the style with its simple basics</h2>
        </div>
        <!-- End Heading v1 -->

        <div class="row">
            <div class="col-sm-6 sm-margin-b-30">
                <p class="line-height-2">Hi my name is Warren Clough and I would like to welcome you to my website. I am a and software engineer/developer living  Jamaica with bachelors in Computer Science from University of the West Indies. My current focus is  in web development; Laravel and angular development. My skill set is not however limited to this aspect of software development as I have explored areas such as game development/ graphics programming  and desktop applications development. Being Software development is not just a career as it is a hobby that I have been passionate about the while growing up. The purpose of this website is to act as a portal to share information about myself, projects I'm working on,  solutions to problems I've experienced or to share my opinions on topics that may be interesting to the community. </p>
            </div>
            <div class="col-sm-6">
                <p class="line-height-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Biography -->
    <!-- Counters v3 -->
    <div class="bg-color-sky-light">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-80">
                <h2 class="heading-v1-title">My Achievements</h2>
                <p class="heading-v1-text">If there's a template that never goes out of style, it is Ark</p>
            </div>
            <!-- End Heading v1 -->
            
            <div class="row">
                <div class="col-md-3 col-sm-6 md-margin-b-30">
                    <!-- Counters v3 -->
                    <div class="counters-v3">
                        <i class="counters-v3-icon radius-circle icon-lightbulb"></i>
                        <figure class="counter counters-v3-number">85</figure>
                        <h4 class="counters-v3-title">Design Completed</h4>
                    </div>
                    <!-- End Counters v3 -->
                </div>
                <div class="col-md-3 col-sm-6 md-margin-b-30">
                    <!-- Counters v3 -->
                    <div class="counters-v3">
                        <i class="counters-v3-icon radius-circle icon-trophy"></i>
                        <figure class="counter counters-v3-number">23</figure>
                        <h4 class="counters-v3-title">Awards Received</h4>
                    </div>
                    <!-- End Counters v3 -->
                </div>
                <div class="col-md-3 col-sm-6 md-margin-b-30">
                    <!-- Counters v3 -->
                    <div class="counters-v3">
                        <i class="counters-v3-icon radius-circle icon-happy"></i>
                        <figure class="counter counters-v3-number">2396</figure>
                        <h4 class="counters-v3-title">Happy Clients</h4>
                    </div>
                    <!-- End Counters v3 -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- Counters v3 -->
                    <div class="counters-v3">
                        <i class="counters-v3-icon radius-circle icon-speedometer"></i>
                        <figure class="counter counters-v3-number">100</figure>
                        <h4 class="counters-v3-title">Times Faster</h4>
                    </div>
                    <!-- End Counters v3 -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Counters v3 -->
    <!-- Extra Small Progress Bar -->
    <div class="content-md container">
        <!-- Extra Small Pogress Bar -->
        <div class="row">
            <div class="col-md-6">
                <!-- Progress Box -->
                <div class="progress-box">
                    <h4 class="progress-title">PHP <span class="pull-right">83%</span></h4>
                    <div class="progress radius-0 progress-xs">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="83"></div>
                    </div>
                </div>
                <!-- End Progress Box -->

                <!-- Progress Box -->
                <div class="progress-box">
                    <h4 class="progress-title">WordPress <span class="pull-right">76%</span></h4>
                    <div class="progress radius-0 progress-xs">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="76"></div>
                    </div>
                </div>
                <!-- End Progress Box -->

                <!-- Progress Box -->
                <div class="progress-box">
                    <h4 class="progress-title">HTML/CSS <span class="pull-right">97%</span></h4>
                    <div class="progress radius-0 progress-xs">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="97"></div>
                    </div>
                </div>
                <!-- End Progress Box -->
            </div>

            <div class="col-md-6">
                <!-- Progress Box -->
                <div class="progress-box">
                    <h4 class="progress-title">Web Design <span class="pull-right">88%</span></h4>
                    <div class="progress radius-0 progress-xs">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="88"></div>
                    </div>
                </div>
                <!-- End Progress Box -->

                <!-- Progress Box -->
                <div class="progress-box">
                    <h4 class="progress-title">Graphic Design <span class="pull-right">76%</span></h4>
                    <div class="progress radius-0 progress-xs">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="76"></div>
                    </div>
                </div>
                <!-- End Progress Box -->

                <!-- Progress Box -->
                <div class="progress-box">
                    <h4 class="progress-title">Illustration <span class="pull-right">97%</span></h4>
                    <div class="progress radius-0 progress-xs">
                        <div class="progress-bar bg-color-base" role="progressbar" data-width="97"></div>
                    </div>
                </div>
                <!-- End Progress Box -->
            </div>
        </div>
        <!--// end row -->
        <!-- End Extra Small Pogress Bar -->
    </div>
    <!-- End Extra Small Progress Bar -->

    <!-- Theme Portfolio -->
    <div class="bg-color-sky-light">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-80">
                <h2 class="heading-v1-title">Our Amazing Work</h2>
                <p class="heading-v1-text">We build the real value</p>
            </div>
            <!-- End Heading v1 -->

            <!-- Theme Portfolio -->
            <div class="theme-portfolio">
                <!-- Portfolio 3 Columns Grid Filter -->
                <div id="portfolio-3-col-grid-filter" class="cbp-l-filters-alignCenter margin-b-20">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".idea" class="cbp-filter-item">
                        Idea <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item">
                        Web Design <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item">
                        Graphic <div class="cbp-filter-counter"></div>
                    </div>
                </div>
                <!-- End Portfolio 3 Columns Grid Filter -->

                <!-- Portfolio 3 Columns Grid -->
                <div id="portfolio-3-col-grid" class="cbp">
                    <!-- Cbp Item -->
                    <div class="cbp-item idea web-design theme-portfolio-item-v2">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap theme-portfolio-active-wrap">
                                <img src="assets/img/970x647/01.jpg" alt="">
                                <div class="theme-icons-wrap theme-portfolio-lightbox">
                                    <a class="cbp-lightbox" href="assets/img/970x647/01.jpg" data-title="Portfolio">
                                        <i class="theme-icons theme-icons-white-bg theme-icons-md radius-3 icon-focus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="theme-portfolio-title-heading">
                            <h4 class="theme-portfolio-title"><a href="portfolio_single_item.html">Ark Projects</a></h4>
                            <span class="theme-portfolio-subtitle">Lorem impsum dolor</span>
                        </div>
                    </div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item idea web-design theme-portfolio-item-v2">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap theme-portfolio-active-wrap">
                                <img src="assets/img/970x647/02.jpg" alt="">
                                <div class="theme-icons-wrap theme-portfolio-lightbox">
                                    <a class="cbp-lightbox" href="assets/img/970x647/02.jpg" data-title="Portfolio">
                                        <i class="theme-icons theme-icons-white-bg theme-icons-md radius-3 icon-focus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="theme-portfolio-title-heading">
                            <h4 class="theme-portfolio-title"><a href="portfolio_single_item.html">Ark Projects</a></h4>
                            <span class="theme-portfolio-subtitle">Lorem impsum dolor</span>
                        </div>
                    </div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item graphic web-design theme-portfolio-item-v2">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap theme-portfolio-active-wrap">
                                <img src="assets/img/970x647/03.jpg" alt="">
                                <div class="theme-icons-wrap theme-portfolio-lightbox">
                                    <a class="cbp-lightbox" href="assets/img/970x647/03.jpg" data-title="Portfolio">
                                        <i class="theme-icons theme-icons-white-bg theme-icons-md radius-3 icon-focus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="theme-portfolio-title-heading">
                            <h4 class="theme-portfolio-title"><a href="portfolio_single_item.html">Ark Projects</a></h4>
                            <span class="theme-portfolio-subtitle">Lorem impsum dolor</span>
                        </div>
                    </div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item idea graphic theme-portfolio-item-v2">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap theme-portfolio-active-wrap">
                                <img src="assets/img/970x647/04.jpg" alt="">
                                <div class="theme-icons-wrap theme-portfolio-lightbox">
                                    <a class="cbp-lightbox" href="assets/img/970x647/04.jpg" data-title="Portfolio">
                                        <i class="theme-icons theme-icons-white-bg theme-icons-md radius-3 icon-focus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="theme-portfolio-title-heading">
                            <h4 class="theme-portfolio-title"><a href="portfolio_single_item.html">Ark Projects</a></h4>
                            <span class="theme-portfolio-subtitle">Lorem impsum dolor</span>
                        </div>
                    </div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item idea graphic theme-portfolio-item-v2">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap theme-portfolio-active-wrap">
                                <img src="assets/img/970x647/05.jpg" alt="">
                                <div class="theme-icons-wrap theme-portfolio-lightbox">
                                    <a class="cbp-lightbox" href="assets/img/970x647/05.jpg" data-title="Portfolio">
                                        <i class="theme-icons theme-icons-white-bg theme-icons-md radius-3 icon-focus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="theme-portfolio-title-heading">
                            <h4 class="theme-portfolio-title"><a href="portfolio_single_item.html">Ark Projects</a></h4>
                            <span class="theme-portfolio-subtitle">Lorem impsum dolor</span>
                        </div>
                    </div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item idea graphic theme-portfolio-item-v2">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap theme-portfolio-active-wrap">
                                <img src="assets/img/970x647/06.jpg" alt="">
                                <div class="theme-icons-wrap theme-portfolio-lightbox">
                                    <a class="cbp-lightbox" href="assets/img/970x647/06.jpg" data-title="Portfolio">
                                        <i class="theme-icons theme-icons-white-bg theme-icons-md radius-3 icon-focus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="theme-portfolio-title-heading">
                            <h4 class="theme-portfolio-title"><a href="portfolio_single_item.html">Ark Projects</a></h4>
                            <span class="theme-portfolio-subtitle">Lorem impsum dolor</span>
                        </div>
                    </div>
                    <!-- End Cbp Item -->
                </div>
                <!-- End Portfolio 3 Columns Grid -->
            </div>
            <!-- End Theme Portfolio -->
        </div>
    </div>
    <!-- End Theme Portfolio -->


    <!--========== END PAGE CONTENT ==========-->
@endsection

@section('scripts')
    <script type="text/javascript" src="js/components/progress-bar.js"></script>
    <script type="text/javascript" src="js/portfolio/portfolio-3-col-grid.js"></script>
    <script type="text/javascript" src="js/components/magnific-popup.js"></script>
    <script type="text/javascript" src="js/components/rev-slider.js"></script>
@endsection
