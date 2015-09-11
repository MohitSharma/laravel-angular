@extends('layouts.default')
@section('content')
    @if(count($posts))
        @foreach($posts as $post)
          <p><strong>{{{$post->title}}}</strong> By {{{$post->user->email}}} </p>
        @endforeach
    @endif

    <pre> {{{ dd(DB::getQueryLog()) }}}</pre>
@stop