@extends('layouts/body')
@section('content')





    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="page-banner-wrap row row-0 d-flex align-items-center ">

            <!-- Page Banner -->
            <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
                <div class="page-banner">
                    <h1>Wishlist</h1>
                    <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Banner -->
            <div class="col-lg-4 col-md-6 col-12 order-lg-1">
                <div class="banner"><a href="#"><img src="{{asset('images/banner/banner-15.jpg')}}" alt="Banner"></a></div>
            </div>

            <!-- Banner -->
            <div class="col-lg-4 col-md-6 col-12 order-lg-3">
                <div class="banner"><a href="#"><img src="{{asset('images/banner/banner-14.jpg')}}" alt="Banner"></a></div>
            </div>

        </div>
    </div><!-- Page Banner Section End -->

    <!-- Cart Page Start -->
    <div class="page-section section mt-90 mb-90">
        <div class="container">
            <div class="text-center">
                @if(Session::has('message'))
                    <div class="d-inline-block text-center ml-3 col-sm-5 alert alert-dismissible alert-info">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>{{Session::get('message')}}</h4>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Image</th>
                                    <th class="pro-title">Product</th>
                                    <th class="pro-price">Price</th>
                                    <th class="pro-quantity">          </th>
                                    {{--<th class="pro-subtotal">Total</th>--}}
                                    <th class="pro-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($wishlists as $wishlist)
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img src="{{asset('images/product/product-1.png')}}" alt="Product"></a></td>
                                    <td class="pro-title"><a href="#">{{$wishlist->product ? $wishlist->product->name : ''}}</a></td>
                                    <td class="pro-price"><span>{{$wishlist->product ? 'N'.$wishlist->product->price : ''}}</span></td>
                                    {{--<td class="pro-quantity"><div class="pro-qty"><input type="text" value="1"></div></td>--}}
                                    <td class="pro-addtocart">
                                        <a class="form form-control" href="{{$wishlist->product ? route('addtocart', $wishlist->product->id) : ''}}">
                                            <input type="button" class="bg-warning text-bold text-black-50 form form-control" value="Add To Cart" id="testa">
                                        </a>
                                    </td>
                                    <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page End -->













@endsection
