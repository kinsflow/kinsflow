@extends('layouts/body')
@section('content')
    <div class="col-12">
        <div class="tab-content">
            <div class="text-center">
                @if(Session::has('message'))
                    <div class="d-inline-block text-center ml-3 col-sm-5 alert alert-info">
                        <h4>{{Session::get('message')}}</h4>
                    </div>
                @endif
            </div>

            <!-- Tab Pane Start -->
            <div class="tab-pane fade show active" id="tab-one">

                <!-- Product Slider Wrap Start -->
                <div class="product-slider-wrap product-slider-arrow-one">
                    <!-- Product Slider Start -->
                    <div class="product-slider product-slider-4">
                        @foreach($products as $product)
                        <div class="col pb-20 pt-10">
                            <!-- Product Start -->
                            <div class="ee-product">

                                <!-- Image -->
                                <div class="image">

                                    <a href="{{route('description', $product->id)}}" class="img"><img src="{{asset('images/product/product-1.png')}}" alt="Product Image"></a>

                                    <div class="wishlist-compare">
                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                    </div>
                                    <a class="form form-control" href="{{route('addtocart', $product->id)}}">
                                        <input type="button" class="bg-warning text-bold text-black-50 form form-control" value="Add To Cart" id="testa">
                                    </a>
                                    {{--<a href="#" id="testa" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>--}}

                                    {{--<button class="form control bg-primary">Add To Cart</button>--}}
                                </div>

                                <!-- Content -->
                                <div class="content">

                                    <!-- Category & Title -->
                                    <div class="category-title">

                                        <a href="#" class="cat">Laptop</a>
                                        <h5 class="title"><a href="single-product.html">{{$product->name}}</a></h5>

                                    </div>

                                    <!-- Price & Ratting -->
                                    <div class="price-ratting">

                                        <h5 class="price">{{'N '. $product->price}}</h5>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                    </div>

                                </div>

                            </div><!-- Product End -->
                        </div>
                        @endforeach

                        </div>

                    </div><!-- Product Slider End -->
                </div><!-- Product Slider Wrap End -->

            </div><!-- Tab Pane End -->

        </div>
    </div><!-- Product Tab Content End -->
@endsection
