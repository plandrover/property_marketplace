@extends('layouts.app')



@section('content')


<ul>
    @foreach($posts as $post)


        <li style="border: 1px solid black; list-style: none; height: 150px; width: 50%; margin: 10px auto"  >


            <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
            <img src="../images/beautiful-house.jpg" style="height: 90%; float: left; margin-right:10px">
            <ul>
                <li>Price: £{{$post->price}}</li>
                <li>Commision: £{{$post->commission}}</li>
                <li>Baths: {{$post->bathrooms_no}}</li>
                <li>Beds: {{$post->beds_no}}</li>

            </ul>


                <a href="{{route('posts.show', $post->id)}}">read more</a>


        </li>


        @endforeach

</ul>

<a href="{{route('posts.create')}}">Create a new listing</a>




@endsection