@extends('layouts/body')
@section('content')





    <!-- Single Product Section Start -->
    <div class="product-section section mt-90 mb-90">
        <div class="container">

            <div class="row mb-90">

                <div class="col-lg-6 col-12 mb-50">

                    <!-- Image -->
                    <div class="single-product-image thumb-right">

                        <div class="tab-content">
                            <div id="single-image-1" class="tab-pane fade show active big-image-slider">
                                <div class="big-image"><img src="{{asset('images/single-product/big-1.png')}}" alt="Big Image"><a href="assets/images/single-product/big-1.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                                <div class="big-image"><img src="{{asset('images/single-product/big-2.png')}}" alt="Big Image"><a href="assets/images/single-product/big-2.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                                <div class="big-image"><img src="{{asset('images/single-product/big-3.png')}}" alt="Big Image"><a href="assets/images/single-product/big-3.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            </div>
                            <div id="single-image-2" class="tab-pane fade big-image-slider">
                                <div class="big-image"><img src="{{asset('images/single-product/big-7.png')}}" alt="Big Image"><a href="assets/images/single-product/big-7.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                                <div class="big-image"><img src="{{asset('images/single-product/big-8.png')}}" alt="Big Image"><a href="assets/images/single-product/big-9.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                                <div class="big-image"><img src="{{asset('images/single-product/big-9.png')}}" alt="Big Image"><a href="assets/images/single-product/big-9.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            </div>
                            <div id="single-image-3" class="tab-pane fade big-image-slider">
                                <div class="big-image"><img src="{{asset('images/single-product/big-13.png')}}" alt="Big Image"><a href="assets/images/single-product/big-13.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                                <div class="big-image"><img src="{{asset('images/single-product/big-14.png')}}" alt="Big Image"><a href="assets/images/single-product/big-14.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                                <div class="big-image"><img src="{{asset('images/single-product/big-15.png')}}" alt="Big Image"><a href="assets/images/single-product/big-15.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            </div>
                        </div>

                        <div class="thumb-image-slider nav" data-vertical="true">
                            <a class="thumb-image active" data-toggle="tab" href="#single-image-1"><img src="{{asset('images/single-product/thumb-1.png')}}" alt="Thumbnail Image"></a>
                            <a class="thumb-image" data-toggle="tab" href="#single-image-2"><img src="{{asset('images/single-product/thumb-2.png')}}" alt="Thumbnail Image"></a>
                            <a class="thumb-image" data-toggle="tab" href="#single-image-3"><img src="{{asset('images/single-product/thumb-3.png')}}" alt="Thumbnail Image"></a>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6 col-12 mb-50">

                    <!-- Content -->
                    <div class="single-product-content">

                        <!-- Category & Title -->
                        <div class="head-content">

                            <div class="category-title">
                                <a href="#" class="cat">{{$products->category->name}}</a>
                                <h5 class="title">{{$products->name}}</h5>
                            </div>

                            <h5 class="price">{{'N'.$products->price}}</h5>

                        </div>

                        <div class="single-product-description">

                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>

                            <div class="desc">
                                <p>{{$products->description}}</p>
                            </div>

                            <span class="availability">Availability: <span>{{$products->counter < 1 ? 'not in stock' : 'in stock'}}</span></span>

                            <div class="quantity-colors">

                                <div class="quantity">
                                    <h5>Quantity: {{$products->counter}}</h5>
                                    {{--<span class="availability"></span>--}}
                                </div>

                                <div class="colors">
                                    <h5>Color</h5>
                                    <select class="nice-select">
                                        <option>red</option>
                                        <option>black</option>
                                        <option>yellow</option>
                                        <option>grey</option>
                                    </select>
                                </div>

                            </div>

                            <div class="d-inline actions">

                                <a class="form col-sm-8 form-control" href="{{route('addtocart', $products->id)}}">
                                    <input type="button" class="bg-warning text-bold text-black-50 form form-control" value="Add To Cart" id="testa">
                                </a>
                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                            </div>

                            {{--<div class="tags">--}}

                                {{--<h5>Tags:</h5>--}}
                                {{--<a href="#">Electronic</a>--}}
                                {{--<a href="#">Smartphone</a>--}}
                                {{--<a href="#">Phone</a>--}}
                                {{--<a href="#">Charger</a>--}}
                                {{--<a href="#">Powerbank</a>--}}

                            {{--</div>--}}

                            <div class="share">

                                <h5>Share: </h5>
                                <div class="fb-share-button" data-href="http://127.0.0.1:8000/description/5" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fdescription%2F5&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-10 col-12 ml-auto mr-auto">

                    <ul class="single-product-tab-list nav">
                        <li><a href="#product-description" class="active" data-toggle="tab" >description</a></li>
                        <li><a href="#product-specifications" data-toggle="tab" >specifications</a></li>
                        <li><a href="#product-reviews" data-toggle="tab" >reviews</a></li>
                    </ul>

                    <div class="single-product-tab-content tab-content">
                        <div class="tab-pane fade show active" id="product-description">

                            <div class="row">
                                <div class="single-product-description-content col-lg-8 col-12">{{$products->description}}</div>
                                <div class="single-product-description-image col-lg-4 col-12">
                                    <img src="assets/images/single-product/description.png" alt="description">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="product-specifications">
                            <div class="single-product-specification">
                                <ul>
                                    {{$products->slug}}
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-reviews">

                            <div class="product-ratting-wrap">
                                <div class="pro-avg-ratting">
                                    <h4>4.5 <span>(Overall)</span></h4>
                                    <span>Based on 9 Comments</span>
                                </div>
                                <div class="ratting-list">
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span>(5)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(3)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(1)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(0)</span>
                                    </div>
                                    <div class="sin-list float-left">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(0)</span>
                                    </div>
                                </div>
                                <div class="rattings-wrapper">

                                    <div class="sin-rattings">
                                        <div class="ratting-author">
                                            <h3>Cristopher Lee</h3>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    </div>

                                    <div class="sin-rattings">
                                        <div class="ratting-author">
                                            <h3>Nirob Khan</h3>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    </div>

                                    <div class="sin-rattings">
                                        <div class="ratting-author">
                                            <h3>MD.ZENAUL ISLAM</h3>
                                            <div class="ratting-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span>(5)</span>
                                            </div>
                                        </div>
                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                    </div>

                                </div>
                                <div class="ratting-form-wrapper fix">
                                    <h3>Add your Comments</h3>
                                    <form action="#">
                                        <div class="ratting-form row">
                                            <div class="col-12 mb-15">
                                                <h5>Rating:</h5>
                                                <div class="ratting-star fix">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12 mb-15">
                                                <label for="name">Name:</label>
                                                <input id="name" placeholder="Name" type="text">
                                            </div>
                                            <div class="col-md-6 col-12 mb-15">
                                                <label for="email">Email:</label>
                                                <input id="email" placeholder="Email" type="text">
                                            </div>
                                            <div class="col-12 mb-15">
                                                <label for="your-review">Your Review:</label>
                                                <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <input value="add review" type="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div><!-- Single Product Section End -->







@stop