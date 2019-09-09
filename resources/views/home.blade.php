@extends('layouts/body')
@section('content')

    <div class="section col-md-5 col-6 d-flex">

        <div class="ee-account-image">



            <div class="container my-4">

                                                                                                                                                                       {{--target="_blank">Bootstrap Images Docs</a></strong></p>--}}

                <!--Grid row-->
                <div class="row float-right text-center">


                    <div class="col-md-8 mb-4">
                        <img class="col-md-12 mb-4 float-right rounded-circle z-depth-2" alt="100x100" src="images/{{Auth::user()->photos ? Auth::user()->photos->file_path : 'https://place-hold.it/300x250'}}"
                             data-holder-rendered="true">
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>

        {{--<div class="container my-4">--}}
            {{--<div class="row text-center">--}}
            {{--<div class="col-md-6 mb-4">--}}

                {{--<h2 class="my-5 h2">With shadow</h2>--}}

                {{--<img class="rounded-circle z-depth-2" alt="100x100" src="images/{{Auth::user()->photos ? Auth::user()->photos->file_path : 'https://place-hold.it/300x250'}}"--}}
                     {{--data-holder-rendered="true">--}}
            {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}




            {{--<img src="images/{{Auth::user()->photos ? Auth::user()->photos->file_path : 'https://place-hold.it/300x250'}}" alt="" class="image-placeholder">--}}
@if(!(Auth::user()->photos))
                <h3>Upload your Image</h3>
            <form enctype="multipart/form-data" method="post" action="{{route('user.photo')}}">
                @csrf
            <div class="account-image-upload">
                <input type="file" name="photos" id="account-image-upload">
                <label class="account-image-label" for="account-image-upload">Choose your image</label>
            </div>
            <div>
                <input type="submit" class="rounded form form-control btn-warning" value="SUBMIT">
            </div>
            </form>
@endif

            {{--<p>jpEG 250x250</p>--}}

        </div>

    </div>

@endsection
















































































{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">Dashboard</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
