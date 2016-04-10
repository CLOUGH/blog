@extends('layouts.app')

@section('page-header')
    @include('partials.ark.header')
@endsection

@section('page-footer')
    @include('partials.ark.footer')
@endsection

@section('header')
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
     
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">    
     
    <!-- RS5.0 Core JS Files -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
@endsection

@section('content')
    <!--========== PROMO BLOCK V2 ==========-->
    <div class="promo-block-v2 fullheight text-center">
        <div class="container vertical-center-aligned">
            <h1 class="promo-block-v2-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">Hi I'm Warren. I'm Software Developer.</h1>
            <p class="promo-block-v2-text margin-b-50 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                This is my website and here you will be able to find out more about me and projects I'm currently working on.
            </p>
            <div class="wow fadeInUp margin-b-40" data-wow-duration="1.5s" data-wow-delay="1s">
                <a  href="{{ url('about') }}" type="button" class="btn-white-bg btn-base-md radius-3">About Me</a>
            </div>
            <div class="scroll-to-section-v1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1.5s">
                <a href="#scroll_to_content">
                    <i class="scroll-to-section-click-icon fa fa-angle-double-down"></i>
                </a>
            </div>
        </div>
    </div>
    <!--========== END PROMO BLOCK V2 ==========-->

    
    <!--========== PAGE CONTENT ==========-->
    <!-- Website Purpose -->
    <div id="scroll_to_content" class="content-md container-sm border-bottom-1">
        <div class="row">
            <div class="col-sm-8 sm-margin-b-50">
                <!-- Heading v1 -->
                <div class="heading-v1 margin-b-30">
                    <h2 class="heading-v1-title">Welcome to my website</h2>
                </div>
                <!-- End Heading v1 -->
                <div class="margin-b-30">
                    <p>Hi I'm Warren Clough and I would like to thank you for taking the time to visit my website. Here I  will share information about myself, projects I'm currently working on and have discussions on topics I may find interesting.</p>
                    <p>If  you are not able to find more what you are looking for here feel free to get in touch with me or leave a feedback.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <img class="img-responsive" src="{{ url('/images/IMG_20160308_114113.jpg') }}" alt="">
            </div>
        </div>
        <!--// end row -->
    </div>
    <!-- End Website Purpose -->
    <!-- Extra Small Progress Bar -->
    <div class="bg-color-sky-light">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 margin-b-30">
                <h2 class="heading-v1-title">My Strengths</h2>
            </div>
            <!-- End Heading v1 -->
            <!-- Extra Small Pogress Bar -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Progress Box -->
                    <div class="progress-box">
                        <h4 class="progress-title">HTML/CSS <span class="pull-right">80%</span></h4>
                        <div class="progress radius-0 progress-xs">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="97"></div>
                        </div>
                    </div>
                    <!-- End Progress Box -->

                    <!-- Progress Box -->
                    <div class="progress-box">
                        <h4 class="progress-title">PHP <span class="pull-right">70%</span></h4>
                        <div class="progress radius-0 progress-xs">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="83"></div>
                        </div>
                    </div>
                    <!-- End Progress Box -->    
                    <!-- Progress Box -->
                    <div class="progress-box">
                        <h4 class="progress-title">Javascript <span class="pull-right">70%</span></h4>
                        <div class="progress radius-0 progress-xs">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="83"></div>
                        </div>
                    </div>
                    <!-- End Progress Box -->                
                </div>

                <div class="col-md-6">
                    <!-- Progress Box -->
                    <div class="progress-box">
                        <h4 class="progress-title">Laravel <span class="pull-right">70%</span></h4>
                        <div class="progress radius-0 progress-xs">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="76"></div>
                        </div>
                    </div>
                    <!-- End Progress Box -->
                    <!-- Progress Box -->
                    <div class="progress-box">
                        <h4 class="progress-title">AngularJS <span class="pull-right">90%</span></h4>
                        <div class="progress radius-0 progress-xs">
                            <div class="progress-bar bg-color-base" role="progressbar" data-width="88"></div>
                        </div>
                    </div>
                    <!-- End Progress Box -->
                </div>
            </div>
            <!--// end row -->
            <!-- End Extra Small Pogress Bar -->
        </div>
        <!-- End Extra Small Progress Bar -->
    </div>
    <!-- Work v1 -->
    <div class="">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-80">
                <h2 class="heading-v1-title">Projects</h2>
                <p class="heading-v1-text">Here is a list of my more recent projects.</p>
            </div>
            <!-- End Heading v1 -->

            <div class="row margin-b-30">
                <div class="col-md-4 md-margin-b-30">
                    <!-- Work v1 -->
                    <div class="work-v1">
                        <a class="work-v1-img-gradient" href="#">
                            <img class="img-responsive" src="assets/img/970x1100/02.jpg" alt="">
                            <span class="work-v1-view btn-white-brd btn-base-sm radius-3">View More</span>
                        </a>
                        <div class="work-v1-wrap">
                            <div class="work-v1-content">
                                <h2 class="work-v1-title"><a href="#">HRMNext Recruitment</a></h2>
                                <ul class="list-inline work-v1-list">
                                    <li class="work-v1-category"><a class="work-v1-category-link" href="#">Web Application</a></li>
                                    <li class="work-v1-date">Current</li>
                                </ul>
                                <div class="work-v1-collapse">
                                    <p>HR Recruitment Software for Epic Technologies built with AngularJS and Laravel.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work v1 -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Work v1 -->
    

    

    <!-- News v1 -->
    <div class="bg-color-sky-light">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-80">
                <h2 class="heading-v1-title">Be Aware of News</h2>
                <p class="heading-v1-text">Let's share the latest posts and best articles</p>
            </div>
            <!-- End Heading v1 -->

            <!-- Masonry Grid -->
            <div class="masonry-grid margin-b-40">
                <div class="masonry-grid-item col-3">
                    <!-- News v1 -->
                    <article class="news-v1">
                        <div class="news-v1-heading">
                            <a class="news-v1-heading-tag" href="#">Lifestyle</a>
                            <span class="news-v1-element"><i class="news-v1-element-icon fa fa-circle"></i></span>
                            <h3 class="news-v1-heading-title"><a href="#">Office Time</a></h3>
                        </div>
                        <a class="image-popup-vertical-fit" href="assets/img/970x647/26.jpg" title="Slider Image">
                            <img class="img-responsive" src="assets/img/970x647/26.jpg" alt="">
                        </a>
                        <div class="news-v1-content">
                            <ul class="list-inline news-v1-lists">
                                <li class="news-v1-lists-item">23 Octover 2016</li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">David Martin</a></li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">7 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                    <!-- End News v1 -->
                </div>
                <div class="masonry-grid-item col-3">
                    <!-- News v1 -->
                    <article class="news-v1">
                        <div class="news-v1-heading">
                            <a class="news-v1-heading-tag" href="#">Fashion</a>
                            <span class="news-v1-element"><i class="news-v1-element-icon fa fa-circle"></i></span>
                            <h3 class="news-v1-heading-title"><a href="#">Fashion Magazine</a></h3>
                        </div>
                        <!-- ".carousel-fade" class is added with animation stylesheet to spice up Bootstrap Carousel with CSS3 Animation -->
                        <div id="blog-grid-2-col" class="carousel slide carousel-fade" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <a class="image-popup-vertical-fit" href="assets/img/970x970/02.jpg" title="Slider Image">
                                        <img class="img-responsive" src="assets/img/970x970/02.jpg" alt="">
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="image-popup-vertical-fit" href="assets/img/970x970/03.jpg" title="Slider Image">
                                        <img class="img-responsive" src="assets/img/970x970/03.jpg" alt="">
                                    </a>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control theme-carousel-control-v1" href="#blog-grid-2-col" role="button" data-slide="prev">
                                <span class="carousel-control-arrows-v1 radius-3 fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control theme-carousel-control-v1" href="#blog-grid-2-col" role="button" data-slide="next">
                                <span class="carousel-control-arrows-v1 radius-3 fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="news-v1-content">
                            <ul class="list-inline news-v1-lists">
                                <li class="news-v1-lists-item">23 Octover 2016</li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">David Martin</a></li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">7 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                    <!-- End News v1 -->
                </div>
                <div class="masonry-grid-item col-3">
                    <!-- News v1 -->
                    <article class="news-v1">
                        <div class="news-v1-heading">
                            <a class="news-v1-heading-tag" href="#">Business</a>
                            <span class="news-v1-element"><i class="news-v1-element-icon fa fa-circle"></i></span>
                            <h3 class="news-v1-heading-title"><a href="#">About Me</a></h3>
                        </div>
                        <a class="image-popup-vertical-fit" href="assets/img/970x647/27.jpg" title="Image">
                            <img class="img-responsive" src="assets/img/970x647/27.jpg" alt="">
                        </a>
                        <div class="news-v1-content">
                            <p class="news-v1-quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </article>
                    <!-- End News v1 -->
                </div>
                <div class="masonry-grid-item col-3">
                    <!-- News v1 -->
                    <article class="news-v1">
                        <div class="news-v1-img-gradient">
                            <a class="image-popup-vertical-fit" href="assets/img/970x647/28.jpg" title="Image">
                                <img class="img-responsive" src="assets/img/970x647/28.jpg" alt="">
                            </a>
                            <div class="news-v1-img-content">
                                <h3 class="news-v1-img-title">Ark is the most amazing premium template with powerful customization settings.</h3>
                            </div>
                        </div>
                        <div class="news-v1-content">
                            <ul class="list-inline news-v1-lists">
                                <li class="news-v1-lists-item">23 Octover 2016</li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">David Martin</a></li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">7 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                    <!-- End News v1 -->
                </div>
                <div class="masonry-grid-item col-3">
                    <!-- News v1 -->
                    <article class="news-v1">
                        <div class="news-v1-heading">
                            <a class="news-v1-heading-tag" href="#">Web Design</a>
                            <span class="news-v1-element"><i class="news-v1-element-icon fa fa-circle"></i></span>
                            <h3 class="news-v1-heading-title"><a href="#">Mockup</a></h3>
                        </div>
                        <div class="news-v1-border-lr">
                            <div class="row space-row-5 popup-gallery padding-20">
                                <div class="col-xs-6 margin-b-10">
                                    <a class="popup-gallery-child" href="assets/img/970x647/01.jpg" title="Slider Image">
                                        <img class="img-responsive" src="assets/img/500x500/09.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-6 margin-b-10">
                                    <a class="popup-gallery-child" href="assets/img/970x647/04.jpg" title="Slider Image">
                                        <img class="img-responsive" src="assets/img/500x500/10.jpg" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-12">
                                    <a class="popup-gallery-child" href="assets/img/970x647/06.jpg" title="Slider Image">
                                        <img class="img-responsive" src="assets/img/760x235/01.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="news-v1-content">
                            <ul class="list-inline news-v1-lists">
                                <li class="news-v1-lists-item">23 Octover 2016</li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">David Martin</a></li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">7 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                    <!-- End News v1 -->
                </div>
                <div class="masonry-grid-item col-3">
                    <!-- News v1 -->
                    <article class="news-v1">
                        <div class="news-v1-heading">
                            <a class="news-v1-heading-tag" href="#">Corporate</a>
                            <span class="news-v1-element"><i class="news-v1-element-icon fa fa-circle"></i></span>
                            <h3 class="news-v1-heading-title"><a href="#">Your Beautiful workspace</a></h3>
                        </div>
                        <a class="image-popup-vertical-fit" href="assets/img/970x647/29.jpg" title="Image">
                            <img class="img-responsive" src="assets/img/970x647/29.jpg" alt="">
                        </a>
                        <div class="news-v1-content">
                            <ul class="list-inline news-v1-lists">
                                <li class="news-v1-lists-item">23 Octover 2016</li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">David Martin</a></li>
                                <li class="news-v1-lists-item"><a class="news-v1-lists-link" href="#">7 Comments</a></li>
                            </ul>
                        </div>
                    </article>
                    <!-- End News v1 -->
                </div>
                <div class="masonry-grid-item col-3">
                    <!-- News v1 -->
                    <article class="news-v1">
                        <div class="news-v1-content">
                            <h4 class="news-v1-quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
                        </div>
                    </article>
                    <!-- End News v1 -->
                </div>
            </div>
            <!-- End Masonry Grid -->

            <!-- Button -->
            <div class="center-block">
                <a class="btn-white-bg btn-base-md radius-3" href="shortcodes_news.html">View More</a>
            </div>
            <!-- Button -->
        </div>
    </div>
    <!-- End News v1 -->
    <!--========== END PAGE CONTENT ==========-->
@endsection

@section('scripts')
    <script type="text/javascript" src="assets/plugins/jquery.masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery.imagesloaded.pkgd.min.js"></script>


    <script type="text/javascript" src="assets/scripts/components/header-sticky.js"></script>
    <script type="text/javascript" src="assets/scripts/components/masonry.js"></script>
@endsection