@extends('layouts/body')
@section('content')

    <!-- Blog Section Start -->
    <div class="blog-section section mt-90 mb-50">
        <div class="container">
            <div class="row row-40">

                <div class="col-lg-8 col-12 order-1 order-lg-2 mb-40">
                    <div class="row">




                        <div class="col mt-10 mb-10">
                            <!-- Header Advance Search Start -->
                            <div class=" header-advance-search">

                                <form action="{{route('allblog')}}" method="GET">
                                    {{--<div class="input">--}}
                                    {{--<input type="text" name="search" id="search" placeholder="Search your product">--}}
                                    {{--</div>--}}
                                    @csrf
                                    <div class="select">
                                        <select name="postnumber" class="nice-select">
                                            <option value="1">1 posts</option>
                                            <option value="2">2 posts</option>
                                            <option value="3">3 posts</option>
                                            <option value="4">4 posts</option>
                                            <option value="5">5 posts</option>
                                        </select>
                                    </div>
                                    <div class="submit">
                                        <button><i class="icofont icofont-search-alt-1"></i></button>
                                    </div>
                                </form>

                            </div><!-- Header Advance Search End -->
                        </div>









                    @foreach($posts as $post)

                        <!-- Blog Item -->
                            <div class="col-12 mb-40">
                                <div class="ee-blog">
                                    <a href="single-blog-left-sidebar.html" class="image"><img src="{{asset('images/blog/blog-12.jpg')}}" alt="Blog Image"></a>
                                    <div class="content">
                                        <h3><a href="single-blog-left-sidebar.html">{{$post->title}}</a></h3>
                                        <ul class="meta">
                                            <li><a href="#">Momen</a></li>
                                            <li><a href="#">{{$post->created_at->diffForHumans()}}</a></li>
                                            <li><a href="#">Comments 05</a></li>
                                        </ul>
                                        <p>{{$post->body}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                </div>

                <div class="col-lg-4 col-12 order-2 order-lg-1">

                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar mb-40">

                        <h4 class="title">CATEGORIES</h4>

                        <ul>
                            @foreach($category as $tag)
                                <li><a href="{{route('categoryBlog', $tag->id)}}">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>

                    </div>

                    <!-- Blog Sidebar -->
                    <div class="blog-sidebar mb-40">

                        <h4 class="title">RECENT POST</h4>

                        <div class="sidebar-blog">
                            <a href="#" class="image"><img src="assets/images/blog/sidebar-blog-1.jpg" alt="Sidebar Blog"></a>
                            <div class="content">
                                <h5><a href="#">PS4 Play Station for playing games</a></h5>
                                <span>30 January 2018</span>
                            </div>
                        </div>

                        <div class="sidebar-blog">
                            <a href="#" class="image"><img src="assets/images/blog/sidebar-blog-2.jpg" alt="Sidebar Blog"></a>
                            <div class="content">
                                <h5><a href="#">Kitchen Appliances Toster</a></h5>
                                <span>26 January 2018</span>
                            </div>
                        </div>

                        <div class="sidebar-blog">
                            <a href="#" class="image"><img src="assets/images/blog/sidebar-blog-3.jpg" alt="Sidebar Blog"></a>
                            <div class="content">
                                <h5><a href="#">Most Innovative Smartphone</a></h5>
                                <span>20 January 2018</span>
                            </div>
                        </div>

                    </div>




                </div>

            </div>
        </div>
    </div><!--
@endsection

