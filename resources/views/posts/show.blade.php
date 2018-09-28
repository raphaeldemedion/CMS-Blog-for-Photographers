@extends('layouts.design')
    @section('title') Single @stop
        @section('content')
        <div class="col-md-9 col-md-offset-3">
                <div class="posts">
                    <div class="posts-inner">
                        <article class="post">
                            <div class="post-header">
                                <h2 class="title"><span>{{$posts->post_title}}</span></h2>

                                <!-- Post Details -->
                                <div class="post-details">
                                    <div class="post-cat">
                                        <a href="#">Travel</a>
                                    </div>
                                    <a href="#" class="post-date"><span> {{$posts->created_at}}</span></a>
                                    <div class="post-details-child">
                                        <a href="#" class="post-views">15 views</a>
                                        <a href="#" class="post-comments">03 Comments</a>
                                        <div class="post-share-icon">
                                            <span>SHARE</span>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                                <li><a href="#"><i class="fa fa-google"></i><span>Google Plus</span></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                                <li><a href="#"><i class="fa fa-behance"></i><span>Behance</span></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i><span>Dribbble</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Post Details -->
                            </div>
                            <div class="post-media">
                                <img src="/storage/cover_images/{{$posts->cover_image}}" alt="Post">
                            </div>
                            <div class="post-content">

                                <!-- The Content -->
                                <div class="the-excerpt">
                                    {!! $posts->post_content !!}
                                </div>
                                <!-- End The Content -->

                                <div class="post-tags">
                                    <strong>Tags: </strong>
                                    <ul>
                                        <li><a href="#">Art</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Trip</a></li>
                                        <li><a href="#">Tip</a></li>
                                    </ul>
                                </div>
                                <div class="post-author">
                                    {{-- Writed by  <a href="#">{{$posts->user->name}}</a> --}}
                                </div>
                            </div>

                        </article>
                         {{-- If the user is a guest, there will not be able to see the edit or delete option--}}
                            {{-- @if (!Auth::guest())
                            @if (Auth::user()->id == $posts->user_id) --}}
                            {{-- they user has to match the post id so make changes to a post    --}}
                                <a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit Post</a>
                                {!!Form::open(['action' => [ 'PostsController@destroy', $posts->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                    {{Form::hidden('_method', 'DELETE') }}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!! Form::close() !!}
                            {{-- @endif
                        @endif --}}
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-wrap">

                        <div class="older">
                            <a href="#" title="The living room is too small">Prev Post <i class="fa fa-angle-double-right"></i></a>
                            <h2 class="title">
                                <a href="#">The living room is too small</a>
                            </h2>
                        </div>
                        <div class="newer">
                            <a href="#" title="They have originality "><i class="fa fa-angle-double-left"></i> Next Post</a>
                            <h2 class="title">
                                <a href="#">They have originality </a>
                            </h2>
                        </div>
                    </div>
                    <!-- End Pagination -->

                    <!-- Related Posts -->
                    <div id="related-posts">
                        <h2 class="title"><span>Related Posts</span></h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="post">
                                    <div class="post-media" style="background-image:url({{asset('images/posts/4.jpg')}})"">
                                        <a href="single.html">
                                            <img src="{{asset('images/posts/4.jpg')}}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="post-entry">
                                        <h3 class="title">
                                            <a href="single.html">Living Lagom in Sweden: An Interview With Lola Akerstrom</a>
                                        </h3>
                                        <div class="post-details">
                                            <a href="#" class="post-date"><span>Aug 06, 2018</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="post">
                                    <div class="post-media" style="background-image: url({{asset('images/posts/2.jpg')}})">
                                        <a href="single.html">
                                            <img src="{{asset('images/posts/2.jpg')}}" alt="Image">
                                        </a>
                                    </div>
                                    <div class="post-entry">
                                        <h3 class="title">
                                            <a href="single.html">Living Lagom in Sweden: An Interview With Lola Akerstrom</a>
                                        </h3>
                                        <div class="post-details">
                                            <a href="#" class="post-date"><span>Aug 06, 2018</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Related Posts -->

                    <!-- Author Box -->
                    <div class="author-box">
                        <div class="header-top clearfix">
                            <div class="avatar-author">
                                <img src="{{asset('images/avatar.jpg')}}">
                            </div>
                            <div class="author-name">
                                <h3 class="title">
                                    <a href="#">Kendy</a>
                                </h3>
                                <div class="author-socials">
                                    <a href="#" class="fa fa-behance" title="Behance"></a>
                                    <a href="#" class="fa fa-dribbble" title="Dribbble"></a>
                                    <a href="#" class="fa fa-facebook" title="Facebook"></a>
                                    <a href="#" class="fa fa-google" title="Google Plus"></a>
                                    <a href="#" class="fa fa-twitter" title="Twitter"></a>
                                </div>
                            </div>

                        </div>
                        <div class="author-description">
                            Kendy loves beautiful content and doesn't like to give in easily. I run responsive Web design workshops, online workshops and loves solving complex UX, front-end and performance problems in large companies.
                            <a href="#">Get in touch.</a>
                        </div>
                    </div>
                    <!-- End Author Box -->

                    <!-- Comments -->
                    <div id="comments">
                        <h2 class="title"><span>04 Comments</span></h2>
                        <div class="comments-inner">
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-head">
                                            <div class="comment-avatar">
                                                <img alt="avatar" src="{{asset('images/avatar-150px.jpg')}}">
                                            </div>
                                            <div class="comment-info">
                                                <h5 class="title">Kendy</h5>
                                                <span class="comment-date">Aug 06, 2018</span>
                                            </div>
                                        </div>
                                        <div class="comment-context">
                                            <p>Design works within constraints. The Columban monks who crafted the Book</p>
                                            <div class="reply">
                                                <span class="comment-reply"><a class="comment-reply-link" href="#">Reply</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-head">
                                                    <div class="comment-avatar">
                                                        <img alt="avatar" src="{{asset('images/avatar.jpg')}}">
                                                    </div>
                                                    <div class="comment-info">
                                                        <h5 class="title">KENDY</h5>
                                                        <span class="comment-date">Aug 06, 2018</span>
                                                    </div>
                                                </div>
                                                <div class="comment-context">
                                                    <p>Design works within constraints. The Columban monks who crafted the Book</p>
                                                    <div class="reply">
                                                        <span class="comment-reply"><a class="comment-reply-link" href="#">Reply</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-head">
                                            <div class="comment-avatar">
                                                <img alt="avatar" src="{{asset('images/avatar-150px.jpg')}}">
                                            </div>
                                            <div class="comment-info">
                                                <h5 class="title">Kendy</h5>
                                                <span class="comment-date">Aug 06, 2018</span>
                                            </div>
                                        </div>
                                        <div class="comment-context">
                                            <p>Design works within constraints. The Columban monks who crafted the Book</p>
                                            <div class="reply">
                                                <span class="comment-reply"><a class="comment-reply-link" href="#">Reply</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-body">
                                        <div class="comment-head">
                                            <div class="comment-avatar">
                                                <img alt="avatar" src="{{asset('images/avatar-150px.jpg')}}">
                                            </div>
                                            <div class="comment-info">
                                                <h5 class="title">Kendy</h5>
                                                <span class="comment-date">Aug 06, 2018</span>
                                            </div>
                                        </div>
                                        <div class="comment-context">
                                            <p>Design works within constraints. The Columban monks who crafted the Book</p>
                                            <div class="reply">
                                                <span class="comment-reply"><a class="comment-reply-link" href="#">Reply</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- Respond -->
                        <div id="respond" class="comment-respond">
                            <h2 class="title"><span>Leave a Reply</span></h2>
                            <form action="#" method="post" class="contact">
                                <div class="contact-item">
                                    <label>Your Name *</label>
                                    <input name="author" value="" type="text">
                                </div>
                                <div class="contact-item">
                                    <label>Your Email *</label>
                                    <input name="email" value="" type="email">
                                </div>
                                <div class="contact-item">
                                    <label>Website URL</label>
                                    <input id="url" name="url" value="" type="text">
                                </div>
                                <div class="contact-item">
                                    <label>Your Comment *</label>
                                    <textarea name="comment"></textarea>
                                </div>
                                <div class="contact-item form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                </div>
                            </form>
                        </div><!-- #respond -->
                        <!-- End Respond -->
                    </div>
                    <!-- End Comments -->
                </div>
            </div>
            
        @endsection
