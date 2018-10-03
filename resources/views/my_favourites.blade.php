@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>My Favourites</h2>
                </div>
                @forelse ($myFavourites as $myFavourite)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{ $myFavourite->title }}
                        </div>

                        <div class="panel-body">
                            <ul>
                                <li>Price: £{{$myFavourite->price}}</li>
                                <li>Commision: £{{$myFavourite->commission}}</li>
                                <li>Baths: {{$myFavourite->bathrooms_no}}</li>
                                <li>Beds: {{$myFavourite->beds_no}}</li>

                            </ul>
                        </div>
                            <div class="panel-links">
                                <p><a href="{{route('posts.show', $myFavourite->id)}}">View deal</a></p>
                                <p>Listed by: <a href="{{url("/usersposts/$myFavourite->user_id")}}">{{ $myFavourite->user->name }}</a></p>
                            </div>


                        @if (Auth::check())
                            <div class="panel-footer">
                                <favourite
                                        post="{{ $myFavourite->id }}"
                                        favourited="{{ $myFavourite->favourited() ? 'true' : '' }}"
                                ></favourite>
                            </div>
                        @endif

                    </div>
                @empty
                    <p>You have no favourite posts.</p>
                @endforelse
                <div class="row listing-links">
                    <button class ="btn" onclick="goBack()">Go Back</button>

                    @if(Auth::user()->role === 'sourcer')
                        @if($myFavourite->count() < 1)

                            <a class="btn new-listings" href="{{url('/posts')}}">Favourite a listing</a>
                        @else
                            <a class="btn new-listings" href="{{url('/posts')}}">See more listings</a>
                        @endif

                    @endif
                </div>
            </div>
    </div>
@endsection