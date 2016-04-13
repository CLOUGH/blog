@extends('layouts.app')

@section('header')
	<link href="{{ url('assets/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('page-header')
    @include('partials.ark.header')
@endsection

@section('page-footer')
    @include('partials.ark.footer')
@endsection

@section('page-class','show-post')

@section('content')
	<!--========== BREADCRUMBS V5 ==========-->
	<section class="breadcrumbs-v5 bg-position-fixed breadcrumbs-v5-bg-img-v4">
	    <div class="container">
	        <h2 class="breadcrumbs-v5-title">Blog Post</h2>
	        <span class="breadcrumbs-v5-subtitle"></span>
	    </div>
	</section>
	<!--========== END BREADCRUMBS V5 ==========-->

	<!--========== BACKGROUND COLOR SKY LIGHT ==========-->
    <div class="bg-color-sky-light">
        <!--========== PAGE CONTENT ==========-->
        <div class="content-sm container">
            <div class="row">
                <div class="col-md-9 md-margin-b-50">
                    <!-- Blog Grid -->
                    <article class="blog-grid margin-b-30">
                        @if($post->type->name=='image')
	                        <img class="img-responsive" src="assets/img/1920x1080/20.jpg" alt="">
	                    @endif

                        <!-- Blog Grid Content -->
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-lg"><a class="blog-grid-title-link" href="{{ url("posts/$post->id") }}">{{ $post->title }}</a></h2>
                            {!! $post->body !!}

                            <span class="blog-single-post-source">Source: <a href="#">Prothemes</a></span>

                            <!-- Blog Grid Tags -->
                            <ul class="list-inline blog-sidebar-tags">
                                <li><a class="radius-50" href="#">envato</a></li>
                                <li><a class="radius-50" href="#">featured</a></li>
                                <li><a class="radius-50" href="#">wordpress</a></li>
                            </ul>
                            <!-- End Blog Grid Tags -->
                        </div>
                        <!-- End Blog Grid Content -->
                    </article>
                    <!-- End Blog Grid -->

                    <!-- Blog Grid -->
                    <div class="bg-color-white margin-b-30">
                        <div class="blog-single-post-content">
                            <!-- Heading v1 -->
                            <div class="heading-v1 text-center margin-b-50">
                                <h2 class="heading-v1-title">You Might Also Like</h2>
                            </div>
                            <!-- End Heading v1 -->

                            <div class="row">
                                <div class="col-md-4 md-margin-b-30">
                                    <!-- Blog Grid -->
                                    <article class="blog-grid">
                                        <img class="img-responsive" src="assets/img/970x647/19.jpg" alt="">
                                        <div class="blog-grid-content">
                                            <h2 class="blog-grid-title-sm"><a class="blog-grid-title-link" href="blog_single_standard.html">Architecto beatae vitae dicta sunt explicabo</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus lorem vel.</p>
                                        </div>
                                        <div class="blog-grid-supplemental">
                                            <span class="blog-grid-supplemental-title">
                                                <a class="blog-grid-supplemental-category" href="#">News</a>
                                                - 12/21/2016
                                            </span>
                                        </div>
                                    </article>
                                    <!-- End Blog Grid -->
                                </div>
                                <div class="col-md-4 md-margin-b-30">
                                    <!-- Blog Grid (Slider) -->
                                    <article class="blog-grid">
                                        <!-- (Slider) -->
                                        <div id="blog-grid-2-col" class="carousel slide carousel-fade" data-ride="carousel">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img class="img-responsive" src="assets/img/970x647/28.jpg" alt="">
                                                </div>
                                                <div class="item">
                                                    <img class="img-responsive" src="assets/img/970x647/17.jpg" alt="">
                                                </div>
                                            </div>
                                            <!-- End Wrapper for slides -->

                                            <!-- Controls -->
                                            <a class="left carousel-control theme-carousel-control-v1" href="#blog-grid-2-col" role="button" data-slide="prev">
                                                <span class="carousel-control-arrows-v1 radius-3 fa fa-angle-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control theme-carousel-control-v1" href="#blog-grid-2-col" role="button" data-slide="next">
                                                <span class="carousel-control-arrows-v1 radius-3 fa fa-angle-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                            <!-- End Controls -->
                                        </div>
                                        <!-- End (Slider) -->

                                        <div class="blog-grid-content">
                                            <h2 class="blog-grid-title-sm"><a class="blog-grid-title-link" href="blog_single_slider.html">Nemo enim ipsam voluptatem quia</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus lorem vel.</p>
                                        </div>
                                        <div class="blog-grid-supplemental">
                                            <span class="blog-grid-supplemental-title">
                                                <a class="blog-grid-supplemental-category" href="#">Opinion</a>
                                                - 12/21/2016
                                            </span>
                                        </div>
                                    </article>
                                    <!-- End Blog Grid Slider -->
                                </div>
                                <div class="col-md-4">
                                    <!-- Blog Grid -->
                                    <article class="blog-grid">
                                        <img class="img-responsive" src="assets/img/970x647/18.jpg" alt="">
                                        <div class="blog-grid-content">
                                            <h2 class="blog-grid-title-sm"><a class="blog-grid-title-link" href="blog_single_standard.html">Sed quia consequuntur magni dolores</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In finibus lorem vel.</p>
                                        </div>
                                        <div class="blog-grid-supplemental">
                                            <span class="blog-grid-supplemental-title">
                                                <a class="blog-grid-supplemental-category" href="#">News</a>
                                                - 12/21/2016
                                            </span>
                                        </div>
                                    </article>
                                    <!-- End Blog Grid -->
                                </div>
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                    <!-- End Blog Grid -->

                    <!-- Blog Comment -->
                    <div class="bg-color-white margin-b-30">
                        <div class="blog-single-post-content">
                            <!-- Heading v1 -->
                            <div class="heading-v1 text-center margin-b-50">
                                <h2 class="heading-v1-title">Leave a comment</h2>
                            </div>
                            <!-- End Heading v1 -->

                            <!-- Single Post Comment Form -->
                            <div class="blog-single-post-comment-form">
                                <!-- Comment Form -->
                                <form id="comment-form" class="comment-form-error" action="index.html" method="get">
                                    <div class="row">
                                        <div class="col-md-4 margin-b-30">
                                            <input type="text" class="form-control blog-single-post-form radius-3" placeholder="First Name *" name="firstname" required>
                                        </div>
                                        <div class="col-md-4 margin-b-30">
                                            <input type="text" class="form-control blog-single-post-form radius-3" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-4 margin-b-30">
                                            <input type="email" class="form-control blog-single-post-form radius-3" placeholder="Email *" name="email" required>
                                        </div>
                                    </div>
                                    <!--// end row -->

                                    <div class="margin-b-30">
                                        <textarea class="form-control blog-single-post-form radius-3" rows="6" placeholder="Your message *" name="textarea" required></textarea>
                                    </div>
                                    <button type="submit" class="btn-dark-brd btn-base-sm footer-v5-btn radius-3">Submit</button>
                                </form>
                                <!-- End Comment Form -->

                                <hr class="md-hr">

                                <button type="button" class="btn-base btn-base-bg btn-base-md btn-block radius-3 margin-b-30">Show 5 new comments</button>

                                <!-- Single Post Comment -->
                                <div class="blog-single-post-comment blog-single-post-comment-first-child">
                                    <div class="blog-single-post-comment-media">
                                        <img class="blog-single-post-comment-media-img radius-circle" src="assets/img/members/04.jpg" alt="">
                                    </div>
                                    <div class="blog-single-post-comment-content">
                                        <h4 class="blog-single-post-comment-username"><a href="#">Katrina Ls.</a></h4>
                                        <small class="blog-single-post-comment-time" title="5 September, 2016">3 hours ago</small>
                                        <p class="blog-single-post-comment-text">Mauris dictum, diam vel gravida fringilla, tellus velit vulputate augue, non cursus erat est ac ipsum. Pellentesque porta massa maximus mauris auctor maximus. Maecenas viverra diam vel sem aliquam rhoncus. Morbi sed lectus eget augue elementum iaculis eu eget erat.</p>

                                        <!-- Single Post Comment Share -->
                                        <ul class="list-inline blog-single-post-comment-share">
                                            <li class="blog-single-post-comment-share-item">
                                                <a class="blog-single-post-comment-share-link" href="#">
                                                    <i class="fa fa-thumbs-o-up"></i>
                                                </a>
                                            </li>
                                            <li class="blog-single-post-comment-share-item">
                                                <a class="blog-single-post-comment-share-link" href="#">
                                                    <i class="fa fa-thumbs-o-down"></i>
                                                </a>
                                            </li>
                                            <li class="blog-single-post-comment-share-item">
                                                <a class="blog-single-post-comment-share-link" href="#">
                                                    Answer
                                                </a>
                                            </li>
                                            <li class="blog-single-post-comment-share-item">
                                                <a class="blog-single-post-comment-share-link" href="#">
                                                    Share
                                                </a>
                                            </li>
                                            <li class="blog-single-post-comment-share-item pull-right">
                                                <a class="blog-single-post-comment-share-link" href="#">
                                                    Show 3 new answers
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End Single Post Comment Share -->
                                    </div>

                                    <!-- Single Post Comment -->
                                    <div class="blog-single-post-comment">
                                        <div class="blog-single-post-comment-media">
                                            <img class="blog-single-post-comment-media-img radius-circle" src="assets/img/members/02.jpg" alt="">
                                        </div>
                                        <div class="blog-single-post-comment-content">
                                            <h4 class="blog-single-post-comment-username"><a href="#">Sara Glaser</a></h4>
                                            <small class="blog-single-post-comment-time" title="5 September, 2016">2 hours ago</small>
                                            <p class="blog-single-post-comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius.</p>

                                            <!-- Single Post Comment Share -->
                                            <ul class="list-inline blog-single-post-comment-share">
                                                <li class="blog-single-post-comment-share-item">
                                                    <a class="blog-single-post-comment-share-link" href="#">
                                                        <i class="fa fa-thumbs-o-up"></i>
                                                    </a>
                                                </li>
                                                <li class="blog-single-post-comment-share-item">
                                                    <a class="blog-single-post-comment-share-link" href="#">
                                                        <i class="fa fa-thumbs-o-down"></i>
                                                    </a>
                                                </li>
                                                <li class="blog-single-post-comment-share-item">
                                                    <a class="blog-single-post-comment-share-link" href="#">
                                                        Answer
                                                    </a>
                                                </li>
                                                <li class="blog-single-post-comment-share-item">
                                                    <a class="blog-single-post-comment-share-link" href="#">
                                                        Share
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- End Single Post Comment Share -->
                                        </div>
                                    </div>
                                    <!-- End Single Post Comment -->
                                </div>
                                <!-- End Blog Single Post Comment -->

                                <!-- Single Post Comment -->
                                <div class="blog-single-post-comment">
                                    <div class="blog-single-post-comment-media">
                                        <img class="blog-single-post-comment-media-img radius-circle" src="assets/img/members/03.jpg" alt="">
                                    </div>
                                    <div class="blog-single-post-comment-content">
                                        <h4 class="blog-single-post-comment-username"><a href="#">Robert Smith</a></h4>
                                        <small class="blog-single-post-comment-time" title="5 September, 2016">5 hours ago</small>
                                        <p class="blog-single-post-comment-text">Interdum nibh vel varius quam velit at massa. Nunc in metus sagittis, dictum dui a, feugiat tortor. Aenean sem augue, vestibulum sagittis commodo sed, mollis vel nunc.</p>

                                        <!-- Single Post Comment Share -->
                                        <ul class="list-inline blog-single-post-comment-share">
                                            <li class="blog-single-post-comment-share-item">
                                                <a class="blog-single-post-comment-share-link" href="#">
                                                    <i class="fa fa-thumbs-o-up"></i>
                                                </a>
                                            </li>
                                            <li class="blog-single-post-comment-share-item">
                                                <a class="blog-single-post-comment-share-link" href="#">
                                                    <i class="fa fa-thumbs-o-down"></i>
                                                </a>
                                            </li>
                                            <li class="blog-single-post-comment-share-item">
                                                <a class="blog-single-post-comment-share-link" href="#">
                                                    Answer
                                                </a>
                                            </li>
                                            <li class="blog-single-post-comment-share-item">
                                                <a class="blog-single-post-comment-share-link" href="#">
                                                    Share
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End Single Post Comment Share -->
                                    </div>
                                </div>
                                <!-- End Single Post Comment -->
                            </div>
                            <!-- Single Post Comment Form -->
                        </div>
                    </div>
                    <!-- End Blog Comment -->
                </div>

                <!--========== BLOG SIDEBAR ==========-->
                <div class="col-md-3">
                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar margin-b-30">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-book-open"></i>
                            <h4 class="blog-sidebar-heading-title">Tutorials</h4>
                        </div>
                        <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                            <!-- Latest Tutorials -->
                            <article class="latest-tuts">
                                <div class="latest-tuts-media">
                                    <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/06.jpg" alt="">
                                </div>
                                <div class="latest-tuts-content">
                                    <h5 class="latest-tuts-content-title"><a href="#">Visual brand designing</a></h5>
                                    <small class="latest-tuts-content-time">35 minutes ago</small>
                                </div>
                            </article>
                            <article class="latest-tuts">
                                <div class="latest-tuts-media">
                                    <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/11.jpg" alt="">
                                </div>
                                <div class="latest-tuts-content">
                                    <h5 class="latest-tuts-content-title"><a href="#">Photoshop: Image Cropping</a></h5>
                                    <small class="latest-tuts-content-time">7 hours ago</small>
                                </div>
                            </article>
                            <article class="latest-tuts">
                                <div class="latest-tuts-media">
                                    <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/08.jpg" alt="">
                                </div>
                                <div class="latest-tuts-content">
                                    <h5 class="latest-tuts-content-title"><a href="#">Video editing</a></h5>
                                    <small class="latest-tuts-content-time">12 hours ago</small>
                                </div>
                            </article>
                            <article class="latest-tuts">
                                <div class="latest-tuts-media">
                                    <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/09.jpg" alt="">
                                </div>
                                <div class="latest-tuts-content">
                                    <h5 class="latest-tuts-content-title"><a href="#">Web development technologies</a></h5>
                                    <small class="latest-tuts-content-time">1 day ago</small>
                                </div>
                            </article>
                            <article class="latest-tuts">
                                <div class="latest-tuts-media">
                                    <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/10.jpg" alt="">
                                </div>
                                <div class="latest-tuts-content">
                                    <h5 class="latest-tuts-content-title"><a href="#">The section element - HTML</a></h5>
                                    <small class="latest-tuts-content-time">2 days ago</small>
                                </div>
                            </article>
                            <article class="latest-tuts">
                                <div class="latest-tuts-media">
                                    <img class="latest-tuts-media-img radius-circle" src="assets/img/250x250/07.jpg" alt="">
                                </div>
                                <div class="latest-tuts-content">
                                    <h5 class="latest-tuts-content-title"><a href="#">Creata a logo using Adobe Illustrator</a></h5>
                                    <small class="latest-tuts-content-time">3 days ago</small>
                                </div>
                            </article>
                            <!-- End Latest Tutorials -->
                        </div>
                    </div>
                    <!-- End Blog Sidebar -->

                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar margin-b-30">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-tools"></i>
                            <h4 class="blog-sidebar-heading-title">Post Timeline</h4>
                        </div>
                        <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                            <!--Timeline v2 -->
                            <ul class="timeline-v2">
                                <li class="timeline-v2-list-item">
                                    <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                    <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                    <h5 class="timeline-v2-news-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
                                </li>
                                <li class="timeline-v2-list-item">
                                    <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                    <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                    <h5 class="timeline-v2-news-title"><a href="#">Nunc efficitur auctor felis, et tempus libero commodo non.</a></h5>
                                </li>
                                <li class="timeline-v2-list-item">
                                    <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                    <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                    <h5 class="timeline-v2-news-title"><a href="#">Phasellus neque eros, finibus quis velit in, fringilla gravida est.</a></h5>
                                </li>
                                <li class="timeline-v2-list-item">
                                    <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                    <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                    <h5 class="timeline-v2-news-title"><a href="#">Nunc efficitur auctor felis, et tempus libero commodo non.</a></h5>
                                </li>
                                <li class="timeline-v2-list-item">
                                    <i class="timeline-v2-badge-icon radius-circle fa fa-comments-o"></i>
                                    <small class="timeline-v2-news-date">10 Aug, 2016</small>
                                    <h5 class="timeline-v2-news-title"><a href="#">Phasellus neque eros, finibus quis velit in, fringilla gravida est.</a></h5>
                                </li>
                                <li class="clearfix" style="float: none;"></li>
                            </ul>
                            <!-- End Timeline v2 -->
                        </div>
                    </div>
                    <!-- End Blog Sidebar -->

                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar margin-b-30">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-chat"></i>
                            <h4 class="blog-sidebar-heading-title">Twitter feed</h4>
                        </div>
                        <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                            <!-- Twitter Feed -->
                            <ul class="list-unstyled twitter-feed">
                                <li class="twitter-feed-item">
                                    <div class="twitter-feed-media">
                                        <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/01.jpg" alt="">
                                    </div>
                                    <div class="twitter-feed-content">
                                        <strong class="twitter-feed-profile-name">Dr.Cafee</strong>
                                        <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@DrCafee</a></span>
                                        <span class="twitter-feed-posted-time">4h</span>
                                        <p class="twitter-feed-paragraph">Sequat ultrices metus et malesuada.</p>
                                        <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                    </div>
                                </li>
                                <li class="twitter-feed-item">
                                    <div class="twitter-feed-media">
                                        <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/04.jpg" alt="">
                                    </div>
                                    <div class="twitter-feed-content">
                                        <strong class="twitter-feed-profile-name">Nickos</strong>
                                        <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@Nicko</a></span>
                                        <span class="twitter-feed-posted-time">5h</span>
                                        <p class="twitter-feed-paragraph">Nam bibendum urna in arcu mollis suscipit.</p>
                                        <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                    </div>
                                </li>
                                <li class="twitter-feed-item">
                                    <div class="twitter-feed-media">
                                        <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/02.jpg" alt="">
                                    </div>
                                    <div class="twitter-feed-content">
                                        <strong class="twitter-feed-profile-name">PhotoStudio</strong>
                                        <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@PS</a></span>
                                        <span class="twitter-feed-posted-time">7h</span>
                                        <p class="twitter-feed-paragraph">Curabitur leo turpis, tempus id tincidunt non, pharetra sed urna.</p>
                                        <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                    </div>
                                </li>
                                <li class="twitter-feed-item">
                                    <div class="twitter-feed-media">
                                        <img class="twitter-feed-media-img radius-circle" src="assets/img/250x250/03.jpg" alt="">
                                    </div>
                                    <div class="twitter-feed-content">
                                        <strong class="twitter-feed-profile-name">Mr.Dog</strong>
                                        <span class="twitter-feed-profile-nickname"><a class="twitter-feed-profile-nickname-link" href="#">@Mr.Dog</a></span>
                                        <span class="twitter-feed-posted-time">1d</span>
                                        <p class="twitter-feed-paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <a class="twitter-feed-link" href="#">http://bit.ly/1c0UN3Y</a>
                                    </div>
                                </li>
                            </ul>
                            <!-- End Twitter Feed -->
                        </div>
                    </div>
                    <!-- End Blog Sidebar -->

                    <!-- Featured Article -->
                    <a class="featured-article margin-b-30" href="#">
                        <img class="img-responsive" src="assets/img/970x647/26.jpg" alt="">
                        <div class="featured-article-content-wrap">
                            <div class="featured-article-content">
                                <p class="featured-article-content-title">Preview: First look at new device</p>
                                <small class="featured-article-content-time">10 Aug, 2016</small>
                            </div>
                        </div>
                    </a>
                    <!-- End Featured Article -->

                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-paperclip"></i>
                            <h4 class="blog-sidebar-heading-title">Tags</h4>
                        </div>
                        <div class="blog-sidebar-content">
                            <!-- Blog Grid Tags -->
                            <ul class="list-inline blog-sidebar-tags">
                                <li><a class="radius-50" href="#">envato</a></li>
                                <li><a class="radius-50" href="#">featured</a></li>
                                <li><a class="radius-50" href="#">material</a></li>
                                <li><a class="radius-50" href="#">fashion</a></li>
                                <li><a class="radius-50" href="#">themeforest</a></li>
                                <li><a class="radius-50" href="#">css3</a></li>
                                <li><a class="radius-50" href="#">photoshop</a></li>
                                <li><a class="radius-50" href="#">wordpress</a></li>
                            </ul>
                            <!-- End Blog Grid Tags -->
                        </div>
                    </div>
                    <!-- End Blog Sidebar -->
                </div>
                <!--========== END BLOG SIDEBAR ==========-->
            </div>
            <!--// end row -->
        </div>
        <!--========== END PAGE CONTENT ==========-->

    </div>
    <!--========== END BACKGROUND COLOR SKY LIGHT ==========-->
@endsection

@section('scripts')
	<script type="text/javascript" src="{{ url('assets/plugins/jquery.imagesloaded.pkgd.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('assets/scripts/components/owl-carousel.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/scripts/components/header-sticky.js') }}"></script>
@endsection