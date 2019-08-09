@extends('layouts/body')
@section('content')
    <!-- Page Banner Section Start -->
    <div class="page-banner-section section">
        <div class="page-banner-wrap row row-0 d-flex align-items-center ">

            <!-- Page Banner -->
            <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
                <div class="page-banner">
                    <h1>Register</h1>
                    <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                    <div class="breadcrumb">
                        <ul>
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">Register</a></li>
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

    <!-- Register Section Start -->
    <div class="register-section section mt-90 mb-90">
        <div class="container">
            <div class="row">

                <!-- Register -->
                <div class="col-md-6 col-12 d-flex">
                    <div class="ee-register">

                        <h3>We will need for your registration</h3>
                        <p>E&E provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>

                        <!-- Register Form -->
                        <form method="POST" action="{{ route('registration') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="Your first name here">

                                    @error('first_name')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-12 mb-30">
                                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Your last name here">

                                    @error('last_name')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-12 mb-30">
                                    <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your email here">
                                    @error('email')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-12 mb-30">
                                    <input type="text"  name="contact_info" class="form-control @error('contact_info') is-invalid @enderror" placeholder="Your phone number here">
                                    @error('contact_info')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>




                                <div class="col-12 mb-30">
                                    <input type="text"  name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Your home address here">
                                    @error('address')
                                    <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <div class="col-12 mb-30">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password">
                                    @error('password')
                                   <span class="invalid-feedback text-center" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>




                                <div class="col-12 mb-30">
                                    <input type="password" name="password_confirmation" placeholder="Confirm password">
                                </div>




                                <div class="col-12">
                                    <input type="submit" value="{{ __('Register') }}">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-md-1 col-12 d-flex">

                    <div class="login-reg-vertical-boder"></div>

                </div>

                <!-- Account Image -->
                <div class="col-md-5 col-12 d-flex">

                    <div class="ee-account-image">
                        <h3>Upload your Image</h3>

                        <img src="{{asset('images/account-image-placeholder.jpg')}}" alt="Account Image Placeholder" class="image-placeholder">

                        <div class="account-image-upload">
                            <input type="file" name="chooseFile" id="account-image-upload">
                            <label class="account-image-label" for="account-image-upload">Choose your image</label>
                        </div>

                        <p>jpEG 250x250</p>

                    </div>

                </div>

            </div>
        </div>
    </div><!-- Register Section End -->

@endsection








