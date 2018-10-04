@extends('layouts.app')



@section('content')

    <div class="container">
        <h2>Edit post</h2>
        <form method="post" action="/posts/{{$post->id}}" class="create">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="title">Edit Title</label>
                <input type="text" name="title" placeholder="enter title" value="{{$post->title}}" class="form-control">
                {{csrf_field()}}
            </div>
            <div class="form-inline">
                <div class="form-group">
                    <label for="house_number">House Number</label>
                    <input type="number" name="house_number" placeholder="enter number" value="{{$post->house_number}}"class="form-control inline-form-input">
                </div>
                <div class="form-group form-check">
                    <label for="post_code">Post code</label>
                    <input type="text" name="post_code" placeholder="enter postCode" value="{{$post->post_code}}" class="form-control inline-form-input">
                </div>
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
                <label for="price">Price £</label>
                <input type="number" name="price" placeholder="£100000" value="{{$post->price}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="commission">Sourcer commission £</label>
                <input type="number" name="commission" placeholder="£5000" value="{{$post->commission}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" rows="3"
                          placeholder="extra details...">{{$post->description}}</textarea>
            </div>


            <input type="submit" name="submit" value="UPDATE"
                   onclick="return confirm('Please confirm to update your listing')" class="btn">


        </form>
        <form method="post" action="/posts/{{$post->id}}">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="DELETE"
                   onclick="return confirm('Are you sure you want to delete this listing?')" class="btn">

        </form>

    </div>





@endsection
