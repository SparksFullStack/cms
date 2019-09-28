@extends('layouts.app')

@section('content')

    <form method="post" action="/posts">
        <input type="text" name="title" placeholder="Enter post title...">
        <input type="submit" name="submit">
    </form>


@yield('footer')