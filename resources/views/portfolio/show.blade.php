@extends('layouts.app')
<!-- Page class -->
@section('page-class','index-portfolio')

<!-- Header -->
@section('header')
    <script type="text/javascript" src="{{ url('assets/scripts/components/header-sticky.js') }}"></script>
@endsection

<!-- Page Header -->
@section('page-header')
    @include('partials.ark.header')
@endsection

<!-- Footer -->
@section('page-footer')
    @include('partials.ark.footer')
@endsection

<!-- Javascript scripts -->
@section('scripts')
    <script type="text/javascript" src="{{ url('assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/scripts/portfolio/portfolio-4-col-grid.js') }}"></script>
@endsection

<!-- Content -->
@section('content')
     <!--========== SIDEBAR ==========-->
    <div class="sidebar-nav scrollbar">
        <a class="sidebar-trigger sidebar-nav-trigger" href="javascript:void(0);">
            <span class="sidebar-trigger-icon"></span>
        </a>
        <div class="sidebar-nav-content">
            <h3 class="sidebar-nav-title">Get In Touch</h3>
            <p class="sidebar-nav-about-text"><span class="fweight-400">Address:</span> 795 Folsom Ave, Suite 600, San Francisco, CA 94107</p>
            <p class="sidebar-nav-about-text"><span class="fweight-400">Phone:</span> +123 456 7890</p>
            <p class="sidebar-nav-about-text margin-b-40"><span class="fweight-400">Email:</span> <a class="sidebar-nav-about-link" href="#">prothemes.net@gmail.com</a></p>
            <input type="text" class="form-control sidebar-nav-comment-input margin-b-10 radius-3" placeholder="Your Name">
            <input type="email" class="form-control sidebar-nav-comment-input margin-b-10 radius-3" placeholder="Your e-Mail">
            <textarea class="form-control sidebar-nav-comment-input margin-b-30 radius-3" rows="3" placeholder="Your message"></textarea>
            <button type="button" class="btn-white-brd btn-base-sm radius-3">Submit</button>
        </div>
    </div>
    <!--========== END SIDEBAR ==========-->

    <!--========== PAGE CONTENT ==========-->
    <!-- Theme Portfolio Description -->
    <div class="theme-portfolio-desc margin-b-80">
        <!-- Portfolio Item Slider -->
        <div id="portfolio-item-slider" class="carousel slide carousel-fade margin-b-80" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
            	@foreach ($portfolio->images as $index => $image)
            		{{-- expr --}}
	                <div class="item {{ $index ==0 ? 'active' : '' }}">
	                    <div class="portfolio-item-img-wrap">
	                        <img class="img-responsive" src="{{ $image->url.'?size=1920x1080&fit=true' }}" alt="">
	                        <div class="portfolio-item-content-wrap">
	                            <div class="portfolio-item-heading">
	                                <h2 class="portfolio-item-heading-title">{{ $portfolio->name }}</h2>
	                            </div>
	                        </div>
	                    </div>
	                </div>
            	@endforeach
            </div>
            <!-- End Wrapper for slides -->

            <!-- Controls -->
            <a class="left carousel-control theme-carousel-control-v1 radius-3" href="#portfolio-item-slider" role="button" data-slide="prev">
                <span class="carousel-control-arrows-v1 radius-3 fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control theme-carousel-control-v1 radius-3" href="#portfolio-item-slider" role="button" data-slide="next">
                <span class="carousel-control-arrows-v1 radius-3 fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- End Controls -->
        </div>
        <!-- End Portfolio Item Slider -->

        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-sm-push-3 sm-margin-b-50">
                    {!! $portfolio->description !!}
                </div>

                <div class="col-sm-3 col-sm-pull-9">
                    <!-- Subitem -->
                    <h3 class="portfolio-item-subitem-title">Published</h3>
                    <p class="portfolio-item-subitem-paragraph">10 August, 2016</p>
                    <hr>
                    <h3 class="portfolio-item-subitem-title">Categories</h3>
                    <a class="portfolio-item-category" href="#">Web Design</a>
                    <hr>
                    <h3 class="portfolio-item-subitem-title">Tags</h3>
                    <ul class="list-unstyled tags-v2 margin-b-20">
                        <li><a href="#">Idea</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Graphic</a></li>
                    </ul>
                    <!-- End Subitem -->
                    
                    <hr>

                    <h3 class="portfolio-item-subitem-title">Share</h3>
                    
                    <!-- Theme Icons Base On Hover -->
                    <ul class="list-inline">
                        <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-facebook"></i></a></li>
                        <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-twitter"></i></a></li>
                        <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-pinterest-p"></i></a></li>
                        <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-dribbble"></i></a></li>
                        <li class="theme-icons-wrap"><a href="#"><i class="theme-icons theme-icons-base-hover theme-icons-xs radius-circle fa fa-instagram"></i></a></li>
                    </ul>
                    <!-- End Theme Icons Base On Hover -->
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Theme Portfolio Description -->

    <!-- You Might Also Like -->
    <div class="bg-color-sky-light">
        <div class="content-md container">
            <!-- Heading v1 -->
            <div class="heading-v1 text-center margin-b-60">
                <h2 class="heading-v1-title">You might also like</h2>
            </div>
            <!-- End Heading v1 -->

            <!-- Theme Portfolio -->
            <div class="theme-portfolio">
                <!-- Portfolio 4 Columns Grid -->
                <div id="portfolio-4-col-grid" class="cbp">
                    <!-- Cbp Item -->
                    <div class="cbp-item idea web-design theme-portfolio-item-v2">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap theme-portfolio-active-wrap">
                                <img src="assets/img/970x647/01.jpg" alt="">
                                <div class="theme-icons-wrap theme-portfolio-lightbox">
                                    <a class="cbp-lightbox" href="assets/img/970x647/01.jpg" data-title="Portfolio">
                                        <i class="theme-icons theme-icons-white-bg theme-icons-sm radius-3 icon-focus"></i>
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
                                        <i class="theme-icons theme-icons-white-bg theme-icons-sm radius-3 icon-focus"></i>
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
                                        <i class="theme-icons theme-icons-white-bg theme-icons-sm radius-3 icon-focus"></i>
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
                                <img src="assets/img/970x647/15.jpg" alt="">
                                <div class="theme-icons-wrap theme-portfolio-lightbox">
                                    <a class="cbp-lightbox" href="assets/img/970x647/15.jpg" data-title="Portfolio">
                                        <i class="theme-icons theme-icons-white-bg theme-icons-sm radius-3 icon-focus"></i>
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
                <!-- End Portfolio 4 Columns Grid -->
            </div>
            <!-- End Theme Portfolio -->
        </div>
    </div>
    <!-- End You Might Also Like -->
    <!--========== END PAGE CONTENT ==========-->
@endsection