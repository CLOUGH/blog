<!-- Single Post Comment -->
<div class="blog-single-post-comment blog-single-post-comment-first-child">
    <div class="blog-single-post-comment-media">
        @if($comment->is_anonymous)
            <div class="theme-icons-wrap icon-box-v4-element">
                <i class="theme-icons theme-icons-dark-bg theme-icons-md radius-circle icon-profile-male"></i>
            </div>
        @else
            <img class="blog-single-post-comment-media-img radius-circle" src="{{ url('assets/img/members/04.jpg') }}" alt="">
        @endif
    </div>
    <div class="blog-single-post-comment-content">
        <h4 class="blog-single-post-comment-username"><a href="#">{{ $comment->is_anonymous ?  $comment->first_name." ".$comment->last_name : $comment->user->first_name." ".$comment->user->last_name }}</a></h4>
        <small class="blog-single-post-comment-time" title="5 September, 2016">{{ $comment->created_at->diffForHumans() }}</small>
        <p class="blog-single-post-comment-text">{{ $comment->message }}</p>
            
        <!-- Single Post Comment Share -->
        <ul class="list-inline blog-single-post-comment-share">            
            <li class="blog-single-post-comment-share-item">
                <a class="blog-single-post-comment-share-link  form-modal-login" href="javascript:void(0);" onclick="openReplyModal({{ $comment->id }})">
                    Reply
                </a>
            </li>
        </ul>
        <!-- End Single Post Comment Share -->
    </div>
    @if($comment->hasReplies())
        @foreach($comment->replies as $replyComment)
            @include('partials.comment',['comment'=>$replyComment ])
        @endforeach
    @endif
</div>
<!-- End Blog Single Post Comment -->