@extends('layouts.app')



@section('content')


    <div class="container" style="border: 1px solid black">
        <div class="row">
            <h2>{{$post->title}}</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p>House Number: {{$post->house_number}}</p>
                <p>Post Code: {{$post->post_code}}</p>
                <p>Number of bathrooms:  {{$post->bathrooms_no}}</p>
                <p>Number of beds: {{$post->beds_no}}</p>
                <p>Price: {{$post->price}}</p>
                <p>Commission: {{$post->commission}}</p>
                <p>Property type: {{$post->property_type}}</p>
                <p>Description: {{$post->description}}</p>
            </div>
        </div>
        @if(Auth::user()->can('update', $post))
        <div class="row">
            <div class="col-lg-12">
                <p><a href="{{route('posts.edit',$post->id)}}">edit this listing</a></p>
            </div>
        </div>
        @endif
        <div class="row">
            <a href="{{url("/usersPosts/$post->user_id")}}">See all posts by this {{ $post->user->name }} </a>
        </div>



    </div>





@endsection