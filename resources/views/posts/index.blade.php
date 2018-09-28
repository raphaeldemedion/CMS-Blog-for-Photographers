@extends('layouts.design')

    @section('content')
        <div class="col-md-9 col-md-offset-3">
            @include('inc.messages')
            @if(count($posts) > 0)
            @foreach($posts as $post)
            
            <div class="posts"> 
                <div class="posts-inner">
                    <article class="post">
                        <div class="post-header">
                            <h2 class="title">
                                <a href="/posts/{{$post->id}}">{{$post->post_title}}</a>
                            </h2>

                            <!-- Post Details -->
                            <div class="post-details">
                                <div class="post-cat">
                                    <a href="#">Travel</a>
                                </div>
                                <a href="#" class="post-date"><span> {{$post->created_at}}</span></a>
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
                            <a href="single.html">
                                <img src="/storage/cover_images/{{$post->cover_image}}" alt="Post">
                            </a>
                        </div>
                        <div class="post-content">

                            <!-- The Content -->
                            <div class="the-excerpt">
                                {{$post->post_content}}
                            </div>
                            <!-- End The Content -->
                        </div>

                        <div class="read-more">
                            <a href="/posts/{{$post->id}}">Continue Reading ...</a>
                        </div>


                    </article>
                </div>

                <!-- Pagination -->
                <div class="pagination-wrap">

                    <div class="older">
                        <a href="#">Older Posts <i class="fa fa-angle-double-right"></i></a>
                    </div>
                    <div class="newer">
                        <a href="#"><i class="fa fa-angle-double-left"></i> Newer Posts</a>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
            @endforeach
        {{-- {{$post->links()}} --}}
    @else
            <p class="danger">No post found</p>
    @endif
        </div>
    <!-- End Wrapper Site -->
        
@endsection
