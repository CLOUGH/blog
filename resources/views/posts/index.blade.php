@extends('layouts.app')

@section('header')
	<link href="assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
@endsection

@section('page-header')
    @include('partials.ark.header')
@endsection

@section('page-footer')
    @include('partials.ark.footer')
@endsection

@section('page-class','index-post')

@section('content')
<!--========== BREADCRUMBS V5 ==========-->
<section class="breadcrumbs-v5 bg-position-center-center breadcrumbs-v5-bg-img-v4">
    <div class="container">
        <h2 class="breadcrumbs-v5-title">Blog Posts</h2>
        <span class="breadcrumbs-v5-subtitle">Here are few topics that intrests me and I hope you find them intresting too.</span>
    </div>
</section>
<!--========== END BREADCRUMBS V5 ==========-->

<div class="bg-color-sky-light">
    <div class="content-md container">
        @foreach($posts as $post) 
            @if($post->type->slug=='image')
                <!-- End Blog Grid -->
                <article class="blog-grid margin-b-50">
                    <img class="img-responsive" src="assets/img/1920x1080/07.jpg" alt="">
                    <div class="blog-grid-box-shadow">
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-lg"><a href="blog_single_standard.html">Donec consequat, ligula eget suscipit laoreet</a></h2>
                            <p class="margin-b-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel neque vulputate, vel porta magna molestie. Sed eu egestas ex, a posuere libero. Quisque ac placerat felis. Etiam non neque ac odio consequat interdum vitae eget sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. In et est ut metus lacinia pretium. Donec consequat, ligula eget suscipit laoreet, sem orci molestie tellus, ut pellentesque erat augue non neque.</p>
                        </div>
                        <div class="blog-grid-supplemental">
                            <span class="blog-grid-supplemental-title">
                                <a class="blog-grid-supplemental-category" href="#">Opinion</a>
                                - 12/21/2016
                            </span>
                        </div>
                    </div>
                </article>
                <!-- End Blog Grid -->
            @endif
            
            @if($post->type->slug=='video')
                <!-- Blog Grid (Video) -->
                <article class="blog-grid margin-b-50">
                    <!-- (Video) -->
                    <div class="responsive-video">
                        <iframe src="https://www.youtube.com/embed/_Q-p-zkydLQ?rel=0&amp;controls=0&amp;showinfo=0" style="width: 100%; height: 100%; border: none;" allowfullscreen></iframe>
                    </div>
                    <!-- End (Video) -->

                    <div class="blog-grid-box-shadow">
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-lg"><a href="blog_single_video.html">The best multimedia experience with Galaxy S6 edge+.</a></h2>
                            <p class="margin-b-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel neque vulputate, vel porta magna molestie. Sed eu egestas ex, a posuere libero. Quisque ac placerat felis. Etiam non neque ac odio consequat interdum vitae eget sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. In et est ut metus lacinia pretium. Donec consequat, ligula eget suscipit laoreet, sem orci molestie tellus, ut pellentesque erat augue non neque.</p>
                        </div>
                        <div class="blog-grid-supplemental">
                            <span class="blog-grid-supplemental-title">
                                <a class="blog-grid-supplemental-category" href="#">News</a>
                                - 12/21/2016
                            </span>
                        </div>
                    </div>
                </article>
                <!-- End Blog Grid (Video) -->
            @endif
            
            @if($post->type->slug=='slideshow')
            <!-- Blog Grid (Slider) -->
            <article class="blog-grid margin-b-50">
                <!-- (Slider) -->
                <div id="blog-grid-fullwidth" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="assets/img/1920x1080/20.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="assets/img/1920x1080/21.jpg" alt="">
                        </div>
                    </div>
                    <!-- End Wrapper for slides -->

                    <!-- Controls -->
                    <a class="left carousel-control theme-carousel-control-v1" href="#blog-grid-fullwidth" role="button" data-slide="prev">
                        <span class="carousel-control-arrows-v1 radius-3 fa fa-angle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control theme-carousel-control-v1" href="#blog-grid-fullwidth" role="button" data-slide="next">
                        <span class="carousel-control-arrows-v1 radius-3 fa fa-angle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- End Controls -->
                </div>
                <!-- End (Slider) -->

                <div class="blog-grid-box-shadow">
                    <div class="blog-grid-content">
                        <h2 class="blog-grid-title-lg"><a href="blog_single_slider.html">Vestibulum vel sapien et lacus tempus varius.</a></h2>
                        <p class="margin-b-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel neque vulputate, vel porta magna molestie. Sed eu egestas ex, a posuere libero. Quisque ac placerat felis. Etiam non neque ac odio consequat interdum vitae eget sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. In et est ut metus lacinia pretium. Donec consequat, ligula eget suscipit laoreet, sem orci molestie tellus, ut pellentesque erat augue non neque.</p>
                    </div>
                    <div class="blog-grid-supplemental">
                        <span class="blog-grid-supplemental-title">
                            <a class="blog-grid-supplemental-category" href="#">Case Study</a>
                            - 12/21/2016
                        </span>
                    </div>
                </div>
            </article>
            <!-- End Blog Grid (Slider) -->
            @endif
            
            @if($post->type->slug=='audio')
                <!-- Blog Grid (Audio) -->
                <article class="blog-grid overflow-h margin-b-50">
                    <!-- (Audio) -->
                    <iframe style="width: 100%; border: none;" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/19048953&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
                    <!-- End (Audio) -->

                    <div class="blog-grid-box-shadow">
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-lg"><a href="blog_single_audio.html">Robo Beatz - Classic Piano</a></h2>
                            <p class="margin-b-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel neque vulputate, vel porta magna molestie. Sed eu egestas ex, a posuere libero. Quisque ac placerat felis. Etiam non neque ac odio consequat interdum vitae eget sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. In et est ut metus lacinia pretium. Donec consequat, ligula eget suscipit laoreet, sem orci molestie tellus, ut pellentesque erat augue non neque.</p>
                        </div>
                        <div class="blog-grid-supplemental">
                            <span class="blog-grid-supplemental-title">
                                <a class="blog-grid-supplemental-category" href="#">Music</a>
                                - 12/21/2016
                            </span>
                        </div>
                    </div>
                </article>
                <!-- End Blog Grid (Audio) -->
            @endif
            
            @if($post->type->slug=='quote')
                <!-- Blog Grid Quote -->
                <article class="blog-grid-quote blog-grid-box-shadow margin-b-50">
                    <span class="blog-grid-quote-icon">&#10077;</span>
                    <a class="blog-grid-quote-text blog-grid-quote-text-lg" href="blog_single_quote.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel neque vulputate, vel porta magna molestie. Sed eu egestas ex, a posuere libero.</a>
                    <h4 class="blog-quote-title">&#8212; Kenny Johnson</h4>
                </article>
                <!-- Blog Grid Quote -->
            @endif

            @if($post->type->slug=='video')
               <!-- Blog Grid (Popup Video) -->
                <article class="blog-grid margin-b-50">
                    <!-- (Popup Video) -->
                    <div class="blog-grid-video">
                        <img class="img-responsive" src="assets/img/1920x1080/17.jpg" alt="">
                        <div class="blog-grid-video-player">
                            <a class="popup-vimeo" href="https://vimeo.com/50291922" title="Peugeot onyx concept car">
                                <img src="assets/img/widgets/video-play.png" alt="" width="50" height="50">
                            </a>
                        </div>
                    </div>
                    <!-- End (Popup Video) -->

                    <div class="blog-grid-box-shadow">
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-lg"><a href="blog_single_video.html">Etiam non neque ac odio consequat</a></h2>
                            <p class="margin-b-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel neque vulputate, vel porta magna molestie. Sed eu egestas ex, a posuere libero. Quisque ac placerat felis. Etiam non neque ac odio consequat interdum vitae eget sem. Interdum et malesuada fames ac ante ipsum primis in faucibus. In et est ut metus lacinia pretium. Donec consequat, ligula eget suscipit laoreet, sem orci molestie tellus, ut pellentesque erat augue non neque.</p>
                        </div>
                        <div class="blog-grid-supplemental">
                            <span class="blog-grid-supplemental-title">
                                <a class="blog-grid-supplemental-category" href="#">News</a>
                                - 12/21/2016
                            </span>
                        </div>
                    </div>
                </article>
                <!-- End Blog Grid (Popup Video) -->
            @endif
        
            @if($post->type->slug=='standard')
                <!-- Blog Grid -->
                <article class="blog-grid margin-b-50">
                    <div class="blog-grid-box-shadow">
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-el"><a class="blog-grid-title-link" href="{{ url("posts/$post->id") }}">{{ $post->title }}</a></h2>
                            {!! $post->excerpt(300) !!}
                        </div>
                        <div class="blog-grid-supplemental">
                            <span class="blog-grid-supplemental-title">
                                <a class="blog-grid-supplemental-category" href="#">Guide</a>
                                - {{ $post->created_at->format('d/m/Y') }}
                            </span>
                        </div>
                    </div>
                </article>
                <!-- End Blog Grid -->
            @endif       
        @endforeach
    </div>

    <!-- Pagers v2 -->
    <div class="container margin-b-80">
        <ul class="pagers-v2">
            <li><a class="radius-3" href="#">Previous</a></li>
            <li><a class="radius-3" href="#">Next</a></li>
        </ul>
    </div>
    <!-- End Pagers v2 -->
    

    <!-- Newsletter v3 -->
    <section class="newsletter-v3 bg-color-sky-light">
        <div class="content-md container-xs">
            <!-- Heading v6 -->
            <div class="heading-v6 text-center margin-b-40">
                <h2 class="heading-v6-title">Newsletter</h2>
                <p class="heading-v6-text">Subscribe to our newsletter and stay up to date with the latest news and deals.</p>
                <p class="heading-v6-text">Only actual information and no spamming!</p>
            </div>
            <!-- End Heading v6 -->

            <div class="row space-row-5">
                <div class="col-xs-4 xs-full-width xs-margin-b-20">
                    <input type="text" class="form-control newsletter-v3-form radius-3" placeholder="Name">
                </div>
                <div class="col-xs-4 xs-full-width xs-margin-b-20">
                    <input type="text" class="form-control newsletter-v3-form radius-3" placeholder="Email">
                </div>
                <div class="col-xs-4 xs-full-width">
                <button class="btn-dark-bg btn-base-md btn-block radius-3" type="button">Subscribe</button>
            </div>
            </div>
            <!--// end row -->
        </div>
    </section>
    <!-- End Newsletter v3 -->
</div>

@endsection

@section('scripts')
	<script type="text/javascript" src="assets/plugins/jquery.imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/scripts/components/owl-carousel.js"></script>
    <script type="text/javascript" src="assets/scripts/components/header-sticky.js"></script>
@endsection