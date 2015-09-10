@extends('layouts.default')
@section('content')
    @if(count($users))
        @foreach($users as $user)
          <p><strong>{{{$user->title}}}</strong> {{{$user->email or 'default val'}}}</p>
        @endforeach
    @endif
@stop

@section('sidebar')
    @parent
    <h2> index Bar </h2>
@show
