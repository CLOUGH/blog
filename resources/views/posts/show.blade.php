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
	<section class="breadcrumbs-v5 breadcrumbs-v5-bg-img-v4 bg-position-center-center">
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
	                        <img class="img-responsive" src="{{ url('assets/img/1920x1080/20.jpg') }}" alt="">
	                    @endif

                        <!-- Blog Grid Content -->
                        <div class="blog-grid-content">
                            <h2 class="blog-grid-title-lg"><a class="blog-grid-title-link" href="{{ url("posts/$post->id") }}">{{ $post->title }}</a></h2>
                            {!! $post->body !!}

                            <!-- <span class="blog-single-post-source">Source: <a href="#">Prothemes</a></span> -->

                            <!-- Blog Grid Tags -->
                            <ul class="list-inline blog-sidebar-tags">
                                @foreach($post->tags as $tag)
                                    <li><a class="radius-50" href="#">{{ $tag->name }}</a></li>
                                @endforeach
                            </ul>
                            <!-- End Blog Grid Tags -->
                        </div>
                        <!-- End Blog Grid Content -->
                    </article>
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
                                        <img class="blog-single-post-comment-media-img radius-circle" src="{{ url('assets/img/members/04.jpg') }}" alt="">
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
                                            <img class="blog-single-post-comment-media-img radius-circle" src="{{ url('assets/img/members/02.jpg') }}" alt="">
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
                                        <img class="blog-single-post-comment-media-img radius-circle" src="{{ url('assets/img/members/03.jpg') }}" alt="">
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
                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar margin-b-30">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-tools"></i>
                            <h4 class="blog-sidebar-heading-title">Post Timeline</h4>
                        </div>
                        <div class="blog-sidebar-content blog-sidebar-content-height scrollbar">
                            <!--Timeline v2 -->
                            <ul class="timeline-v2">
                                @foreach($posts as $post)
                                    <li class="timeline-v2-list-item">
                                        <i class="timeline-v2-badge-icon radius-circle fa fa-calendar"></i>
                                        <small class="timeline-v2-news-date">{{ $post->publish_on->format('d M, Y') }}</small>
                                        <h5 class="timeline-v2-news-title"><a href="{{ url('posts/'.$post->id) }}">{{ $post->title }}</a></h5>
                                    </li>
                                @endforeach                            
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
                        <a class="twitter-timeline" href="https://twitter.com/warren_clough" data-widget-id="736601644280872961"  data-chrome="nofooter noheader noscrollbar noborders">Tweets by @warren_clough</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    <!-- End Blog Sidebar -->

                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar">
                        <div class="blog-sidebar-heading">
                            <i class="blog-sidebar-heading-icon icon-paperclip"></i>
                            <h4 class="blog-sidebar-heading-title">Tags</h4>
                        </div>
                        <div class="blog-sidebar-content">
                            <!-- Blog Grid Tags -->
                            <ul class="list-inline blog-sidebar-tags">
                                @foreach($tags as $tag)
                                    <li><a class="radius-50" href="{{ url("posts?tag=$tag->name") }}">{{ $tag->name }}</a></li>
                                @endforeach
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