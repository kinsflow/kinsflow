<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E&E - Electronics eCommerce Bootstrap4 HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <!-- Modernizer JS -->
    <script src="{{asset('js/vendor/modernizer-2.8.3.min.js')}}"></script>
    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('css/icon-font.min.css')}}">


</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0"></script>
<!-- Header Section Start -->
<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-one header-top-border pt-10 pb-10">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-10 mb-10">
                    <!-- Header Links Start -->
                    <div class="header-links">
                        <a href="track-order.html"><img src="{{asset('images/icons/car.png')}}" alt="Car Icon"> <span>Track your order</span></a>
                        <a href="store.html"><img src="{{asset('images/icons/marker.png')}}" alt="Car Icon"> <span>Locate Store</span></a>
                    </div><!-- Header Links End -->
                </div>

                <div class="col order-12 order-xs-12 order-lg-2 mt-10 mb-10">
                    <!-- Header Advance Search Start -->
                    <div class=" header-advance-search">

                        {{--<form>--}}
                            <div class="input">
                                <input type="text" name="search" id="search" placeholder="Search your product">
                            </div>
                            <div class="select">
                                <select class="nice-select">
                                    @foreach($category as $tag)
                                        <a href="{{Auth::user() ? route('category', $tag->id) : route('login') }}">
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        </a>
                                    @endforeach
                                </select>
                            </div>
                            <div class="submit">
                                <button data-toggle="modal" data-target="#myModal"><i
                                            class="icofont icofont-search-alt-1"></i></button>
                            </div>
                        {{--</form>--}}

                    </div><!-- Header Advance Search End -->
                </div>

                <div class="col order-2 order-xs-2 order-lg-12 mt-10 mb-10">
                    <!-- Header Account Links Start -->
                    <div class="header-account-links">
                        @guest
                            <a href="{{route('login')}}"><i class="icofont icofont-login d-none"></i> <span>Login</span></a>
                            @if (Route::has('registration'))
                                <a href="{{route('signup')}}"><i class="icofont icofont-user-alt-7"></i> <span>my account</span></a>
                            @endif

                        @else
                            <li>
                                <a><i class="icofont icofont-login d-none"></i>
                                    <span>{{ Auth::user()->first_name ." ". Auth::user()->last_name}}</span>
                                </a>


                                <a class="" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{--<i class="icofont icofont-user-alt-7"></i>--}}
                                    <span>{{ __('Logout') }}</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>

                            </li>
                        @endguest
                    </div><!-- Header Account Links End -->
                </div>

            </div>
        </div>
    </div><!-- Header Top End -->






    <div class="modal fade" id="myModal">
        <div class="modal-dialog-scrollable">
            <div class="modal-content">
                <div style="display: none" id="alltable" class="table-responsive">
                    <div class="modal-header">
                    <h3 class="modal-title" align="center">
                        Total Data : <span id="total_records"></span>
                    </h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Slug</th>
                            <th>Price</th>
                            <th>Time since available</th>
                        </tr>
                        </thead>
                        <tbody class="tablebody">

                        </tbody>
                    </table>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- Header Bottom Start -->
    <div class="header-bottom header-bottom-one header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col mt-15 mb-15">
                    <!-- Logo Start -->
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="{{asset('images/logo.png')}}"
                                 alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                            <img class="theme-dark" src="{{asset('images/logo-light.png')}}"
                                 alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                        </a>
                    </div><!-- Logo End -->
                </div>

                <div class="col order-12 order-lg-2 order-xl-2 d-none d-lg-block">
                    <!-- Main Menu Start -->
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="active"><a href="index.html">HOME</a></li>
                                <li class="menu-item-has-children"><a href="shop-grid.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children"><a href="shop-grid.html">shop grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-grid.html">shop grid</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="single-product.html">Single
                                                Product</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-product.html">Single Product 1</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">PAGES</a>
                                    <ul class="mega-menu three-column">
                                        <li><a href="#">Column One</a>
                                            <ul>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="best-deals.html">Best Deals</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column Two</a>
                                            <ul>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="feature.html">Feature</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="store.html">Store</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column Three</a>
                                            <ul>
                                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{Auth::user() ? route('allblog') : route('login')}}">Visit Blog</a>
                                        </li>
                                        <li><a href="{{Auth::user() ? route('create.blog') : route('login')}}">Create Post / Initialize A Discussion</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">CONTACT</a></li>
                            </ul>
                        </nav>
                    </div><!-- Main Menu End -->
                </div>

                <div class="col order-2 order-lg-12 order-xl-12">
                    <!-- Header Shop Links Start -->
                    <div class="header-shop-links">

                        <!-- Compare -->
                        <a href="compare.html" class="header-compare"><i class="ti-control-shuffle"></i></a>
                        <!-- Wishlist -->
                        <a href="{{Auth::user() ? route('wishlist') : route('login')}}" class="header-wishlist"><i
                                    class="ti-heart"></i> <span
                                    class="number">{{Auth::user() ? count($wishlists) : ''}}</span></a>
                        <!-- Cart -->
                        <a href="{{Auth::user() ? route('showcart') : route('login')}}" class="header-car"><i
                                    class="ti-shopping-cart"></i> <span
                                    class="number">{{Auth::user() ? count($carts) : ''}}</span></a>

                    </div><!-- Header Shop Links End -->
                </div>

                <!-- Mobile Menu -->
                <div class="mobile-menu order-12 d-block d-lg-none col"></div>

            </div>
        </div>
    </div><!-- Header Bottom End -->

    <!-- Header Category Start -->
    <div class="header-category-section">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Header Category -->
                    <div class="header-category">

                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap d-block d-lg-none">
                            <!-- Category Toggle -->
                            <button class="category-toggle">Categories <i class="ti-menu"></i></button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                @foreach($category as $tag)
                                    <li>
                                        <a href="{{Auth::user() ? route('category', $tag->id) : route('login')}}">{{$tag->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>

                    </div>

                </div>
            </div>
        </div>
    </div><!-- Header Category End -->

    <br>
    <br>
    <br>
    <br>


    @yield('content')


    <div class="brands-section section mb-90">
        <div class="container">
            <div class="row">

                <!-- Brand Slider Start -->
                <div class="brand-slider col">
                    <div class="brand-item col"><img src="{{asset('images/brands/brand-1.png')}}" alt="Brands"></div>
                    <div class="brand-item col"><img src="{{asset('images/brands/brand-2.png')}}" alt="Brands"></div>
                    <div class="brand-item col"><img src="{{asset('images/brands/brand-3.png')}}" alt="Brands"></div>
                    <div class="brand-item col"><img src="{{asset('images/brands/brand-4.png')}}" alt="Brands"></div>
                    <div class="brand-item col"><img src="{{asset('images/brands/brand-5.png')}}" alt="Brands"></div>
                </div><!-- Brand Slider End -->

            </div>
        </div>
    </div><!-- Brands Section End -->

    <!-- Subscribe Section Start -->
    <div class="subscribe-section section bg-gray pt-55 pb-55">
        <div class="container">
            <div class="row align-items-center">

                <!-- Mailchimp Subscribe Content Start -->
                <div class="col-lg-6 col-12 mb-15 mt-15">
                    <div class="subscribe-content">
                        <h2>SUBSCRIBE <span>OUR NEWSLETTER</span></h2>
                        <h2><span>TO GET LATEST</span> PRODUCT UPDATE</h2>
                    </div>
                </div><!-- Mailchimp Subscribe Content End -->


                <!-- Mailchimp Subscribe Form Start -->
                <div class="col-lg-6 col-12 mb-15 mt-15">

                    <form class="subscribe-form" action="#">
                        <input type="email" autocomplete="off" placeholder="Enter your email here"/>
                        <button>subscribe</button>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre">
                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                    </div><!-- mailchimp-alerts end -->

                </div><!-- Mailchimp Subscribe Form End -->

            </div>
        </div>
    </div><!-- Subscribe Section End -->

    <!-- Footer Section Start -->
    <div class="footer-section section bg-ivory">

        <!-- Footer Top Section Start -->
        <div class="footer-top-section section pt-90 pb-50">
            <div class="container">

                <!-- Footer Widget Start -->
                <div class="row">
                    <div class="col mb-90">
                        <div class="footer-widget text-center">
                            <div class="footer-logo">
                                <img src="{{asset('images/logo.png')}}"
                                     alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                                <img class="theme-dark" src="{{asset('images/logo-light.png')}}"
                                     alt="E&E - Electronics eCommerce Bootstrap4 HTML Template">
                            </div>
                            <p>Electronics product actual teachings of he great explorer of the truth, the malder of
                                human happiness. No one rejects</p>
                        </div>
                    </div>
                </div><!-- Footer Widget End -->

                <div class="row">

                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">CONTACT INFO</h4>

                            <p class="contact-info">
                                <span>Address</span>
                                You address will be here <br>
                                Lorem Ipsum text </p>

                            <p class="contact-info">
                                <span>Phone</span>
                                <a href="tel:08169988402">08169988402</a>
                                <a href="tel:07083345461">07083345461</a>
                            </p>

                            <p class="contact-info">
                                <span>Web</span>
                                <a href="mailto:kingsley.davidakindele@gmail.com">kingsley.davidakindele@gmail.com</a>
                                <a href="#">www.example.com</a>
                            </p>

                        </div>
                    </div><!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">CUSTOMER CARE</h4>

                            <ul class="link-widget">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="{{Auth::user() ? route('showcart') : route('login')}}">Cart</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="{{Auth::user() ? route('wishlist') : route('login')}}">Wishlist</a></li>
                                <li><a href="{{Auth::user() ? route('allblog') : route('login')}}">blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>

                        </div>
                    </div><!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">INFORMATION</h4>

                            <ul class="link-widget">
                                <li><a href="#">Track your order</a></li>
                                <li><a href="#">Locate Store</a></li>
                                <li><a href="#">Online Support</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Payment</a></li>
                                <li><a href="#">Shipping & Returns</a></li>
                                <li><a href="#">Gift coupon</a></li>
                                <li><a href="#">Special coupon</a></li>
                            </ul>

                        </div>
                    </div><!-- Footer Widget End -->

                    <!-- Footer Widget Start -->
                    <div class="col-lg-3 col-md-6 col-12 mb-40">
                        <div class="footer-widget">

                            <h4 class="widget-title">LATEST TWEET</h4>

                            <div class="footer-tweet"></div>

                        </div>
                    </div><!-- Footer Widget End -->

                </div>

            </div>
        </div><!-- Footer Bottom Section Start -->

        <!-- Footer Bottom Section Start -->
        <div class="footer-bottom-section section">
            <div class="container">
                <div class="row">

                    <!-- Footer Copyright -->
                    <div class="col-lg-6 col-12">
                        <div class="footer-copyright"><p>&copy; Copyright, 2018 All Rights Reserved by <a
                                        href="https://freethemescloud.com/">Free themes Cloud</a></p></div>
                    </div>

                    <!-- Footer Payment Support -->
                    <div class="col-lg-6 col-12">
                        <div class="footer-payments-image"><img src="{{asset('images/payment-support.png')}}"
                                                                alt="Payment Support Image"></div>
                    </div>

                </div>
            </div>
        </div><!-- Footer Bottom Section Start -->

    </div><!-- Footer Section End -->

    <!-- Popup Subscribe Section Start -->


    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('js/vendor/modernizer-2.8.3.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins JS -->
    <script src="{{asset('js/plugins.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>

    <script>

        $(document).ready(function () {
            fetch_users_data();

            function fetch_users_data(query = '') {
                $.ajax({
                    url: "{{route('livesearch')}}",
                    method: "GET",
                    data: {query: query},
                    dataType: 'json',
                    success: function (data) {
                        $('.tablebody').html(data.table_data);
                        $('#total_records').text(data.total_data)
                    }
                })
            }

            $(document).on('keyup', '#search', function () {
                var query = $(this).val();
                // console.log(query);
                $('#alltable').show().fadeIn(5000);
                fetch_users_data(query);
            });


            $(document).on('click', '#testa', function () {
                console.log('onclick working')
            });
        });
    </script>
</div>
</body>
</html>
