@extends('layouts.app')

@section('content')

    <form method="post" action="/posts">
        <input type="text" name="title" placeholder="Enter post title...">
        <br>
        <input type="text" name="content" placeholder="Enter post content...">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <br>
        <input type="submit" name="submit">
    </form>


@endsection