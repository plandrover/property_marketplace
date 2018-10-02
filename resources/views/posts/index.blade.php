@extends('layouts.app')



@section('content')
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-lg-12">--}}
                {{--<h2>Listings currently available</h2>--}}
            {{--</div>--}}
        {{--</div>--}}
                {{--<div class="row">--}}



            {{--<ul>--}}
                {{--@foreach($posts as $post)--}}


                    {{--<li style="border: 1px solid black; list-style: none; height: 150px; width: 50%; margin: 10px auto">--}}


                        {{--<h6>{{$post->title}}</h6>--}}
                        {{--<a href="{{route('posts.show', $post->id)}}"><img src="../images/beautiful-house.jpg" style="height: 70%; float: left; margin-right:10px"></a>--}}
                        {{--<ul>--}}
                            {{--<li>Price: £{{$post->price}}</li>--}}
                            {{--<li>Commision: £{{$post->commission}}</li>--}}
                            {{--<li>Baths: {{$post->bathrooms_no}}</li>--}}
                            {{--<li>Beds: {{$post->beds_no}}</li>--}}

                        {{--</ul>--}}


                        {{--<a href="{{route('posts.show', $post->id)}}">read more</a>--}}
                        {{--<p>Listed by: <a href="{{url("/usersposts/$post->user_id")}}">{{ $post->user->name }}</a></p>--}}


                        {{--add a user profile click from listing--}}
                        {{--add a user name--}}



                    {{--</li>--}}


                {{--@endforeach--}}

            {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="row">--}}
            {{--@if(Auth::user()->role === 'sourcer')--}}
                {{--@if($posts->count() > 0)--}}

                {{--<a href="{{route('posts.create')}}">Create another new listing</a>--}}
                    {{--@else--}}
                    {{--<p>You haven't listed a poperty yet!</p>--}}
                    {{--<a href="{{route('posts.create')}}">Create your first listing here</a>--}}
                    {{--@endif--}}

                {{--@endif--}}
        {{--</div>--}}
        {{--</div>--}}


    {{--</div>--}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>Listings currently available </h2>
                </div>
                @forelse ($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $post->title }}
                        </div>

                        <div class="panel-body">
                            <ul>
                                <li>Price: £{{$post->price}}</li>
                                <li>Commision: £{{$post->commission}}</li>
                                <li>Baths: {{$post->bathrooms_no}}</li>
                                <li>Beds: {{$post->beds_no}}</li>

                            </ul>
                        </div>
                        <p> {{$post->description}} <a href="{{route('posts.show', $post->id)}}">  ...read more</a></p>

                        <p>Listed by: <a href="{{url("/usersposts/$post->user_id")}}">{{ $post->user->name }}</a></p>

                        @if (Auth::check())
                            <div class="panel-footer">
                                <favourite
                                        post="{{ $post->id }}"
                                                favourited="{{ $post->favourited() ? 'true' : '' }}"
                                ></favourite>
                            </div>
                        @endif

                        {{--@if (Auth::check())--}}
                            {{--<div class="panel-footer">--}}
                                {{--<favorite>--}}
                                    {{--post="{{ $post->id }}"--}}
                                    {{--favourited="{{ $post->favourited() ? 'true' : 'false' }}"--}}
                                {{--</favorite>--}}
                            {{--</div>--}}
                        {{--@endif--}}

                    </div>
                @empty
                    <p>No post created.</p>
                @endforelse
                <div class="row">
                    @if(Auth::user()->role === 'sourcer')
                        @if($posts->count() > 0)

                            <a href="{{route('posts.create')}}">Create another new listing</a>
                        @else
                            <p>You haven't listed a poperty yet!</p>
                            <a href="{{route('posts.create')}}">Create your first listing here</a>
                        @endif

                    @endif
                </div>
                <button class ="btn" onclick="goBack()">Go Back</button>

                <div class="pagination-bar">
                    {{ $posts->links() }}

                </div>

            </div>
        </div>
    </div>


@endsection