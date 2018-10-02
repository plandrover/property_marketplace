@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h3>My Favourites</h3>
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
                        <a href="{{route('posts.show', $myFavourite->id)}}">read more</a>
                        <p>Listed by: <a href="{{url("/usersposts/$myFavourite->user_id")}}">{{ $myFavourite->user->name }}</a></p>
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
            </div>
        </div>
    </div>
@endsection