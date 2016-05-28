@extends('layouts.app')

@section('page-header')
    @include('partials.ark.header')
@endsection

@section('page-footer')
    @include('partials.ark.footer')
@endsection

@section('content')
    <!--========== PROMO BLOCK V2 ==========-->
    <div class="promo-block-v2 fullheight text-center">
        <div class="container vertical-center-aligned">
            <h1 class="promo-block-v2-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">Hi I'm Warren and I'm a Software Developer.</h1>
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
                <h2 class="heading-v1-title">Recent Posts</h2>
                <p class="heading-v1-text">Most recent post published.</p>
            </div>
            <!-- End Heading v1 -->
            <!-- Masonry Grid -->
            <div class="masonry-grid margin-b-40">
                @foreach($posts as $post)
                    <div class="masonry-grid-item col-3" style="position: absolute; left: 0%; top: 0px;">
                        <!-- Blog Grid -->
                       <article class="blog-grid margin-b-50">
                            @if($post->type->slug=='image')
                                <img class="img-responsive" src="assets/img/970x647/01.jpg" alt="">
                            @endif
                            <div class="blog-grid-box-shadow">
                                <div class="blog-grid-content">
                                    <h2 class="blog-grid-title-el"><a class="blog-grid-title-link" href="{{ url("posts/$post->id") }}">{{ $post->title }}</a></h2>
                                    <p class="margin-b-20">{!! $post->excerpt($post->type->slug=='standard' ? 100: 40) !!}</p>
                                </div>
                                <div class="blog-grid-supplemental">
                                    <span class="blog-grid-supplemental-title">
                                        <a class="blog-grid-supplemental-category" href="#">Opinion</a>
                                        - {{ $post->publish_on->toDateString() }}
                                    </span>
                                </div>
                            </div>
                        </article>
                        <!-- End Blog Grid -->
                    </div>
                @endforeach
                
            </div>
            <!-- End Masonry Grid -->

            <!-- Button -->
            <div class="center-block">
                <a class="btn-white-bg btn-base-md radius-3" href="{{ url('posts') }}">View More</a>
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