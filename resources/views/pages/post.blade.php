@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(session('status'))
                        <div class="alert alert-danger">
                            {{session('status')}}
                        </div>
                    @endif
                    <article class="post">
                        <div class="post-thumb">
                            <a href="{{route('post.show', $post->slug)}}"><img src="{{$post->getImage()}}" alt=""></a>
                        </div>
                        <div class="post-content">
                            <div class="entry-header text-center">
                                @if($post->hasCategory())
                                    <h6>
                                        <a href="{{route('category.show', $post->category->slug)}}"> {{$post->getCategoryTitle()}}</a>
                                    </h6>
                                @endif
                                <h1 class="entry-title">{{$post->title}}</h1>
                            </div>
                            <div class="entry-content">
                                {!!$post->content!!}
                            </div>
                            <div class="entry-content">
                                {!!$post->author!!}
                            </div>
                            </br>
                            <div class="tag">
                                @foreach($post->tags as $tag)
                                    <a href="{{route('tag.show', $tag->slug)}}">{{$tag->title}}</a>
                                @endforeach
                            </div>
                            <div class="social-share">
                                <small>{{$post->getDate()}}</small>
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a class="s-twitter" href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a class="s-instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>
                    <div id="disqus_thread"></div>
                    <div class="row">
                        <!--blog next previous-->
                        <div class="col-md-6">
                            @if($post->hasPrevious())
                                <div class="single-blog-box">
                                    <a href="{{route('post.show', $post->getPrevious()->slug)}}">
                                        <img src="{{$post->getPrevious()->getImage()}}" width="340" height="220" alt="">
                                        <div class="overlay">
                                            <div class="promo-text">
                                                <p><i class="pull-left fa fa-angle-left"></i></p>
                                                <h5>{{$post->getPrevious()->title}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            @if($post->hasNext())
                                <div class="single-blog-box">
                                    <a href="{{route('post.show', $post->getNext()->slug)}}">
                                        <img src="{{$post->getNext()->getImage()}}" width="340" height="220" alt="">
                                        <div class="overlay">
                                            <div class="promo-text">
                                                <p><i class="pull-right fa fa-angle-right"></i></p>
                                                <h5>{{$post->getNext()->title}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!--blog next previous end-->
                </div>
            </div>
        </div>
    </div>
    </br>
    <!-- end main content-->

@endsection