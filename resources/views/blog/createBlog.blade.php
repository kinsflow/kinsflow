@extends('layouts/body')
@section('content')
<div class="container">
    <form method="post" action="{{route('createBlog')}}">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" name="body" rows="5" id="body"></textarea>
        </div>

        <label for="optradio">Categories:</label><br>

        <div class="form-check-inline">
            <label class="form-check-label" for="radio1">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="1" >Option 1
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label" for="radio2">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="2">Option 2
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="3">Option 2
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="radio4" name="optradio" value="4">Option 4
            </label>
        </div>
        <div class="form-check-inline">
            <label class="form-check-label">
                <input type="radio" class="form-check-input" id="radio5" name="optradio" value="5">Option 5
            </label>
        </div>

        {{--<div class="form-group">--}}
            {{--<label for="photo">Photo:</label>--}}
            {{--<input type="file" name="photo" class="form-control">--}}
        {{--</div>--}}
        <button type="submit" class="form-control btn btn-warning">Submit</button>
    </form>
</div>
@endsection

