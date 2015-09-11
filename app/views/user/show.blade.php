@extends('layouts.default')
@section('content')
    <p>{{{$user->email}}}</p>
    <h2>Posts</h2>
    @foreach($user->posts as $post)
        <li>{{{$post->title}}}</li>
    @endforeach
    <h2>Categories</h2>
    @foreach($user->categories as $category)
        <li>{{{$category->name}}}</li>
    @endforeach
@stop

@section('sidebar')
    @parent
@show