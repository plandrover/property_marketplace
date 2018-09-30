@extends('layouts.app')



@section('content')


    <ul>
        @foreach($posts as $post)


            <li style="border: 1px solid black; list-style: none; margin: 10px; height: 100px; "  >


                <a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a>
                <ul>
                    <li>Baths: {{$post->bathrooms_no}}</li>
                    <li>Beds: {{$post->beds_no}}</li>


                </ul>


                <a href="{{route('posts.show', $post->id)}}">read more</a>


            </li>


        @endforeach

    </ul>

    <a href="{{route('posts.create')}}">Create a new listing</a>




@endsection