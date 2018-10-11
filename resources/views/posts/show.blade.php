@extends('layouts.app')



@section('content')
    <div class="container">


        <div class="container deal-details" style="border: 1px solid black">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
                <li><a data-toggle="tab" href="#metrics">Metrics</a></li>
            </ul>
            <div class="tab-content">
                <div id="overview" class="tab-pane fade in active">

                    <div class="row">
                        <h2>{{$post->title}}</h2>
                    </div>
                    <div class="row listing-pic">

                        <img src="{{$post->image_pathway}}">


                        {{--@if($post->property_type ==='House')--}}
                            {{--<img src="/images/house.jpeg">--}}
                        {{--@elseif($post->property_type ==='Flat')--}}
                            {{--<img src="/images/flat.jpg">--}}
                        {{--@elseif($post->property_type ==='Land')--}}
                            {{--<img src="/images/land1.jpeg">--}}
                        {{--@elseif($post->property_type ==='Bungalow')--}}
                            {{--<img src="/images/bungalow.jpg">--}}
                        {{--@elseif($post->property_type ==='Commercial')--}}
                            {{--<img src="/images/commercial.jpeg">--}}
                        {{--@else--}}
                            {{--<img src="/images/house.jpeg">--}}
                        {{--@endif--}}
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
                </div>
                <div id="metrics" class="tab-pane fade in">
                    <div class="row">
                        <h2>Data Overview</h2>
                    </div>
                    <div class="row">
<p>ldnweidnwe</p>










                    </div>
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
                    <div class="col-lg-4">
                        <favourite id="favs-link-dissapear"
                                   post="{{ $post->id }}"
                                   favourited="{{ $post->favourited() ? 'true' : '' }}"
                        ></favourite>
                    </div>

                    {{--<a class="user-sellers" href="{{url("/usersPosts/$post->user_id")}}">See all posts by <span--}}
                    {{--class="user">{{ $post->user->name }} </span></a>--}}
                    <div class="col-lg-4">
                        <a href="{{url("/usersposts/$post->user_id")}}" class="user-sellers"> <span class="user">  see all posts by {{ $post->user->name }}</span></a>

                    </div>
                    <div class="col-lg-4">
                        <a href="#"><i class="far fa-envelope"></i></a>
                    </div>

                </div>
            @endif
        </div>

    </div>

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
