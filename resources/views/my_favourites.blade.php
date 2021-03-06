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
                        <div class="panel-body " id="favs">
                            @if($myFavourite->property_type ==='House')
                                <img src="/images/house.jpeg">
                            @elseif($myFavourite->property_type ==='Flat')
                                <img src="/images/flat.jpg">
                            @elseif($myFavourite->property_type ==='Land')
                                <img src="/images/land1.jpeg">
                            @elseif($myFavourite->property_type ==='Bungalow')
                                <img src="/images/bungalow.jpg">
                            @elseif($myFavourite->property_type ==='Commercial')
                                <img src="/images/commercial.jpeg">
                            @else
                                <img src="/images/house.jpeg">
                            @endif
                            <ul>
                                <li><i class="fas fa-bath listing-icon"></i>
                                    <p>{{$myFavourite->bathrooms_no}}</p></li>
                                <li><i class="fas fa-bed listing-icon"></i>
                                    <p>{{$myFavourite->beds_no}}</p></li>
                                <div class="price-p row">
                                    <div class="col-lg-4">
                                        <span class="red">Price:</span>
                                        <p> £{{$myFavourite->price}}</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="red">Commision:</span>
                                        <p> £{{$myFavourite->commission}}</p>
                                    </div>


                                </div>
                            </ul>
                        </div>
                        <div class="panel-links">
                            <p>{{{$myFavourite->description}}} <a href="{{route('posts.show', $myFavourite->id)}}"> Read
                                    more</a></p>
                            <p>Listed by: <a
                                        href="{{url("/usersposts/$myFavourite->user_id")}}">{{ $myFavourite->user->name }}</a>
                            </p>
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
                    <button class="btn" onclick="goBack()">Go Back</button>

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
    </div>
@endsection