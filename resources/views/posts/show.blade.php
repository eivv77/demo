@extends('layouts.app')

@section('content')

    <br>
    <a href="/posts" class="btn btn-outline-dark">Go Back</a>

    <br><br>
    <h1>{{$post->title}}</h1>

    <img style=" width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
    <div>
        {{$post->body}}
    </div>

    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>

    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id],
    'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
            @endif
    @endif
@endsection

<div class="float-right"></div>
