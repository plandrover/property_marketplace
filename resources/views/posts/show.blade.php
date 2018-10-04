@extends('layouts.app')



@section('content')


    <div class="container deal-details" style="border: 1px solid black">
        <div class="row">
            <h2>{{$post->title}}</h2>
        </div>
        <div class="row listing-pic">
            @if($post->property_type ==='House')
                <img src="/images/house.jpeg">
            @elseif($post->property_type ==='Flat')
                <img src="/images/flat.jpg">
            @elseif($post->property_type ==='Land')
                <img src="/images/land1.jpeg">
            @elseif($post->property_type ==='Bungalow')
                <img src="/images/bungalow.jpg">
            @elseif($post->property_type ==='Commercial')
                <img src="/images/commercial.jpeg">
            @else
                <img src="/images/house.jpeg">
            @endif
            <div class="col-lg-12">
                <p><span class="red"> House Number:</span> {{$post->house_number}}</p>
                <p><span class="red">Post Code: </span>{{$post->post_code}}</p>
                <p><span class="red">Number of bathrooms:</span> {{$post->bathrooms_no}}</p>
                <p><span class="red">Number of beds: </span>{{$post->beds_no}}</p>
                <p><span class="red">Price: £ </span>{{$post->price}}</p>
                <p><span class="red">Commission: £ </span>{{$post->commission}}</p>
                <p><span class="red">Property type:</span> {{$post->property_type}}</p>
                <p><span class="red">Description:</span> {{$post->description}}</p>
            </div>
        </div>
        @if(Auth::user()->can('update', $post))
            <div class="row deal-sourcer">
                <div class="col-lg-12">
                    <p><a href="{{route('posts.edit',$post->id)}}">Edit this listing</a></p>
                </div>
                <a class="user-sellers" href="{{url("/usersposts")}}">See all of your posts</a>
            </div>
        @else
            <div class="row deal-sourcer">
                <a class="user-sellers" href="{{url("/usersPosts/$post->user_id")}}">See all posts by <span
                            class="user">{{ $post->user->name }} </span></a>
                <a href="#"><i class="far fa-envelope"></i></a>
            </div>
    @endif




@endsection