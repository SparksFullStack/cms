@extends('layouts.app')

@section('content')

    <ul>
        @foreach($allPosts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>


@endsection