@extends('layouts/body')
@section('content')

    <!-- Blog Section Start -->
    <div class="blog-section section mt-90 mb-50">
        <div class="container">
            <div class="row row-40">

                <div class="col-lg-8 col-12 order-1 order-lg-2 mb-40">
                    <div class="row">

                        <div class="col-12 mb-50">
                            <div class="ee-single-blog">
                                <div class="image"><img src="{{asset('images/blog/blog-10.jpg')}}" alt="Blog Image"></div>
                                <div class="content">
                                    <h3>Latest Drone for taking sky view image and 4K video</h3>
                                    <ul class="meta">
                                        <li><a href="#">Momen</a></li>
                                        <li><a href="#">{{$posts->created_at->diffForHumans()}}</a></li>
                                        <li><a href="#">Comments 05</a></li>
                                    </ul>
                                    {{$posts->body}}
                                    <div class="blog-footer">
                                        <div class="blog-tags"><h5>Tags:</h5> <a href="#">Electronic</a> <a href="#">Smartphone</a> <a href="#">Drone</a> <a href="#">Home Appliance</a></div>
                                        <div class="blog-share"><h5>Share:</h5> <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                    </div>

                    <div class="row">
                        <div class="blog-comment-wrap col">

                            <h4>{{$comments->count(). ' comment(s)'}}</h4>

                            <ul class="comment-list">
                                @foreach($comments as $comment)
                                <li>
                                    <div class="single-comment">
                                        <div class="image"><img src="{{asset('images/blog/comment-1.jpg')}}" alt=""></div>
                                        <div class="content">
                                            <h5>{{$comment->users ? $comment->users->first_name.' '. $comment->users->last_name:''}}  /  <span>{{$comment->created_at->diffForHumans()}}</span></h5>
                                            <p>{{$comment->users ? $comment->body: ''}}</p>
                                            <a href="#" class="reply">reply</a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>

                            <h4>Leave a comment</h4>

                            <form action="{{route('comments', $posts->id)}}" method="post" class="comment-form">
                                @csrf
                                <div class="row">

                                    <div class="col-12 mb-30">
                                        <label for="message">Comment*</label>
                                        <textarea name="comment" id="message"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" value="send now">
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-12 order-2 order-lg-1">

                    <div class="blog-sidebar mb-40">



                    </div>

                    <div class="blog-sidebar mb-40">



                    </div>

                    <div class="blog-sidebar mb-40">

                        <div class="banner"><a href="#"><img src="{{asset('images/banner/banner-41.jpg')}}" alt="Banner"></a></div>

                    </div>

                    <div class="blog-sidebar mb-40">



                    </div>

                </div>

            </div>
        </div>
    </div><!-- Blog Section End -->

@endsection

