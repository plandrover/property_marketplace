@extends('layouts.app')



@section('content')



    {{--<form  method="post" action="/posts" style="color: black">--}}

        {{--<label for="title">Title</label>--}}
        {{--<input type="text" name="title" placeholder="enter title">--}}
        {{--{{csrf_field()}}--}}

        {{--<label for="houseNumber">House Number</label>--}}
        {{--<input type="text" name="houseNumber" placeholder="enter number">--}}

        {{--<label for="postCode">House Number</label>--}}
        {{--<input type="text" name="postCode" placeholder="enter postCode">--}}

        {{--<label for="houseNumber">House Number</label>--}}
        {{--<input type="text" name="houseNumber" placeholder="enter number">--}}
        {{--<div class="form-group">--}}
            {{--<label for="exampleFormControlSelect1">Example select</label>--}}
            {{--<select class="form-control" id="exampleFormControlSelect1">--}}
                {{--<option>1</option>--}}
                {{--<option>2</option>--}}
                {{--<option>3</option>--}}
                {{--<option>4</option>--}}
                {{--<option>5</option>--}}
            {{--</select>--}}
        {{--</div>--}}


        {{--<input type="submit" name="submit">--}}

    {{--</form>--}}
<div class="container">
    <h2>Create Post</h2>
    <form method="post" action="/posts">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="enter title">
            {{csrf_field()}}
        </div>
        <div class="form-group">
            <label for="house_number">House Number</label>
            <input type="number" name="house_number" placeholder="27">
        </div>
        <div class="form-group form-check">
            <label for="post_code">Post code</label>
            <input type="text" name="post_code" placeholder="EX1 ABC">
        </div>
        <div class="form-group">
            <label for="property_type">Property type</label>
            <select class="form-control" name="property_type">
                <option>House</option>
                <option>Flat</option>
                <option>Land</option>
                <option>Commercial</option>
                <option>Bungalow</option>
                <option>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="beds_no">No. of beds</label>
            <select class="form-control" name="beds_no">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="form-group">
            <label for="bathrooms_no">No. of bathrooms</label>
            <select class="form-control" name="bathrooms_no">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price  £</label>
            <input type="number" name="price" placeholder="100000">
        </div>
        <div class="form-group">
            <label for="commission">Sourcer commission  £</label>
            <input type="number" name="commission" placeholder="5000">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3" placeholder="extra details..."></textarea>
        </div>


        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

</div>








@endsection
