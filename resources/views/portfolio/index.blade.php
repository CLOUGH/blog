@extends('layouts.app')
<!-- Page class -->
@section('page-class','index-portfolio')

<!-- Header -->
@section('header')
    <!-- BEGIN THEME PLUGINS STYLE -->
    <script type="text/javascript" src="{{ url('assets/scripts/components/header-sticky.js') }}"></script>
    <!-- END THEME PLUGINS STYLE -->
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
    <script type="text/javascript" src="{{ url('assets/scripts/portfolio/portfolio-2-col-grid.js') }}"></script>
@endsection

<!-- Content -->
@section('content')
    <!--========== BREADCRUMBS V5 ==========-->
    <section class="breadcrumbs-v5 bg-position-fixed breadcrumbs-v5-bg-img-v4">
        <div class="container">
            <h2 class="breadcrumbs-v5-title">My Portfolio</h2>
            <span class="breadcrumbs-v5-subtitle">Here are some of the projects I have worked on.</span>
        </div>
    </section>
    <!--========== END BREADCRUMBS V5 ==========-->

    <!--========== PAGE CONTENT ==========-->
    <div class="bg-color-sky-light">
        <!-- Theme Portfolio -->
        <div class="content-sm container">
            <div class="theme-portfolio">
                <!-- Portfolio 4 Columns Grid Filter -->
                <div id="portfolio-2-col-grid-filter" class="cbp-l-filters-alignCenter">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                        All <div class="cbp-filter-counter"></div>
                    </div>
                </div>
                <!-- End Portfolio 4 Columns Grid Filter -->
                <!-- Portfolio 4 Columns Grid -->
                <div id="portfolio-2-col-grid" class="cbp">
                    @foreach($portfolios as $portfolio)
                            <!-- Cbp Item -->
                            <div class="cbp-item idea web-design theme-portfolio-item-v2 theme-portfolio-item-xs">
                               
                                <div class="cbp-caption">
                                    <div class="cbp-caption-defaultWrap theme-portfolio-active-wrap">
                                        <img src="{{ url($portfolio->images[0]->url.'?size=970x647&fit=true') }}" alt="">
                                        <div class="theme-icons-wrap theme-portfolio-lightbox">                                            
                                            <a class="cbp-lightbox" href="{{ url($portfolio->images[0]->url.'?size=970x647&fit=true') }}" data-title="Portfolio">
                                                <i class="theme-icons theme-icons-white-bg theme-icons-sm radius-3 icon-focus"></i>
                                            </a>    
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-portfolio-title-heading">
                                    <h4 class="theme-portfolio-title"><a href="portfolio_single_item.html">{{ $portfolio->name }}</a></h4>
                                    <span class="theme-portfolio-subtitle">Lorem impsum dolor</span>
                                </div>
                            </div>
                            <!-- End Cbp Item -->
                    @endforeach
                </div>
                <!-- End Portfolio 4 Columns Grid -->
            </div>
            <div class="conntainer">
               {!! $portfolios->render(new App\Http\Presenters\ArkV3Presenter($portfolios) ) !!} 
            </div>
        </div>  
    </div>
    <!--========== END PAGE CONTENT ==========-->
@endsection