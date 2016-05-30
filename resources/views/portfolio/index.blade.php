@extends('layouts.app')

@section('header')
	<link href="{{ url('assets/plugins/scrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ url('assets/plugins/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ url('assets/plugins/cubeportfolio/css/cubeportfolio.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('page-header')
    @include('partials.ark.header')
@endsection

@section('page-footer')
    @include('partials.ark.footer')
@endsection

@section('page-class','index-portfolio')

@section('content')
	<!--========== BREADCRUMBS V5 ==========-->
	<section class="breadcrumbs-v5 bg-position-center-center breadcrumbs-v5-bg-img-v4">
	    <div class="container">
	        <h2 class="breadcrumbs-v5-title">My Portfolio</h2>
	        <span class="breadcrumbs-v5-subtitle">Here are some of the projects I have worked on.</span>
	    </div>
	</section>
	<!--========== END BREADCRUMBS V5 ==========-->
	<div class="bg-color-sky-light">
        <!-- Theme Portfolio -->
        <div class="content-sm container">
            <div class="theme-portfolio">
                <!-- Portfolio 2 Columns Grid Filter -->
                <div id="portfolio-2-col-grid-filter" class="cbp-l-filters-alignCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All <div class="cbp-filter-counter">6</div>
                    </div>
                    <div data-filter=".idea" class="cbp-filter-item">
                        Idea <div class="cbp-filter-counter">4</div>
                    </div>
                    <div data-filter=".web-design" class="cbp-filter-item">
                        Web Design <div class="cbp-filter-counter">4</div>
                    </div>
                    <div data-filter=".graphic" class="cbp-filter-item">
                        Graphic <div class="cbp-filter-counter">4</div>
                    </div>
                </div>
                <!-- End Portfolio 2 Columns Grid Filter -->

                <!-- Portfolio 2 Columns Grid -->
                <div id="portfolio-2-col-grid" class="cbp cbp-caption-active cbp-caption- cbp-ready" style="height: 1437px;"><div class="cbp-wrapper-outer"><div class="cbp-wrapper">
                    <!-- Cbp Item -->
                    <div class="cbp-item idea web-design theme-portfolio-item-v2" style="width: 555px; left: 0px; top: 0px;"><div class="cbp-item-wrapper">
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
                    </div></div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item idea web-design theme-portfolio-item-v2" style="width: 555px; left: 585px; top: 0px;"><div class="cbp-item-wrapper">
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
                    </div></div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item graphic web-design theme-portfolio-item-v2" style="width: 555px; left: 0px; top: 489px;"><div class="cbp-item-wrapper">
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
                    </div></div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item idea graphic theme-portfolio-item-v2" style="width: 555px; left: 585px; top: 489px;"><div class="cbp-item-wrapper">
                        <div class="cbp-caption">
                            <div class="cbp-caption-defaultWrap theme-portfolio-active-wrap">
                                <img src="assets/img/970x647/08.jpg" alt="">
                                <div class="theme-icons-wrap theme-portfolio-lightbox">
                                    <a class="cbp-lightbox" href="assets/img/970x647/08.jpg" data-title="Portfolio">
                                        <i class="theme-icons theme-icons-white-bg theme-icons-md radius-3 icon-focus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="theme-portfolio-title-heading">
                            <h4 class="theme-portfolio-title"><a href="portfolio_single_item.html">Ark Projects</a></h4>
                            <span class="theme-portfolio-subtitle">Lorem impsum dolor</span>
                        </div>
                    </div></div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item graphic web-design theme-portfolio-item-v2" style="width: 555px; left: 0px; top: 978px;"><div class="cbp-item-wrapper">
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
                    </div></div>
                    <!-- End Cbp Item -->
                    
                    <!-- Cbp Item -->
                    <div class="cbp-item idea graphic theme-portfolio-item-v2" style="width: 555px; left: 585px; top: 978px;"><div class="cbp-item-wrapper">
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
                    </div></div>
                    <!-- End Cbp Item -->
                </div></div></div>
                <!-- End Portfolio 2 Columns Grid --> 
            </div>
        </div>
        <!-- End Theme Portfolio -->

        <!-- Paginations v3 -->
        <div class="container">
            <div class="paginations-v3 text-center margin-b-60">
                <ul class="paginations-v3-list">
                    <li class="previous">
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="next">
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Paginations v3 -->
    </div>
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ url('assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

	<script type="text/javascript" src="{{ url('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/scripts/components/header-sticky.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/scripts/portfolio/portfolio-2-col-grid.js')}}"></script>

@endsection